<!DOCTYPE HTML>
<html>
    <head>
        <title>Canely - Contact</title>
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
                        <li class="active"><a href="contact.html">Book Now</a></li>
                        <li><a href="aboutus.html">About Us</a></li>
                    </ul>
                    <script type="text/javascript" src="js/nav.js"></script>
                </div><!-- end h_menu4 -->
                <div class="clear"></div>
            </div><!-- end header_main4 -->
        </div>
            
         <div style="text-align: center">
             <img src="images/thank.jpg" style="border: #249578"/>
             <div class="m_thankyou_contact"><?php echo "Thanks for contacting us. <br/>"  ?></div>
             <div class="m_thankyou_contact"><?php echo "we will get back to you shortly."  ?></div>
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
                                <p>+91-7757057223</p>
                            </div></li>
                        <li><i class="mail"> </i><div class="extra-wrap1">
                                <p><a href="mailto:contact@canely.com?subject=Information needed">contact@canely.com</a></p>
                            </div></li>
                    </ul>
                </div>
                <div class="footer-grid footer-grid3">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="PrivacyPolicy.html">Privacy Policy</a></li>
                        <li><a href="TermsOfUse.htm">Terms of Service</a></li>
                        <li><a href="aboutus.html">About us</a></li>
                    </ul>
                </div>
                <div class="footer-grid footer-grid4">
                    <h4>Partner with us</h4>
                    <p>If you are in maid agency business, then partner us and grow your business. <br/>
                        Call us or email @ 7757057223, contact@canely.com
                    </p>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="wrap">
                <div class="copy">
                    <p>Copyright © Canely, 2015. All rights reserved.</p>
                </div>
                <div class="clear"></div>
            </div>
        </div>

    </body>

<?php

date_default_timezone_set('Etc/UTC');

require 'phpmailer/PHPMailerAutoload.php';



//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = localhost;

//enable this if you are using gmail smtp, for mandrill app it is not required
//$mail->SMTPSecure = 'tls';                            

//Set the SMTP port number - likely to be 25, 465 or 587
//$mail->Port = 587;
//Whether to use SMTP authentication
//$mail->SMTPAuth = true;
//Username to use for SMTP authentication
//$mail->Username = "canelyindia@gmail.com";
//Password to use for SMTP authentication
//$mail->Password = "7757057223";
//Set who the message is to be sent from
$mail->setFrom('NoReply@canely.com', 'Auto Generated mail - No Reply');
//Set an alternative reply-to address
//$mail->addReplyTo('canelyindia@gmail.com', 'Reply-to Name');
//Set who the message is to be sent to
$mail->addAddress('contact@canely.com', 'Customer Suppport Team');
//Set the subject line
$mail->Subject = 'Contact Page Query Recieved';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
$mail->isHTML(TRUE);
$mail->msgHTML(BuildMailBody());


//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
//else {
//    echo "Message sent!";
//}




function BuildMailBody()
{
    $name = ($_POST['name']);
    $email= ($_POST['email']);
    $mobile = ($_POST['mobile']);
    $city = ($_POST['city']);
    $message = ($_POST['message']);
    
    $msgBody = '<p> 
           <h4>Below query is submitted from contact us page website.</h4> 
           
            <b>Name: </b>' . $name . '<br/><br/> 
            <b>Email: </b>' . $email . ' <br/><br/> 
            <b>Mobile: </b>' .  $mobile . '<br/><br/>
            <b>City: </b>' . $city . '<br/><br/>
            <b>Comment: </b>' . $message . '<br/><br/> 
            
            <h2>This is auto generated mail.</h2>
        </p>';
    
    return $msgBody;
}


/* 
$servername = "db4free.net:3306";
$username = "canely_dev";
$password = "Password@2";
$dbname = "canely_dev";

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
   
$name = ($_POST['name']);
$email= ($_POST['email']);
$mobile = ($_POST['mobile']);
$zipcode = ($_POST['zipcode']);
$state = ($_POST['state']);
$country= ($_POST['country']);
$subject = ($_POST['subject']);
$message = ($_POST['message']);
$city = "Dummy";

$sql = "INSERT INTO tr_contactUs(Name, Email, Mobile, ZipCode, City, State, Country, Subject, CustomerQuery)";
$sql = $sql . "VALUES ('$name', '$email', '$mobile', '$zipcode', '$city', '$state', '$country', '$subject', '$message')";

if (!$mysqli->query($sql)) 
        {
            die("CALL failed: (" . $mysqli->errno . ") " . $mysqli->error);
        }
*/

?>