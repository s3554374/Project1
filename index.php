<?php
session_start();
$debug = true;
if (isset($_SESSION['login_flag'])) {

    if ($_SESSION['login_flag'] == FALSE) {
        header("location:Login/login.php");


    }
} else {
    header("location:Login/login.php");

}

include 'assets/includes/connect_db.php';
echo "run";
include_once "assets/includes/header_home.php"
?>
<?php


if ($debug == TRUE) {
    echo get_row(0)["username"];

}


?>


<?php
function get_age($dob)
{
    $year = explode('-', $dob);


    $age = date('Y') - $year[0];


    return $age;
}


?>


<body>

<header class="header">
    <div class="header-inner body-width">
        <a href="#" class="logo"></a>
        <div class="category">
            <a href="#" class="category-link">Type</a>
            <i class="icon-arrow"></i>
            <div class="category-result"></div>
            <!-- 边框 -->
            <span class="btn-border"></span>
            <span class="result-border"></span>
            <span class="neck-border"></span>
        </div>
        <div class="search">
            <input type="text" class="search-text" placeholder="Seach here...">
            <button class="search-btn"><i class="icon-search"></i></button>
        </div>
        <nav class="header-nav">
            <ul>
                <li>
                    <span class="line"></span>
                    <a href="personal/Information.php" class="icon-text__pink register">Profile</a>
                </li>
                <li>
                    <span class="line"></span>
                    <a href="Login/login.php">Logout</a>
                </li>
                <li>
            </ul>
        </nav>
    </div>
    <div class="header-shadow"></div>
</header>

<div class="main">
    <div class="main-inner body-width">
        <div class="banner clearfix">

            <div class="slider" id="slider">
                <ul class="slider-wrapper">
                    <li class="item" data-title="qwww">
                        <a href="#" class="pic"><img src="assets/images/cont/slider_img1.jpg" alt="#"></a>
                    </li>
                    <li class="item" data-title="qww" data-author="by rui">
                        <a href="#" class="pic"><img src="assets/images/cont/slider_img2.jpg" alt="#"></a>
                    </li>
                    <li class="item" data-title="qww" data-author="by Match">
                        <a href="#" class="pic"><img src="assets/images/cont/slider_img3.jpg" alt="#"></a>
                    </li>
                    <li class="item" data-title="qwww" data-author="by rui">
                        <a href="#" class="pic"><img src="assets/images/cont/slider_img4.jpg" alt="#"></a>
                    </li>
                    <li class="item" data-title="qwww">
                        <a href="#" class="pic"><img src="assets/images/cont/slider_img5.jpg" alt="#"></a>
                    </li>
                </ul>
                <a href="javascript:" class="slider-prev"></a>
                <a href="javascript:" class="slider-next"></a>
                <div class="slider-title">
                    <h2></h2>
                    <span></span>
                </div>
                <div class="slider-btns">
                    <span class="item"></span>
                    <span class="item"></span>
                    <span class="item"></span>
                    <span class="item"></span>
                    <span class="item"></span>
                </div>
            </div>
            	<div class="banner-info">
            	  <div class="news body-border">
            		<ul>
            		  <li class="title">News</li>
            		  <li class="link">
            			<a href="#"> Weather</a>
            			<span></span>
            			<a href="#">News</a>
            			<span></span>
            			<a href="#">Hots</a>
            			<span></span>
            			<a href="#">match</a>
            			<span></span>
            			<a href="#">Other</a>
            			<span></span>
            		  </li>
            		  <li class="choose">
            			<a href="#">History of success</a>
            			<span class="icon-text__pink">HOT</span>
            		  </li>
            		  <li class="assistant">
            			<p>AD:  <a href="#">AD</a></p>
            		  </li>
            		</ul>
            	  </div>
            	  <div class="app body-border"><a href="#"></a></div>
            	</div>
        </div>
        <div class="main-cont main-album">
            <div class="main-cont__title">
                <h3>People you might interest</h3>
                <a href="#" class="more">More ></a>
            </div>
            <ul class="main-cont__list clearfix">
                <li class="item">
                    <a href="#" class="pic"><img src="assets/images/cont/main_img1.jpg" alt="#"></a>
                    <div class="info">

                        <a href="#" class="title">

                            <span id="name"><?php echo get_row(0)["username"]; ?> </span>


                        </a>
                        <p>DOB:<?php echo get_row(0)["dayofbirth"]; ?></p>
                        <p>by <a href="#" class="author">Match</a></p>
                    </div>
                </li>
                <li class="item">
                    <a href="#" class="pic"><img src="assets/images/cont/main_img2.jpg" alt="#"></a>
                    <div class="info">
                        <a href="#" class="title"><?php echo get_row(1)["username"]; ?></a>
                        <p>DOB:<?php echo get_age(get_row(1)["dayofbirth"]); ?></p>
                        <p>by <a href="#" class="author">Match</a></p>
                    </div>
                </li>
                <li class="item">
                    <a href="#" class="pic"><img src="assets/images/cont/main_img3.jpg" alt="#"></a>
                    <div class="info">
                        <a href="#" class="title"><?php echo get_row(2)["username"]; ?></a>
                        <p>DOB:<?php echo get_age(get_row(2)["dayofbirth"]); ?></p>
                        <p>by <a href="#" class="author">Match</a></p>
                    </div>
                </li>
                <li class="item">
                    <a href="#" class="pic"><img src="assets/images/cont/main_img4.jpg" alt="#"></a>
                    <div class="info">
                        <a href="#" class="title"><?php echo get_row(3)["username"]; ?></a>
                        <p>DOB:<?php echo get_age(get_row(3)["dayofbirth"]); ?></p>
                        <p>by <a href="#" class="author">Match</a></p>
                    </div>
                </li>
                <li class="item">
                    <a href="#" class="pic"><img src="assets/images/cont/main_img5.jpg" alt="#"></a>
                    <div class="info">
                        <a href="#" class="title"><?php echo get_row(4)["username"]; ?></a>
                        <p>DOB:<?php echo get_age(get_row(4)["dayofbirth"]); ?></p>
                        <p>by <a href="#" class="author">Match</a></p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="main-cont main-recommend">
            <div class="main-cont__title">
                <h3>Other</h3>

            </div>
            <div class="main-cont main-user">
                <div class="main-cont__title">
                    <h3>Recommended people</h3>
                    <a href="#" class="more">More ></a>
                </div>
                <ul class="main-cont__list clearfix">
                    <!--                    <li class="item">-->
                    <!--                        <a href="#" class="pic" style=" background: url(assets/images/cont/user_img1.jpg) no-repeat; background-size: cover; "></a>-->
                    <!--                        <a href="#" class="headImg"><img src="assets/images/cont/head_img1.jpeg" alt="#"></a>-->
                    <!--                        <div class="info">-->
                    <!--                            <a href="#" class="info-title"></a>-->
                    <!--                            <p><i class="icon-star"></i>9645</p>-->
                    <!--                            <p>Favorite: <b>Q</b></p>-->
                    <!--                        </div>-->
                    <!--                    </li>-->
                    <li class="item">
                        <a href="#" class="pic"
                           style=" background: url(assets/images/cont/user_img2.jpg) no-repeat; background-size: cover; "></a>
                        <a href="#" class="headImg"><img src="assets/images/cont/head_img2.jpeg" alt="#"></a>
                        <div class="info">
                            <a href="#" class="info-title">samdgry</a>
                            <p><i class="icon-star"></i>9645</p>
                            <p>Favorite: <b>TEST1</b></p>
                        </div>
                    </li>
                    <li class="item">
                        <a href="#" class="pic"
                           style=" background: url(assets/images/cont/user_img3.jpg) no-repeat; background-size: cover; "></a>
                        <a href="#" class="headImg"><img src="assets/images/cont/head_img3.jpeg" alt="#"></a>
                        <div class="info">
                            <a href="#" class="info-title">samsa1</a>
                            <p><i class="icon-star"></i>9645</p>
                            <p>Favorite: <b>TEST1</b></p>
                        </div>
                    </li>
                    <li class="item">
                        <a href="#" class="pic"
                           style=" background: url(assets/images/cont/user_img4.jpg) no-repeat; background-size: cover; "></a>
                        <a href="#" class="headImg"><img src="assets/images/cont/head_img4.jpeg" alt="#"></a>
                        <div class="info">
                            <a href="#" class="info-title">samsa2</a>
                            <p><i class="icon-star"></i>9645</p>
                            <p>Favorite: <b>TEST1</b></p>
                        </div>
                    </li>
                    <li class="item">
                        <a href="#" class="pic"
                           style=" background: url(assets/images/cont/user_img5.jpg) no-repeat; background-size: cover; "></a>
                        <a href="#" class="headImg"><img src="assets/images/cont/head_img5.jpeg" alt="#"></a>
                        <div class="info">
                            <a href="#" class="info-title">samsa2</a>
                            <p><i class="icon-star"></i>9645</p>
                            <p>Favorite: <b>TEST1</b></p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="main-cont main-waterfall">
                <div class="main-cont__title">
                    <h3>Coming soon</h3>
                </div>


            </div>
        </div>

    </div>

    <?php

    include_once "assets/includes/footer_home.php"
    ?>
