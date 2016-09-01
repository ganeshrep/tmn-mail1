<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TMN</title>
</head>
<body>
<style>body{background-color: #000;}
#wrapper{overflow:hidden;margin: 0 auto;color:#fff;width: 1000px;height: 1223px;position: relative;font-family: "Helvetica Neue", Helvetica, Arial;background: url("http://targetmedianetwork.target.com/assets/images/background-image.jpg") no-repeat;}
#wrapper h1{font-size: 80px;
    position: Relative;
    top: 47px;
    width: 550px;
    font-weight: normal;
    line-height: 93px;
    left: 50px;}
#wrapper .content{     position: relative;
    left: 50px;
    top: 50px;
    width: 523px;
    line-height: 22px;
    color: #ccc;
    font-size: 19px;
}
#wrapper .address{  position: relative;
    left: 384px;
    top: 55px;
    line-height: 9px;
    color: #ccc;
    font-size: 23px;}
#wrapper .download{ left: 455px;
    position: relative;
    top: 68px;
    color: #ccc;
    font-size: 21px;}
#wrapper .screen-reader-only{    border: 0;
    clip: rect(0 0 0 0);
    height: 0!important;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 0!important;
    color: #fff;}
  #wrapper a.link{     position: relative;
    top: 194px;
    color: #fff;
    text-decoration: none;
    font-size: 20px;
    left: 189px;
    text-align: center;
    width: 105px;

    padding: 40px 64px 40px 40px;}
	#contact-conatiner{
		position: relative;
		top: 70px;
		width: 670px;
		height: 330px;
		background: url("http://targetmedianetwork.target.com/assets/images/background-contact.jpg") no-repeat;
		left: 50px;
		padding: 50px;
	}
	#contact-conatiner li{list-style:none;}
	#contact-conatiner li label{display:block;font-size: 14px;  margin: 10px 0 4px 0;}
	#contact-conatiner li input{height: 28px;width: 280px;text-indent: 5px;}
	#contact-conatiner li .submit{height: 25px;width: 80px;margin-top: 25px;color:#FFF;background-color: #656565;border: 1px solid #000;}

</style>
<?php
$successMsg ='';
if(isset($_POST["tmnevents_submit"]) && ($_POST["tmnevents_submit"]=="submit")){
    $firstName = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $email_message = "Form details below.\n\n";

    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }
    $messageTemp = '<!DOCTYPE html>'.
		'<html><head>'.
		'<meta http-equiv="content-type" content="text/html"><meta charset="UTF-8">'.
		'<title>Email notification</title>'.
		'</head>'.
		'<body>'.
		'<div id="outer" style="width: 80%;margin: 0 auto;margin-top: 10px;">'.
		   '<div id="Top" style="width: 78%;margin: 0 auto;background-color: #fff;font-family: Open Sans,Arial,sans-serif;font-size: 15px;font-weight: normal;line-height: 1em;color: #444;margin-top: 10px;">'.
		   '<p>Hi,<br><br> <b>Form details below</b></p>'.
		   '<p><b><lable>First Name:</label></b>'.$firstName.'</p>'.
		   '<p><b><lable>Last Name:</label></b>'.$surname.'</p>'.
		   '<p><b><lable>Email Id:</label></b>'.$email.'<br></br>Thanks<br>'.$firstName.'</p>'.
		   '</div>'.
		  '</div>'.
		'</body></html>';
		 //$to 		= "Kelsey.Puncochar2@target.com";
     $to 		= "ganesan.d2@target.com";
    	 $subject 	= "RSVP Request";
    	 $message 	= $messageTemp;
    	 $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    mail($to,$subject,$message,$headers);
    $successMsg="Sucess";
}
?>
<div id="wrapper">
  <h1><span class="screen-reader-only">Target Media network trade mark </span>thank you<br> for your RSVP</h1>
  <p class="content">We're so glad you're able to join us! Come ready to celebrate the big news-and the launch of Target Guest Access.</p>
<?php if(isset($successMsg) && $successMsg == "Sucess"){?>
<div id="contact-conatiner">Thanks for Sharing your Information!</div>
<?php }else{?>
 <form name="frmContact" id="frmContact" action="#" method="post">
	<ul id="contact-conatiner">
		<li class="fname"><label>First name*</label><input id="name" type="text" name="name" pattern="[a-zA-Z][a-zA-Z0-9\s]*" title="Please enter valid first name" required ></li>
		<li class="lname"><label>Last name*</label><input id="surname" type="text" pattern="[a-zA-Z][a-zA-Z0-9\s]*" name="surname" title="Please enter valid last name" required></li>
		<li class="email"><label>Email*</label><input id="email" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please enter valid  vaild Email" required></li>
		<li class="button"><input class="submit" type="submit" name="tmnevents_submit" value="submit"></li>
	</ul>
  </form>
<?php } ?>
  <div class="address">
    <p><strong>September 8, 6:30-8:30pm</strong></p>
    <p>Target Gallery</p>
    <p>511 West 25th Street </p>
    <p>New York, NY</p>
  </div>
  <a class="link" target="_blank"  href="https://www.google.com/maps/place/511+W+25th+St,+New+York,+NY+10001/@40.7497056,-74.0039125,18z/data=!4m2!3m1!1s0x89c259b798ad78ef:0x6ec6b803c0b0bf1e"><span class="screen-reader-only">get directions opens in a new window</span></a>
  <p class="download"><strong>Be sure you don't miss this event.<strong></p>
</div>
</body>
</html>
