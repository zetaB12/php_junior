<!--NOTE: CABECERA -->
<div class="header-top">
    <div class="wrap">
        <div class="logo">
            <a href="index.php"><img src="public/images/logo.png" alt="" /></a>
        </div>
        <div class="cssmenu">
            <ul>
                <li class="active"><a href="register.php">Sign up</a></li>
                <li><a href="shop.php">Store Locator</a></li>
                <li><a href="checkout.php">CheckOut</a></li>
                <?php 
                if(isset($_SESSION['user'])){    
                   // echo 'si hay una sesion ' . $_SESSION['user']['firstname'];
                    echo "<li><a href='function/fn_logout.php'>Sign off</a></li>" ;
                }else{
                    echo "<li><a href='login.php'>My Account</a></li>";
                }                
                ?>
            </ul>
        </div>
       
        <div class="clear"></div>
    </div>
</div>