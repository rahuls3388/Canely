<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Booking Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script src="js/jquery.min.js"></script>
    
</head>
<body>
    
    <div class="wrap"> 
	<div class="pages-top">
	        <div class="logo">
				<a href="index.html"><img src="images/c-logo.png" alt=""/></a>
			 </div>
		     <div class="h_menu4"><!-- start h_menu4 -->
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">
					<li><a href="index.html">Home</a></li>
					
					<li><a href="contact.html">Contact</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
				</ul>
				<script type="text/javascript" src="js/nav.js"></script>
			</div><!-- end h_menu4 -->
			<div class="clear"></div>
		</div><!-- end header_main4 -->
     </div>
         <!--Main-->
     <div class="main">
     
     <div class="wrap">
         
    <?php
 
        /* @var $_POST type */
        $fname = ($_POST['fname']);
        $lname = ($_POST['lname']);
        $mobile = ($_POST['mobile']);
        $email = ($_POST['email']);
        $zipcode = ($_POST['zipcode']);
        $city = ($_POST['city']);
        $order_time = ($_POST['order_time']);
        $order_date = ($_POST['order_date']);
        $package = ($_POST['package']);
        $applied_coupon = ($_POST['applied_coupon']);
        $transactionId = strtoupper(uniqid('CANELY_'));

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Canely_Dev";

        $mysqli = new mysqli($servername, $username, $password, $dbname);
        if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }

        // $mysqli->query(”SET @fname = " . "'" . $mysqli->rea1_escape_string($fname) . "'");
       $mysqli->query("SET @p_fname = " . "'" . $fname . "'");
       $mysqli->query("SET @p_lname = " . "'" . $lname . "'");
       $mysqli->query("SET @p_mobile = " . "'" . $mobile . "'");
       $mysqli->query("SET @p_email = " . "'" . $email . "'");
       $mysqli->query("SET @p_zipcode = " . "'" . $zipcode . "'");
       $mysqli->query("SET @p_city = " . "'" . $city . "'");
       $mysqli->query("SET @p_orderTime = " . "'" . $order_time . "'");
       $mysqli->query("SET @p_orderDate = " . "'" . $order_date . "'");
       $mysqli->query("SET @p_package = " . "'" . $package . "'");
       $mysqli->query("SET @p_couponApplied = " . "'" . $applied_coupon . "'");
       $mysqli->query("SET @p_customerComments = " . "'" . "Some comments" . "'");
       $mysqli->query("SET @p_transactionId = " . "'" . $transactionId . "'");


        if (!$mysqli->query("CALL sp_InsertOrder(@p_transactionId, @p_fname, @p_lname, @p_mobile, "
            . "@p_email, @p_zipcode, @p_city, @p_orderTime, @p_orderDate, "
            . "@p_package, @p_couponApplied, @p_customerComments)")) {
            echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
        }
        ?>
         <div style="text-align: center">
             <img src="images/thank.jpg" style="border: #249578"/>
             <div class="m_thankyou"><?php echo "Your service has been successfully booked, Please note transaction ID for future reference: <br/> <b>" . $transactionId . "</b>" ?></div>
             <div class="m_thankyou"><?php echo "we will get back to you shortly."  ?></div>
         </div>
         
        
      </div>
     </div>
         
    <!--Footer Section Start-->
    <div class="footer">
                <div class="wrap">
                        <div class="footer-grid footer-grid1">
                                <div class="f-logo">
                                <a href="index.html"><img src="images/c-logo.png" alt="Canely logo"></a>
                        </div>
                                <p>Get closer than ever to your customers. So close that you tell them what they need well before they realize it themselves.  ~ Steve Jobs</p>
                        </div>
                        <div class="footer-grid footer-grid2">
                                <h4>Contact</h4>
                            <ul>
                                        <li><i class="phone"> </i><div class="extra-wrap">
                                                <p>+91-7506063963</p>
                                        </div></li>
                                        <li><i class="mail"> </i><div class="extra-wrap1">
                                                <p>care@canely.com</p>
                                        </div></li>
                                </ul>
                        </div>
                        <div class="footer-grid footer-grid3">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="PrivacyPolicy.html">Privacy Policy</a></li>
                                <li><a href="TearmsAndConditions.htm">Tearms & Conditions</a></li>
                                <li><a href="aboutus.html">About us</a></li>
                            </ul>
                        </div>
                        <div class="footer-grid footer-grid4">
                                <h4>Partner with us</h4>
                                <p>If you are in maid agency business, then partner us and grow your business. </p>
                                        <a href="PartnerWithUs.htm"> <input type="submit" value=""/> </a>
                        </div>
                        <div class="clear"> </div>
                </div>
    </div>
    <div class="footer-bottom">
              <div class="wrap">
            <div class="copy">
                       <p>Copyright © Canely, 2015. All rights reserved.</p>
                </div>
               <!-- <div class="social">	
                       <ul>	
                              <li class="facebook"><a href="#"><span> </span></a></li>
                              <li class="linkedin"><a href="#"><span> </span></a></li>
                              <li class="twitter"><a href="#"><span> </span></a></li>		
                       </ul>
                </div>-->
                <div class="clear"></div>
              </div>
    </div>

</body>
</html>
