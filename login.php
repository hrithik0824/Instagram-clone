
<?php 

session_start();

// if user is in login session,  then user will be logged in

if(isset($_SESSION['id'])) {
    header("location. index.php");
    exit();
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Instagram Clone | Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"  />
</head>
<body>
    
    <div class="container">
        <div class="main-container">
            <div class="main-content">
                <div 
                class="slide-container"
                style="background-image: url('images/mobile-frame.png');">
               
             <div class="slide-content" id="slide-content">
                <img src="images/screen1.jpg" class="active" alt="screen1" /> 
                <img src="images/screen2.jpg" alt="screen2" /> 
                <img src="images/screen3.jpg" alt="screen3" /> 
                <img src="images/screen4.jpg" alt="screen4" /> 
                <img src="images/screen5.jpg" alt="screen5" /> 
              </div>
            </div>
            <div class=" form-container">
                <div class="form-content box">
                    <div class="logo">
                        <img src="images/logo.png" alt="" class="logo-img">
                    </div>
                    <form action="includes/process_login.php" class="login-form" id="login-form" method="POST">

                    <?php if (isset($_GET['error_message'])) { ?>

                        <p class="text-center alert-danger" id="error_message"> 
                            <?php echo $_GET["error_message"]; ?>
                        </p>

                    <?php } ?>    


                       
                        <div class="form-group">
                            <div class="login-input">
                                <input 
                                  type="text" 
                                  name="email"
                                  placeholder="Type your email..." 
                                  required
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="login-input">
                                <input 
                                  type="password" 
                                  name="password"
                                  id="password"
                                  placeholder="Type your password..." 
                                  required
                                />
                            </div>
                        </div>
                        <div class="btn-group">
                            <button class="login-btn" id="login_btn" type="submit" name="login_btn">
                                Log In
                            </button>                 
                        </div>
                    </form>
                    <div class="or">
                        <hr/>
                        <span>OR</span>
                        <hr/>
                    </div>
                    <div class="goto">
                        <p>Don't have an acount? <a href="signup.php">Sign Up</a></p>
                    </div>
                    <div class="app-download">
                        <p>Get the app.</p>
                       <div class="store-link">
                           <a href="#">
                              <img src="images/appstore.png" alt=""/>
                            </a>
                            <a href="#">
                              <img src="images/google-play.png" alt=""/>
                            </a>
                        </div> 
                    </div>    
                </div> 
            </div>
        </div>
    </div> 

       <div class="footer">
        <div class="links" id="links">
            <a href="#">About</a>
            <a href="#">Blog</a>
            <a href="#">Jobs</a>
            <a href="#">Help</a>
            <a href="#">Privacy</a>
            <a href="#">API</a>
            <a href="#">Terms</a>
            <a href="#">Top Account</a> 
            <a href="#">Hashtags</a>
            <a href="#" id="dark-btn">Dark</a>
        </div>
        <div class="copyright">
            @ 2023 Instagram from Meta.</div>
       </div>
</div>

    <!-- script-->

    <script>
        setInterval(() => {
         changeImage();
        }, 2000);

        function changeImage() {
           var images = document
            .getElementById('slide-content')
            .getElementsByTagName('img');

            var i = 0;

            for(i = 0; i < images.length; i++) {
                var image = images[i];

                if (image.classList.contains('active')) {
                    //remove active class from  this image

                    image.classList.remove('active');

                    //if we are at the last image, then go back to the first image

                    if(i == images.length - 1) {
                        var nextImage = images[0];
                        nextImage.classList.add('active');
                        break;
                    }

                    var nextImage = images[i+1];
                    nextImage.classList.add('active');
                    break;  
                }
            }
        }
   
   
        function changeMode() {
            var body = document.getElementsByTagName("body")[0];
            var footerLinks = document
            .getElementById("links")
            .getElementsByTagName("a");

            //if we are currently using dark mode 
            if(body.classList.contains("dark"))
            {
                body.classList.remove("dark");

                for(let i=0; i<footerLinks.length; i++) {
                    footerLinks[i].classList.remove("dark-mode-link");
                }
        
            }
            else
            {
                //we are currently using the light 
                body.classList.add("dark");
                for(let i = 0; i<footerLinks.length; i++)
                {
                    footerLinks[i].classList.add("dark-mode-link");
                }
            }
        }

        function verifyForm() {
            var password = document.getElementById("password").value;
     
            var error_message = document.getElementById("error_message");

            if(password.length < 6 ){
                error_message.innerHTML = "Password is to short";
                return false;
            }

            return true;
        }

        document.getElementById("dark-btn")
        .addEventListener("click", (e) =>{
         e.preventDefault();
         changeMode();   
        });

        // document.getElementById("login_form").addEventListener("submit", (e) => {
        //     e.preventDefault();
            
        //     verifyForm();
        // } );
   
   
   </script>



<!-- script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>