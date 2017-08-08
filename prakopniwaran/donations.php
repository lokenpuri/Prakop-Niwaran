<?php 

if(isset($_SESSION['usr_id'])) {

header("Location: donations.php");

}

include_once 'dbconnect.php';

$error = false;

if (isset($_POST['submit'])) {
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$subject = mysqli_real_escape_string($con, $_POST['subject']);
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

    
    if (!preg_match("/^[a-zA-Z ]+$/", $subject)) {
        $error = true;
        $subject_error = "Subject must contain only alphabets and space";
    }

    if(strlen($contact) < 8) {
        $error = true;
        $contact_error = "Contact must be minimum of 8 characters";
    }

    if (!$error) {
        if(mysqli_query($con, "INSERT INTO donation_request(name, email, contact, subject, message) VALUES('" . $name . "', '" . $email . "', '" . $subject . "' ,'" . $contact . "', '" . $message . "')")){
            $successmsg = "Message successfully sent! <a href='donations.php'>Click here to Request again</a>";
        } else {
            $errormsg = "Error in sending messsage...Please try again later!";
        }
    }

 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Donations</title>
    <link rel="icon" href="assets/images/fav.png">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/main.css">
        
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    .donation{
            
         border: 1px solid #00897b;
         padding: 10px;
    }
    .donations{
        background-color: #ffffff;
    }

</style>

    <?php include'layouts/header.php'; ?>
</head>
<body>

<div class="container-fluid">
    <div class="jumbotron">
        <div class="row ">
            <div class="col-md-6 w3-container">
            
                <center><h2><strong>Request Donation</strong></h2></center>
                <br>
                <div class=" w3-card-4" style="padding: 20px;">
                <h5 style="padding: 5px;">
                    <strong>Please fill up the form to request donation..</strong>
                </h5>
                <div class="contact-form">
                    <form name="donation-request-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" role="form">
            
                        <div class="form-group">
                            <input type="text" placeholder="Your Name" class="form-control" name="name" required value="<?php if($error) echo $name; ?>"/>
                            <span class="text-danger"><?php if(isset($name_error)) echo $name_error; ?></span>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" placeholder="Your Email" class="form-control" name="email" required value="<?php if($error) echo $email; ?>" />
                             <span class="text-danger"><?php if(isset($email_error)) echo $email_error; ?></span>
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="Subject" class="form-control" name="subject" required value="<?php if($error) echo $subject; ?>" />
                             <span class="text-danger"><?php if(isset($subject_error)) echo $subject_error; ?></span>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" placeholder="Contact no" class="form-control" name="contact" required value="<?php if($error) echo $contact; ?>" />
                             <span class="text-danger"><?php if(isset($contact_error)) echo $contact_error; ?></span>
                        </div>

                         

                         <div class="form-group">
                            <textarea rows="4" placeholder="Message" class="form-control" name="message"></textarea>    
                        </div>
                        
                      
                          <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-default btn-primary" value="Send Message" />
                        </div>  
                                
                    </form>
                    <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
                    <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
                     <br>

                    <!-- <form method="post" action="donation-form.php">
                        <div id="submit">
                            <input type="submit" id="contact-submit" class="btn btn-default btn-primary" value="Donate Now">
                        </div>
                    </form>  -->  
                </div>               
            </div>
            </div>

            <div class="col-md-6 w3-container">
                <center><h2>Donation Requests</h2></center>
                <br>
            <?php
                require_once 'dbconnect.php';
                $sql = "SELECT * FROM donation_request";

                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) > 0) {
                // output data of each row
                     while($row = mysqli_fetch_assoc($result)) { ?>

                     <div class="donation row w3-card-4">

                         <div class="w3-container">

                         <header class="w3-container w3-grey">
                            <h4 style="font-family: serif;"><?php echo strtoupper($row["name"]); ?></h4>
                        </header>

                            <br>

                            <label> Email:</label>

                            <?php echo $row["email"]; ?>
                            <br>
                             <label> Subject:</label>

                            <?php echo $row["subject"]; ?>
                            <br>

                            <label> Contact:</label>

                            <?php echo $row["contact"]; ?>
                            <br>

                            <label> Message:</label>

                            <?php echo $row["message"]; ?>
                             <br>
                        </div>
                    </div>
                         <br>

             <?php }
            } else {
            echo "0 results";
            }
            mysqli_close($con); 
            ?>



            </div>
            
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="jumbotron">
        <div class="row donations w3-card-4">

            <div class="w3-container" style="font-family: serif;font-size: 20px">
            <center><h2>Donations & Supports</h2></center>
                    <ul >
                      

                        <li>
                            <p style="font-family: serif;font-size: 20px">Foreign government such as United Nations, United States, Japan, United Kingdom, Canada, Norway, Australia, European Commission, China, Germany, Singapore, Israel, Pakistan, Bangladesh, India, etc. provided financial and other aids to Nepal.</p>
                        </li>
                          <li >
                               <p style="font-family: serif;font-size: 20px">Many foreign governments and non-profit organizations and foreign governments scrambled to provide much-needed relief to Nepal.</p>
                        </li>
                        
                        <li>
                            <p style="font-family: serif;font-size: 20px">Facebook had developed a new tool called Safety Check. The simple tool sends messages to people who are in Nepal, urging them to click a button to let their Facebook friends know they're okay.</p>
                        </li>
                        
                        <li>
                            <p style="font-family: serif;font-size: 20px">As it was difficult for people to get recharge cards with most shops closed and transportation difficult Nepal Telecom (NT) provided unlimited calls, SMS and data facility for both pre-paid and post-paid users and Ncell offered bonus balance and 50 free SMS.</p>
                        </li>
                        
                          
                        <li>
                        <p style="font-family: serif;font-size: 20px">Dhurmus-Suntali Foundation has been building earthquake resistant settlements in different places of Nepal. It had received RS 20 crore from American Government. Now, the foundation has revenue of NPR 5 billions. It has completed following projects for the welfare of the people.</p>

                                <ul>
                                    <li> Musahar Basti - Rebuild the village </li>
                                    <li>Pahari Namuna Basti - Finished Building the village</li>
                                    <li>Giran Chaur namuna Basti - Finished Building the village</li>
                                    <li>Namuna Nepal - For people of Lalitpur, Lele</li>
                                </ul>
                            <a href="http://dhurmussuntali.com/en">Click here for more information</a>

                        </li>
                             
                    </ul>
                </div>
        </div>
    </div> 
</div>





<div class="container-fluid">
    <div class="jumbotron">
        <h2>Donate Through</h2>
            <div class="row">
                <div class="col-md-4">
                        <a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="Donate thorugh PayPal" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes'); return false;"><img src="assets/images/paypal.png" border="0" alt="PayPal Logo"></a>
                </div>

                <div class="col-md-4">
                       <a href="https://esewa.com.np/home" title="Donate through esewa" onclick="javascript:window.open('https://esewa.com.np/home','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes'); return false;"><img src="assets/images/esewa.png" alt="esewa" /></a>
                </div>

                <div class="col-md-4">
                       <a href="https://esewa.com.np/home" title="Donate through prabhu money transfer" onclick="javascript:window.open('http://prabhumoneytransfer.com.np/','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes'); return false;"><img src="assets/images/prabhu.png" alt="prab" /></a>
                </div>
            </div>
                 
            

               
    
    </div>
</div>
<div>
               
                <?php include'layouts/footer.php'; ?>
            </div>


</body>
</html>





