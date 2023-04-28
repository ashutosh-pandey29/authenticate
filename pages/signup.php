<section class="container shadow shadow-lg mt-3 ">
    <h1 class="heading">Sign Up</h1>
    <div class="row">
        <div class="col input-filed-container">
            <form action="">
                <div class="row mt-4">
                    <div class="col">
                        <label for="fname" class="form-label">First Name :</label>
                        <input type="text" name="fname" id="fname" placeholder="Enter First Name" class="form-control">
                    </div>

                    <div class="col">
                        <label for="lname" class="form-label">Last Name :</label>
                        <input type="text" name="lname" id="lname" placeholder="Enter Last Name" class="form-control">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <label for="emailid" class="form-label">Email I'd :</label>
                        <input type="email" name="emailid" id="emailid" placeholder="Enter Your Email Id "
                            class="form-control">
                    </div>
                </div>

                <div class="row  mt-3">
                    <div class="col">
                        <label for="phone" class="form-label">Phone :</label>
                        <input type="tel" name="phone" id="phone" placeholder="Enter Your Phone Number "
                            class="form-control">
                    </div>
                </div>

                <div class="row  mt-3">
                    <div class="col">
                        <label for="passcode" class="form-label">Password :</label>
                        <input type="password" name="passcode" id="passcode" placeholder="Enter Password"
                            class="form-control">
                    </div>

                    <div class="col">
                        <label for="cpasscode" class="form-label">Confirm Password :</label>
                        <input type="password" name="cpasscode" id="cpasscode" placeholder="Re-enter Password"
                            class="form-control">
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
                        SignUp With Google
                    </button>
                </div>

                <div class="col">
                    <button class="facebook-login-btn">
                        SignUp With Facebook
                    </button>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col text-center">
                    <span>I have an account</span>
                    <a href="index.php">SignIn</a>
                </div>
            </div>
        </div>
    </div>
</section>