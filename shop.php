<?php 
session_start();
include 'db/db_conection.php';
if(isset($_SESSION['user'])){    
    //echo 'si hay una sesion ' . $_SESSION['user']['firstname'];
    //  TODO: CABECERA HTML-->
    include 'layouts/head_main.php' ?>

<!--TODO: CABECERA-->
<?php include 'layouts/header_top.php' ?>

<!--TODO: CABECERA DE TIPOS DE ZAPATILLAS -->
<?php include 'layouts/header_bottom.php' ?>

<!--NOTE: CONTENIDO-->
<div class="login">
    <div class="wrap">
        <div class="rsidebar span_1_of_left">
            <section class="sky-form">
                <h4>Occasion</h4>
                <div class="row row1 scroll-pane">
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Athletic
                            (20)</label>
                    </div>
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Athletic Shoes
                            (48)</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Casual (45)</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Casual (45)</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>
                    </div>
                </div>
                <h4>Category</h4>
                <div class="row row1 scroll-pane">
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Flats
                            (70)</label>
                    </div>
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Athletic Shoes
                            (48)</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Athletic Shoes
                            (48)</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Heels (38)</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>
                    </div>
                </div>
                <h4>Styles</h4>
                <div class="row row1 scroll-pane">
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Athletic
                            (20)</label>
                    </div>
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Ballerina (5)</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Pumps (7)</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>High Tops (2)</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>
                    </div>
                </div>
            </section>
            <section class="sky-form">
                <h4>Brand</h4>
                <div class="row row1 scroll-pane">
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Adidas by
                            Stella McCartney</label>
                    </div>
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Asics</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bloch</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bloch Kids</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Capezio</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Capezio Kids</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Nike</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Zumba</label>
                    </div>
                </div>
            </section>
            <section class="sky-form">
                <h4>Heel Height</h4>
                <div class="row row1 scroll-pane">
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Flat
                            (20)</label>
                    </div>
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Under 1in(5)</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>1in - 1 3/4
                            in(5)</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>2in - 2 3/4
                            in(3)</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>3in - 3 3/4
                            in(2)</label>
                    </div>
                </div>
            </section>
            <section class="sky-form">
                <h4>Price</h4>
                <div class="row row1 scroll-pane">
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>$50.00 and
                            Under (30)</label>
                    </div>
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$100.00 and Under
                            (30)</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$200.00 and Under
                            (30)</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$300.00 and Under
                            (30)</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$400.00 and Under
                            (30)</label>
                    </div>
                </div>
            </section>
            <section class="sky-form">
                <h4>Colors</h4>
                <div class="row row1 scroll-pane">
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Red</label>
                    </div>
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Green</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Black</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Yellow</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Orange</label>
                    </div>
                </div>
            </section>
        </div>
        <div class="cont span_2_of_3">
            <div class="mens-toolbar">
                <div class="sort">
                    <div class="sort-by">
                        <label>Sort By</label>
                        <select>
                            <option value="">
                                Popularity </option>
                            <option value="">
                                Price : High to Low </option>
                            <option value="">
                                Price : Low to High </option>
                        </select>
                        <a href=""><img src="public/images/arrow2.gif" alt="" class="v-middle"></a>
                    </div>
                </div>
                <div class="pager">
                    <div class="limiter visible-desktop">
                        <label>Show</label>
                        <select>
                            <option value="" selected="selected">
                                9 </option>
                            <option value="">
                                15 </option>
                            <option value="">
                                30 </option>
                        </select> per page
                    </div>
                    <ul class="dc_pagination dc_paginationA dc_paginationA06">
                        <li><a href="#" class="previous">Pages</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>

                <?php  
                     $consult = "SELECT * FROM product ";
                     $query = mysqli_query($conection, $consult);
                     while($fetch = mysqli_fetch_array($query)){
                         echo '<div class="col_1_of_single1 span_1_of_single1">
                         <a href="single.php?id='.$fetch["product_id"].'"> 
                             <div class="view1 view-fifth1">
                                 <div class="top_box">
                                     <h3 class="m_1">'.$fetch["product_name"].'</h3>
                                     <p class="m_2">'.$fetch["brand"].'</p>
                                     <div class="grid_img">
                                         <div class="css3"><img src="public/images/tabas/'.$fetch["product_image"].'"alt="" height = "150px" width = "250px" /></div>
                                         <div class="mask1">
                                             <div class="info">Quick View</div>
                                         </div>
                                     </div>
                                     <div class="price">S/.'.$fetch["product_price"].'</div>
                                 </div>
                             </div>
                             <span class="rating1">
                                 <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                                 <label for="rating-input-1-5" class="rating-star1"></label>
                                 <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                                 <label for="rating-input-1-4" class="rating-star1"></label>
                                 <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                                 <label for="rating-input-1-3" class="rating-star1"></label>
                                 <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                                 <label for="rating-input-1-2" class="rating-star"></label>
                                 <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                                 <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
                                 (45)
                             </span>
                             <ul class="list2">
                                 <li>
                                     <img src="public/images/plus.png" alt="" />
                                     <ul class="icon1 sub-icon1 profile_img">
                                         <li><a class="active-icon c1" href="#">Add To Bag </a>
                                             <ul class="sub-icon1 list">
                                                 <li>
                                                     <h3>sed diam nonummy</h3><a href=""></a>
                                                 </li>
                                                 <li>
                                                     <p>Lorem ipsum dolor sit amet, consectetuer <a href="">adipiscing
                                                             elit, sed diam</a></p>
                                                 </li>
                                             </ul>
                                         </li>
                                     </ul>
                                 </li>
                             </ul>
                             <div class="clear"></div>
                         </a>
                     </div>';
                     }
                ?>
            
        </div>
        <div class="clear"></div>
    </div>
</div>

<!--TODO: FOOTER -->
<?php include 'layouts/footer.php';
}else{
    header("location:index.php");
}
?>