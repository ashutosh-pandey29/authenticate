<?php
require_once 'includes/header.php';
if(isset($_GET['page'])=='signup'){
    include 'pages/signup.php';
}else{

?>
<section class="container shadow shadow-large mt-5">
    <h1 class="heading">Sign In</h1>
    <div class="row input-filed-container">
        <div class="col">
            <form action="" method='POST'>
                <div class="row mt-3">
                    <div class="col">
                        <label for="email" class="form-label">Email I'd :</label>
                        <input type="email" name="email" id="email" placeholder="Enter Your Email Id "
                            class="form-control" required>

                        <div id='emailerror' class='text-danger' style='font-size:13px'></div>

                    </div>
                </div>

                <div class="row  mt-3">
                    <div class="col">
                        <label for="phone" class="form-label">Phone :</label>
                        <input type="tel" name="phone" id="phone" placeholder="Enter Your Phone Number "
                            class="form-control" required>
                    </div>
                </div>


                <div class="row  mt-3">
                    <div class="col">
                        <label for="passcode" class="form-label">Password :</label>
                        <input type="password" name="passcode" id="passcode" placeholder="Enter Password"
                            class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>
                </div>


                <div class='row mt-4 text-center'>
                    <div class="col-12">
                        <div class="g-recaptcha" data-sitekey="6LfMEsUlAAAAAA34TZyTUiVlQS_ge_tJ5Y2O47-1">
                        </div>
                    </div>
                </div>

                <div class="row mt-4  text-center">
                    <div class="col">
                        <input type="submit" name="submit-btn" id="submit-btn" value="procced for OTP"
                            class="ragister-btn">
                    </div>
                </div>
            </form>


            <div class="row mt-3  text-center">
                <div class="col">
                    <button class="google-login-btn">
                        SignIn In Google
                    </button>
                </div>

                <div class="col">
                    <button class="facebook-login-btn">
                        SignIn With Facebook
                    </button>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col text-center">
                    <span>I have no account</span>
                    <a href="index.php?page=signup">create account</a>

                </div>
            </div>
        </div>
    </div>
</section>
<?php
}
require_once 'includes/footer.php';
?>