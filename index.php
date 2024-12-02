<?php
require "header.php";
include("admin/connection/connect.php");
$sql = "Select * from home";
$result = mysqli_query($db, $sql);
$title = $short_desc = $btn_text = $btn_link = "";
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $short_desc = $row['short_desc'];
    $btn_text = $row['btn_text'];
    $btn_link = $row['btn_link'];
    $bg_img = $row['bg_img'];
}
?>

<!-- Banner -->
<div class="banner-area banner-img-one">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="banner-content">
                    <h1 class="wow slideInLeft" data-wow-duration="2s" data-wow-delay="5s"><?php echo $title; ?></h1>
                    <p><?php echo $short_desc; ?></p>
                    <a class="cmn-btn" href="<?php echo $btn_link; ?>">
                        <?php echo $btn_text; ?>
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->
<?php
$sql = "Select * from home2";
$result = mysqli_query($db, $sql);
$title = $short_desc = $btn_text = $btn_link = "";
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $short_desc = trim($row['short_desc']);
    $key_1 = $row['key_1'];
    $key_2 = $row['key_2'];
    $key_3 = $row['key_3'];
    $key_4 = $row['key_4'];
    $side_img = $row['side_img'];
}
?>
<!-- About -->
<section class="about-area ptb-100">
    <div class="container">
        <div class="row align-iems-center">
            <div class="col-lg-6">
                <div class="section-title">
                    <span class="sub-title"><?php echo $title; ?></span>
                    <!-- <h2>Design, Simulate, and Control Your Robotic System with the Action SDK</h2> -->
                </div>
                <div class="about-content">
                    <p><?php echo $short_desc; ?></p>
                    <ul>
                        <li>
                            <i class='bx bx-check'></i>
                            <?php echo $key_1; ?>
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            <?php echo $key_2; ?>
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            <?php echo $key_3; ?>
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            <?php echo $key_4; ?>
                        </li>
                    </ul>
                    <!-- <img src="assets/img/home-one/about-man.png" alt="About">
                    <img src="assets/img/home-one/about-signature.png" alt="About"> -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-img-wrap">
                    <div class="about-img-slider owl-theme owl-carousel wow ">
                        <div class="about-img-item">
                            <img src="assets/img/home-one/about1.jpg" alt="About">
                        </div>
                        <div class="about-img-item">
                            <img src="assets/img/home-one/about2.jpg" alt="About">
                        </div>
                        <div class="about-img-item">
                            <img src="assets/img/home-one/about4.jpg" alt="About">
                        </div>
                        <div class="about-img-item">
                            <img src="assets/img/home-one/about5.jpg" alt="About">
                        </div>
                    </div>
                    <div class="about-shape">
                        <!-- <img src="assets/img/home-one/about2.png" alt="About"> -->
                        <img src="assets/img/home-one/about3.jpg" alt="About">
                        <img src="assets/img/home-one/about4.png" alt="About">
                        <!-- <img src="assets/img/home-one/about5.png" alt="About"> -->
                    </div>
                    <div class="about-year">
                        <h2>35 <span>Years</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About -->
<?php
$sql = "Select * from `home3.1`";
$result = mysqli_query($db, $sql);
$title = $short_desc = $btn_text = $btn_link = "";
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $sub_title = $row['sub_title'];
}
?>
<!-- Service -->
<section class="service-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title"><?php echo $title; ?></span>
            <h2><?php echo $sub_title; ?></h2>
        </div>
        <div class="row">
            <?php
            $sql = "Select * from `home3.2`";
            $result = mysqli_query($db, $sql);
            $title = $short_desc = $btn_text = $btn_link = "";
            if (mysqli_num_rows($result) > 0) {
                $count = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['h_b_3_2_id'];
                    $title = $row['title'];
                    $short_desc = trim($row['short_desc']);
                    $img = $row['img'];
            ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="service-item">
                            <img src="assets/img/home-one/service-shape.png" alt="Service">
                            <img src="assets/img/home-one/service-shape2.png" alt="Service">
                            <i class="flaticon-lab-tool"></i>
                            <h3>
                                <a href="service-details.html"><?php echo $title; ?></a>
                            </h3>
                            <p><?php echo $short_desc; ?></p>
                            <a class="service-link" href="service-details.php">Read More</a>
                        </div>
                    </div>
            <?php
                    $count++;
                }
            } ?>
        </div>
    </div>
</section>
<!-- End Service -->
<?php
$sql = "Select * from home4";
$result = mysqli_query($db, $sql);
$title = $short_desc = $btn_text = $btn_link = "";
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $key_1_text = $row['key_1_text'];
    $key_1_value = $row['key_1_value'];
    $key_2_text = $row['key_2_text'];
    $key_2_value = $row['key_2_value'];
    $key_3_text = $row['key_3_text'];
    $key_3_value = $row['key_3_value'];
}
?>
<!-- Counter -->
<section class="counter-area pt-100">
    <div class="container">
        <div class="row align-iems-center">
            <div class="col-lg-5">
                <div class="counter-text">
                    <h2><?php echo $title; ?></h2>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-sm-4 col-lg-4">
                        <div class="counter-item">
                            <h3>
                                <span class="odometer" data-count="<?php echo $key_1_value; ?>">00</span>
                            </h3>
                            <p><?php echo $key_1_text; ?></p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4">
                        <div class="counter-item">
                            <h3>
                                <span class="odometer" data-count="<?php echo $key_2_value; ?>">00</span>
                            </h3>
                            <p><?php echo $key_2_text; ?></p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4">
                        <div class="counter-item">
                            <h3>
                                <span class="odometer" data-count="<?php echo $key_3_value; ?>">00</span>
                            </h3>
                            <p><?php echo $key_3_text; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Counter -->

<!-- Foreign -->
<div class="foreign-area">
    <div class="container-fluid">
        <div class="foreign-slider owl-theme owl-carousel">
            <?php
              $sql = "Select * from `home5`";
              $result = mysqli_query($db, $sql);
              $title = $short_desc = $btn_text = $btn_link = "";
              if (mysqli_num_rows($result) > 0) {
                $count = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                  $title = $row['title'];
                  $short_desc = trim($row['short_desc']);
                  $img = $row['img'];
                  $link_text = $row['link_text'];
                  $link = $row['link'];
              ?>
            <div class="foreign-item">
                <a href="project-details.html">
                    <img src="assets/img/home-one/foreign4.jpg" alt="Foreign">
                </a>
                <div class="foreign-bottom">
                    <h3>
                        <a href="project-details.html"><?php echo $title; ?></a>
                    </h3>
                    <span><?php echo $short_desc; ?></span>
                    <a href="<?php echo $link; ?>"><?php echo $link_text; ?></a>
                </div>
            </div>
            <?php
                  $count++;
                }
              } ?>
        </div>
    </div>
</div>
<!-- End Foreign -->

<!-- Team -->
<!-- <section class="team-area">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Team</span>
            <h2>Our Expert Team</h2>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="team-item">
                    <img src="assets/img/home-one/team2.jpg" alt="Team">
                    <h3>Andres Pedlock</h3>
                    <span>CEO, Company</span>
                    <ul>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-pinterest-alt'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-linkedin'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="team-item">
                    <img src="assets/img/home-one/team3.jpg" alt="Team">
                    <h3>Adam Meir</h3>
                    <span>Lead Developer</span>
                    <ul>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-pinterest-alt'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-linkedin'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                <div class="team-item">
                    <img src="assets/img/home-one/team1.jpg" alt="Team">
                    <h3>Jack Farnes</h3>
                    <span>Manager of Company</span>
                    <ul>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-pinterest-alt'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-linkedin'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Team -->

<!-- Benefit -->
<!-- <section class="benefit-area">
    <div class="container">
        <div class="benefit-content">
            <div class="section-title">
                <h2>Get Benefits of Using Latest Artificial Intelligence Technologies.</h2>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
            <div class="row">
                <div class="col-sm-6 col-lg-6">
                    <div class="benefit-inner">
                        <i class="flaticon-darts"></i>
                        <h4>Complete Technology Partner</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="benefit-inner">
                        <i class="flaticon-customer"></i>
                        <h4>Backed By 100% Customer References</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="benefit-inner">
                        <i class="flaticon-security-purposes"></i>
                        <h4>Fast, Scalable, & Reliable</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="benefit-inner">
                        <i class="flaticon-artificial-intelligence"></i>
                        <h4>The Emerging Tech Exparts</h4>
                    </div>
                </div>
            </div>
            <a class="cmn-btn" href="#">
                Know Details
                <i class='bx bx-right-arrow-alt'></i>
            </a>
            <div class="benefit-shape">
                <img src="assets/img/home-one/benefit-shape.png" alt="Benefit">
            </div>
        </div>
    </div>
</section> -->
<!-- End Benefit -->
<?php
$sql = "Select * from home6";
$result = mysqli_query($db, $sql);
$title = $short_desc = $btn_text = $btn_link = "";
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $sub_title = $row['sub_title'];
    $btn_text = $row['btn_text'];
    $btn_link = $row['btn_link'];
}
?>
<!-- Partner -->
<section class="partner-area pb-100">
    <div class="container">
        <div class="partner-wrap">
            <div class="partner-shape">
                <img src="assets/img/home-one/partner-shape.png" alt="Partner">
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="partner-content">
                        <div class="section-title">
                            <h2><?php echo $title; ?></h2>
                            <p style="color:#fff;"><?php echo $sub_title; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="partner-btn">
                        <a class="cmn-btn" href="<?php echo $btn_link; ?>">
                            <?php echo $btn_text; ?>
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Partner -->

<!-- Cost -->
<!-- <section class="cost-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="cost-content">
                    <div class="section-title">
                        <span class="sub-title">Project</span>
                        <h2>Professional, Reliable & Cost Effective</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
                    <ul class="align-items-center">
                        <li>
                            <img src="assets/img/home-one/cost-girl.png" alt="Cost">
                        </li>
                        <li>
                            <h4>- Teresa Mera</h4>
                            <span>Developer</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cost-img">
                    <img src="assets/img/home-one/cost.jpg" alt="Cost">
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Cost -->

<!-- Blog -->
<!-- <section class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">News</span>
            <h2>Our Latest News</h2>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-8">
                <div class="blog-item">
                    <a href="blog-details.html">
                        <img src="assets/img/home-one/blog1.jpg" alt="Blog">
                    </a>
                    <span>20 Aug 2020</span>
                    <div class="blog-inner">
                        <h3>
                            <a href="blog-details.html">Robots Are Being More Popular In The World</a>
                        </h3>
                        <a class="blog-link" href="blog-details.html">
                            Read More
                            <i class='bx bx-plus'></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="row">
                    <div class="col-sm-6 col-lg-12">
                        <div class="blog-item">
                            <a href="blog-details.html">
                                <img src="assets/img/home-one/blog2.jpg" alt="Blog">
                            </a>
                            <span>21 Aug 2020</span>
                            <div class="blog-inner">
                                <h3>
                                    <a href="blog-details.html">Know How The US Cuts Labor Adoption Of Industrial Robots</a>
                                </h3>
                                <a class="blog-link" href="blog-details.html">
                                    Read More
                                    <i class='bx bx-plus'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-12">
                        <div class="blog-item">
                            <a href="blog-details.html">
                                <img src="assets/img/home-one/blog3.jpg" alt="Blog">
                            </a>
                            <span>22 Aug 2020</span>
                            <div class="blog-inner">
                                <h3>
                                    <a href="blog-details.html">How To Make Robot In A Company</a>
                                </h3>
                                <a class="blog-link" href="blog-details.html">
                                    Read More
                                    <i class='bx bx-plus'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Blog -->
<?php
require "footer.php";
?>