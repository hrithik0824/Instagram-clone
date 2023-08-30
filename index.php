
<?php 

session_start();

// if user id is not in session,  then they sre not logged in

if(isset($_SESSION['id'])) {
    header("location. login.php");
    exit();
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Clone</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"  />
</head>
<body>

<!--1 row navigation -->

    <nav class="navbar">
        <div class="nav-wrapper">
            <img class="brand-img" src="images/logo.png" />
            <form class="search-form">
                <input type="text" class="search-box" placeholder="search.."/>
            </form>
            <div class="nav-items">
                <i class="icon fas fa-home"></i>
                <i class="icon fas fa-plus"></i>
                <i class="icon fas fa-heart"></i>
                <div class="icon user-profile">
                    <i class="fas fa-user"></i>
                </div>

            </div>
        </div>
    </nav>

    <!-- section -->

    <section class="main">
        <div class="wrapper">

            <!--LEFT-COL-->

            <div class="left-col">

                <!-- STATUS-->

                <div class="status-wrapper">
                    <div class="status-card">
                        <div class="profile-pic">
                            <img src="images/me.jpg" alt="" />
                        </div>
                        <p class="username">username</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic">
                            <img src="images/profile.jpg" alt="" />
                        </div>
                        <p class="username">username</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic">
                            <img src="images/profile.jpg" alt="" />
                        </div>
                        <p class="username">username</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic">
                            <img src="images/profile.jpg" alt="" />
                        </div>
                        <p class="username">username</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic">
                            <img src="images/1.jpg" alt="" />
                        </div>
                        <p class="username">username</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic">
                            <img src="images/1.jpg" alt="" />
                        </div>
                        <p class="username">username</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic">
                            <img src="images/1.jpg" alt="" />
                        </div>
                        <p class="username">username</p>
                    </div>
                </div>

                <!--POST-->

                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic">
                                <img src="images/me.jpg" alt="">
                            </div>
                             <p class="username">username</p>
                        </div>
                        <i class="fas fa-ellipsis-h options"></i>
                    </div>
                    <img src="images/1.jpg" class="post-image" />
                    <div class="post-content">
                        <div class="reaction-wrapper">
                            <i class="icon fas fa-heart"></i>
                            <i class="icon fas fa-comment"></i>
                        </div>
                        <p class="likes">2457 likes</p>
                        <p class="description">
                            <span>username</span> this is a post by username</p>
                        <p class="post-time">08/03/2023</p>
                    </div>

                    <!--COMMENT BOX-->

                    <div class="comment-wrapper">
                        <img src="images/me.jpg"  class="icon">
                        <input 
                        type="text" 
                        class="comment-box" 
                        placeholder="Add a comment" />
                        <button class="comment-btn">post</button>
                    </div>

                </div>
            </div>

            <!--RIGHT-COL-->

            <div class="right-col">

                <!--PROFILE  CARD-->

                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="images/me.jpg" alt="">
                    </div>
                    <div>
                        <p class="username">username</p>
                        <p class="sub-text">sub-text</p>
                    </div>
                    <button class="logout-btn">logout</button>
                </div>

                <!--SUGGESTION CARD-->

                <p class="suggestion-text">Suggestions For You</p>

                    <div class="suggestion-card">
                        <div class="suggestion-pic">
                            <img src="images/2.jpg" alt=""/>
                        </div>
                        <div>
                            <p class="username">username</p>
                            <p class="sub-text">sub-text</p>
                        </div>
                            <button class="follow-btn">follow</button>
                        </div>  
                    </div>
            </div>
    </section>

<!-- script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    
</body>
</html>