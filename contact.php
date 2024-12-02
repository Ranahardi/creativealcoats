<?php
require "header.php";
include("admin/connection/connect.php");
?>
<?php
$sql = "Select * from contact";
$result = mysqli_query($db, $sql);
$title = $short_desc = $btn_text = $btn_link = "";
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $breadcrumb = trim($row['breadcrumb']);
}
?>
<!-- Page Title -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2><?php echo $title; ?></h2>
                    <ul>
                        <li>
                            <a href="index.ptp"><?php echo $breadcrumb; ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title -->
<?php
$sql = "Select * from contact2";
$result = mysqli_query($db, $sql);
$title = $short_desc = $btn_text = $btn_link = "";
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $address = trim($row['address']);
    $gst_no = $row['gst_no'];
    $pan_no = $row['pan_no'];
    $email = $row['email'];
    $phone = $row['phone'];
    $map = $row['map'];
}
?>
<!-- Contact -->
<section class="contact-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-item contact-left">
                    <h3>Our Located Place</h3>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis velit libero vero, aliquid magnam sed, quidem labore unde aspernatur esse iusto quo quas, dolorum atque dignissimos asperiores. Ab, est accusantium.</p> -->
                    <ul>
                        <li>
                            <i class='bx bx-location-plus'></i>
                            Address: <?php echo $address; ?>
                        </li>
                        <li>
                            GST No. <?php echo $gst_no; ?>
                        </li>
                        <li>
                            Pan No. <?php echo $pan_no; ?>
                        </li>
                        <li>
                            <i class='bx bx-mail-send'></i>
                            <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#88e1e6eee7c8fae7eafce1eba6ebe7e5">
                                <span class="__cf_email__" data-cfemail="90f9fef6ffd0e2fff2e4f9f3bef3fffd"><?php echo $email; ?></span>
                            </a>
                        </li>
                        <li>
                            <i class='bx bx-phone-call'></i>
                            <a href="tel:<?php echo $phone; ?>">
                            <?php echo $phone; ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-item contact-right">
                    <h3>Get In Touch</h3>
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-12">
                                <button type="submit" class="contact-btn btn">
                                    Send Message
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact -->

<!-- Map -->
<div class="map-area">
    <iframe id="map" src="<?php echo $map; ?>" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<!-- End Map -->
<?php
require "footer.php";
?>