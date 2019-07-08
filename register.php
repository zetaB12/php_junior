<?php 
    session_start();
	include 'function/fn_register_login.php';
?>
    <!--TODO: CABECERA HTML-->
    <?php include 'layouts/head_main.php' ?>

    <!--TODO: CABECERA-->
    <?php include 'layouts/header_top.php' ?>

    <!--TODO: CABECERA DE TIPOS DE ZAPATILLAS -->
    <?php include 'layouts/header_bottom.php' ?>

    <!--NOTE: CONTENIDO-->
    <div class="register_account">
        <div class="wrap">
            <h4 class="title">Create an Account</h4>
            <form method="POST">
                <div class="col_1_of_2 span_1_of_2">
                    <div><input type="text" name="firstName" placeholder="Firstname"></div>
                    <div><input type="text" name="lastName" placeholder="Last Name"></div>
                    <div><input type="text" name="eMail" placeholder="E-Mail"></div>
                    <div><input type="text" name="password" placeholder="password"></div>
                </div>
                <div class="col_1_of_2 span_1_of_2">
                    <div><input type="text" name="address" placeholder="Address"></div>
                    <div><select id="country" name="country" class="frm-field required">
                            <option value="null">Select a Country</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="Peru">Perú</option>
                        </select></div>
                    <div><input type="text" name="zipcode" placeholder="Zip Code"></div>
                    <div><input type="text" name="mobile" placeholder="Mobile Number"></div>
                </div>
                <button class="grey" name="register_login">Submit</button>
                <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.
                </p>
                <div class="clear"></div>
            </form>
        </div>
    </div>

    <!--TODO: FOOTER -->
    <?php include 'layouts/footer.php' ?>
