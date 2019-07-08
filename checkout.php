<?php
session_start();
include 'db/db_conection.php';
?>

<!--TODO: CABECERA HTML-->
<?php include 'layouts/script_checkout.php' ?>


<!--TODO: CABECERA-->
<?php include 'layouts/header_top.php' ?>

<!--TODO: CABECERA DE TIPOS DE ZAPATILLAS -->
<?php include 'layouts/header_bottom.php' ?>

<!--NOTE: CONTENIDO-->
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary"><br>&nbsp
                    <div class="container">
                        <form method="post" class="well" style="background-color:#fff;">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Size</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Add</th>
                                        <th>Remove</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 
                                            
                                            if (isset($_GET['id'])) {
                                                $id = $_GET['id'];
                                            }else
                                                $id = null;

                                            if (isset($_GET['action'])) {
                                                $action = $_GET['action'];
                                            }else
                                                $action = null;

                                            switch ($action) {
                                                case 'add':
                                                    if (isset($_SESSION['cart'][$id])) 
                                                        $_SESSION['cart'][$id]++;
                                                    else
                                                        $_SESSION['cart'][$id] = 1;
                                                    break;
                                                case 'remove':
                                                    if (isset($_SESSION['cart'][$id])) {
                                                        $_SESSION['cart'][$id]--;
                                                        if ($_SESSION['cart'][$id] == 0) {
                                                            unset($_SESSION['cart'][$id]);//borras el id mas no el array completo de cart
                                                        }
                                                    }
                                                break;
                                                case 'empty':
                                                    unset($_SESSION['cart']); //elimina toda el array
                                                    break;
                                            }

                                            if (isset($_SESSION['cart'])) {
                                                //var_dump( $_SESSION['cart']);
                                                
                                                $total = 0;
                                                
                                                foreach ($_SESSION['cart'] as $id => $cantidad) {
                                                    $consult = "SELECT * FROM product WHERE product_id = $id";
                                                    $result = mysqli_query($conection, $consult);
                                                    $fetch = mysqli_fetch_array($result);
                                                    $name = $fetch['product_name'];
                                                    $price = $fetch['product_price'];
                                                    $image = $fetch['product_image'];
                                                    $product_size = $fetch['product_size'];
                                                    $cost = $price * $cantidad;
                                                    $total += $cost;

                                                    echo "<tr>";
                                                    echo "<td><img height='30px' width='50px' src='public/images/tabas/".$image."'></td>";
                                                    echo "<td><input type='hidden' required value='".$id."' name='pid[]'> ".$name."</h4></td>";
                                                    echo "<td>".$product_size."</h4></td>";
                                                    echo "<td><input type='hidden' required value='".$cantidad."' name='qty[]'> ".$cantidad."</h4></td>";
                                                    echo "<td>".$price."</h4></td>";
                                                    echo "<td><a href='checkout.php?id=".$id."&action=add'><span class='glyphicon glyphicon-plus'></span></a></td>";
                                                    echo "<td><a href='checkout.php?id=".$id."&action=remove'><span class='glyphicon glyphicon-minus'></span></a></td>";
                                                    echo "<td><strong><h4>S/ ".$cost."</h4></strong>";
                                                    echo "</tr>";

                                                   
                                                }
                                               
                                                echo "<td></td>";
                                                echo "<td></td>";
                                                echo "<td></td>";
                                                echo "<td></td>";
                                                echo "<td></td>";
                                                echo "<td></td>";
                                                echo "<td><h3>TOTAL:</h3></td>";
                                                echo "<td><strong><input type='hidden' value='".$total."' required name='total'><h3 class='text-danger'>S/ ".$total."</h3></strong></td>";
                                                echo "<td><a class='btn btn-danger btn-sm pull-right' href='checkout.php?action=empty'><i class='fa fa-trash-o'></i> Empty cart</a></td>";		
                                                echo "</tr>";
                                                 if($_SESSION['cart']==null){
                                                     echo 'no queda nada';
                                                     //unset($_SESSION['cart']);
                                                }
                                                
                                            }else{
                                                echo 'nada';
                                            }
                                        ?>
                                </tbody>
                            </table>
                            <div class="pull-right">

                                <a href='index.php'><input type="button" class="btn btn-default"
                                        value="Continue Shopping"></a>
                                <button class="btn btn-primary" type="submit" name='pay_now'
                                    value="holi">Purcharse</button>
                                <?php 
                                if (isset($_POST['pay_now'])) {
                                    
                                    $id_cliente = $_SESSION['user']['customerid'];
                                    $total = $_POST['total'];
                                    //echo $total;
                                    
                                    function createRandomPassword() {
                                        $chars = "0123456789";
                                        srand((double)microtime()*1000000);
                                        $i = 0;
                                        $pass = '' ;
                                        while ($i <= 7) {
                                            $num = rand() % 33;
                                            $tmp = substr($chars, $num, 1);
                                            $pass = $pass . $tmp;
                                            $i++;
                                                            }
                                        return $pass;
                                                            }
                                                            
                                    /*values*/
                                    $r_id = createRandomPassword();

                                    $t_id = $r_id;

                            $date = date("M d, Y");
                            mysqli_query($conection, "INSERT INTO `transaction` (transaction_id, customerid, amount, order_stat, order_date) 
                                                VALUES ('$t_id', '$id_cliente', '$total', 'ON HOLD', '$date')") or die (mysqli_error());				
                        
                            $p_id = $_POST['pid'];
                            $oqty = $_POST['qty'];
                            
                            $i=0;
                            foreach($p_id as &$pro_id){
                                mysqli_query($conection, "INSERT INTO `transaction_detail` (`product_id`, `order_qty`, `transaction_id`)
                                                VALUES ('".($pro_id)."', '".($oqty[$i])."', '".($t_id)."')") or die(mysqli_error());
                                $i++;
                            }
                            //echo "<script>window.location='summary.php?tid=".$t_id."'</script>";
                            echo "<script>window.location='shop.php'</script>";
                            //header('location: shop.php');

                                }
                                ?>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!--TODO: FOOTER -->
<?php include 'layouts/footer.php' ?>