<!DOCTYPE html>
<html>
<head>
    <title>Donation form</title>
    <link rel="icon" href="assets/images/fav.png">
 <?php include'layouts/header.php'; ?>

</head>
<br><br><br><br>
<body>
   
        <div class="container">
        <div class="col-md-4 col-md-offset-4 well">
        <br>

        <h5><strong>Please fill up the form to donate..</strong></h5>

                 <form id="donation-form" method="post" action="sendmail.php" role="form">
    
                <div class="form-group">
                    <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                </div>
                
                <div class="form-group">
                    <input type="email" placeholder="Your Email" class="form-control" name="email" id="email" >
                </div>
                
                <div class="form-group">
                   
                    <select name="choose bank">
                        <option value="bank" selected="select">NMB</option>
                        <option value="Prabhu">Prabhu</option>
                        <option value="Nabil Bank">Nabil Bank</option>
                        <option value="Siddhartha Bank">Siddhartha Bank</option>
                   </select>

                </div>


                <div class="form-group">
                    <input type="text" placeholder="Your Account Number" class="form-control" name="account" id="account">
                </div>

                <div class="form-group">
                    <input type="text" placeholder="Receiver's Account Number" class="form-control" name="account" id="account">
                </div>

                <div class="form-group">
                    <input type="text" placeholder="Amount" class="form-control" name="amount" id="amount">
                </div>
                
                <div class="form-group">
                    <textarea rows="5" placeholder="Purpose" class="form-control" name="purpose" id="purpose"></textarea>    
                </div>
                
                
                <div id="submit">
                    <input type="submit" id="contact-submit" class="btn btn-default btn-primary" value="Donate">
                </div>                      
                
            </form>
         </div>
    </div>




</body>
</html>