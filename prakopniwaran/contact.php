<?php 

if(isset($_SESSION['usr_id'])) {

header("Location: contact.php");

}

include_once 'dbconnect.php';

$error = false;

if (isset($_POST['submit'])) {
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$contact = mysqli_real_escape_string($con, $_POST['contact']);
$message = mysqli_real_escape_string($con, $_POST['message']);

    if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        $error = true;
        $name_error = "Name must contain only alphabets and space";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please Enter Valid Email ID";
    }

    if(strlen($contact) < 8) {
        $error = true;
        $contact_error = "Contact must be minimum of 8 characters";
    }

    if (!$error) {
        if(mysqli_query($con, "INSERT INTO user_message(name, email, contact, message) VALUES('" . $name . "', '" . $email . "', '" . $contact . "' , '" . $message . "')")){
            $successmsg = "Message successfully sent";
        } else {
            $errormsg = "Error in sending messsage...Please try again later!";
        }
    }

 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact us</title>
    <link rel="icon" href="assets/images/fav.png">
      <link rel="stylesheet" href="assets/css/main.css">
        
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <?php include'layouts/header.php' ?>
</head>
<body>
<div class="container-fluid">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-6 w3-container">
              <center><h2>Contact us / Send feedback</h2></center>
              <br>
                <div class="w3-card-4" style="padding:20px;">
                  
                        <h4>
                           <center><strong>Want to help the victims of natural disasters ??</strong> </center>
                        </h4>
                            
                        <div class="contact-form">
                            <form name="contact-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" role="form">
                    
                                <div class="form-group">
                                    <input type="text" placeholder="Your Name" class="form-control" name="name" required value="<?php if($error) echo $name; ?>"/>
                                    <span class="text-danger"><?php if(isset($name_error)) echo $name_error; ?></span>
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" placeholder="Your Email" class="form-control" name="email" required value="<?php if($error) echo $email; ?>" />
                                     <span class="text-danger"><?php if(isset($email_error)) echo $email_error; ?></span>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" placeholder="Contact no" class="form-control" name="contact" required value="<?php if($error) echo $contact; ?>" />
                                     <span class="text-danger"><?php if(isset($contact_error)) echo $contact_error; ?></span>
                                </div>
                                
                                <div class="form-group">
                                    <textarea rows="6" placeholder="Message" class="form-control" name="message"></textarea>    
                                </div>
                                
                                
                                <div class="form-group" style="float: right;">
                                    <input type="submit" name="submit" class="btn btn-default btn-primary" value="Send Message" />
                                </div>                     
                                
                            </form>
                            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
                            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
                        </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="map-area">
                    <center><h2>Find us</h2></center>
                        <p>
                            <strong>You can find us here.</strong>    
                        </p>
                            
                        <div class="map">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.776866580042!2d85.3189450142464!3d27.69329053271819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b1d6c419d7%3A0x900222be37a9c8f3!2sSt.Xavier&#39;s+College!5e0!3m2!1sen!2snp!4v1501611570430" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-12">
                
                    <center><h2>INTERESTED IN HELPING VICTIMS? ?</h2></center>
                    <h5 class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms"><strong><center>Disaster Management Starts With ‘D’ But Begins With ‘YOU’.</center></strong></h5>
                    <center><a href="contact.php" class="btn btn-default btn-primary">Contact Us</a></center>
                
            </div>
        </div>
    </div>
    </div>
            <div>   
                <?php include'layouts/footer.php' ?>
            </div>
        


</body>
</html>

