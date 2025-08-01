<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>RATHACKER N3RD_LDN</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<head>

  <meta charset="UTF-8">

<link rel="stylesheet" href="styles.css.fake-hack.css">
  
  <title>RatHacker</title>
  <link href="https://fonts.googleapis.com/css2?family=MuseoModerno&family=Righteous&display=swap" rel="stylesheet">


</head>
<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
<body translate="no" >
  
<header class="header">
<h1 id="title">Hire hacking Service</h1>

<p id="description">
Fill the form below to hire a professional hacker
</p>
</header>

<div id="anim"></div>
<div id="anim2"></div>
<div id="anim3"></div>
<div id="anim4"></div>
<form  method="POST" >
    <div class="form-group">
      <label id="name-label" for="name">Name</label>
      <input type="text" name="anonymous" id="name" class="form-control" placeholder="Enter alias" required="">
    </div>
  
  <div class="form-group">
      <label id="email-label" for="email">Email</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Enter  Email" required="">
    
    </div>
    
  
    <div class="form-group">
      <p>What service do you require</p>
      <select id="dropdown" name="ptitle" class="form-control" required="" style="height: calc(2.25rem + 25px);">
        <option disabled="" selected="" value="">Select action</option>
        <option value="Phone hacking">Phone hacking</option>
        <option value="Website hackingb">Website hacking</option>
        <option value="Surveillance">Surveillance</option>
		<option value="Social Media hacking">Social Media hacking</option>
        <option value="Email Hacking">Email Hacking</option>
        <option value="other">Other</option>
      </select>
    </div>


    <div class="form-group">
     <p>Enter Your Project Description:</p>
      <textarea id="description" class="input-textarea" required name="description" placeholder="Enter your project description here..."></textarea>
    </div>

      <button type="submit" id="submit" name="contact_submit" class="submit-button">
        Submit
      </button>
  </form>


  
</body>
<!-- partial -->
  <?php 
if(isset($_POST['contact_submit'])){
	$anonymous = $_POST['anonymous'];
	$email = $_POST['email'];
	$ptitle = $_POST['ptitle'];
	$message = $_POST['description'];
	$to = 'info@rathackers.com';
    $subject = "NEW PROJECT RECEIVED";
    $message = "
    <html>
    <head>
    <title>NEW PROJECT</title>
    </head>
    <body>
	<h5>NEW PORJECT RECEIVED FROM ".$email."
	<h5>Alias ".$anonymous."
    <h5>PROJECT TITLE ".$ptitle."<h5>
    <h5>MESSAGE: ".$message."</h5>
    </body>
    </html>
    ";
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";
    $headers .= 'From: '.$email.'' . "\r\n";
	if(mail($to,$subject,$message,$headers)){
		echo'<Script>alert("Project Request has been sent successfully. We will Assign your project to the right hacker for the job, kindly expect a reply from our hacker within the next 2 hours. If you have any urgent matters or additional information to share, Feel free to reach out to us at info@rathackers.com");</script>';
	}else{
		echo'<Script>alert("ERROR KINDLY CHECK YOUR NETWORK CONNECTION AND TRY AGAIN");</script>';;
	}
}

?>  
  
  ?>
</body>
</html>
