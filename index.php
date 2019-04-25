<!DOCTYPE html>
<html lang="en">
  <head>
  <title>PC Help Number</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  $(function () {

            $('#txtnumber').keydown(function (e) {
             var key = e.charCode || e.keyCode || 0;
             $text = $(this); 
             if (key !== 8 && key !== 9) {
                 if ($text.val().length === 3) {
                     $text.val($text.val() + '-');
                 }
                 if ($text.val().length === 7) {
                     $text.val($text.val() + '-');
                 }

             }

             return (key == 8 || key == 9 || key == 46 || (key >= 48 && key <= 57) || (key >= 96 && key <= 105));
         })
});
  </script>
  <script type="text/javascript">

       function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
b }
</script>
  <style>
body {
	font: 20px Montserrat, sans-serif;
	line-height: 1.8;
	overflow-x: hidden;
}
p {
	font-size: 16px;
}
.margin {
	margin: 35px;
	font-size: 50px;
	font-weight: bold;
}
.bg-1 {
	background-color: #1abc9c; /* Green */
	color: #ffffff;
}
.bg-2 {
	background-color: #474e5d; /* Dark Blue */
	color: #ffffff;
}
.bg-3 {
	background-color: #ffffff; /* White */
	color: #555555;
}
.bg-4 {
	background-color: #2f2f2f; /* Black Gray */
	color: #fff;
}
.bg-5 {
	background-color: #2f9f9f; /* Black Gray */
	color: #fff;
	text-align: center;
	background: #0F2027;  /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #2C5364, #203A43, #0F2027);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #2C5364, #203A43, #0F2027); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
.bg-6
{
	background-color:#000;
	color: #fff;
	text-align: center;
}
.price-sec {
	margin-top: 40px;
	margin-bottom: 40px;
}

.price-sec p {
	font-size: 13px;
}
/*.container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }*/
.navbar {
	padding-top: 15px;
	padding-bottom: 15px;
	border: 0;
	border-radius: 0;
	margin-bottom: 0;
	font-size: 12px;
	letter-spacing: 5px;
}
.navbar-nav li a:hover {
	color: #1abc9c !important;
}
li a span {
	font-size:30px;
	font-family:Arial, Helvetica, sans-serif;
	font-weight: 800;
	color:#1ca4ff;
	letter-spacing:normal;
}
li
{
	font-size:20px;
	font-family:Arial, Helvetica, sans-serif;
	color:#1ca4ff;
}
.form-group input[type=text], input[type=email] {
	width: 100%;
	padding: 32px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 0px;
	box-sizing: border-box;
}
.btn-defaults {
	background: #4CAF50;
	border: 1px solid #4CAF50;
	width: 100%;
	color: #fff;
	font-size: 30px;
}
.btn-defaults:hover {
	background-color: #d7d7d7;
	border: 1px solid transparent;
	color: #45a049;/*border:none;*/
}
.style {
	color: #555;
	text-align: justify;
}
.margin1 {
	font-size: 30px;
	font-weight: bold;
}
.margins
{
	margin-top:40px; margin-bottom:40px;
}
.panel-body
{
	color:#000;
}
.price-amount
{
	color:#1FCDFF;
	font-weight:900;
}
.img-custom
{
	position:absolute;
	top: 190px;
	left: 100px;
	z-index: 1;
}
.heading
{
	font-weight:900;
	color:#1ca4ff;
	font-family:Arial, Helvetica, sans-serif;
}
@media screen and (max-width: 768px) {
.img-custom
{
	display:none;
}
}
</style>
  </head>
  <body>

<!-- Navbar -->
<div class="container text-center">
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<h2 class="heading">Need Instant Help Call Now</h2>
<h1 class="heading">(877) 353-4359</h1>
</div>
<div class="col-sm-3"></div>
</div>
</div>
<!-- First Container -->
<div class="container-fluid bg-1 text-center">
    <h3 class="margin">Email Problems? Get Your Issue Fixed Fast!</h3>
  </div>

<!-- Second Container -->
<div class="container-fluid bg-2">
    <div class="row">
    <div class="col-sm-2"> <img src="images/bluearrowright.png" class="img-custom" style="position:absolute; top: 190px; left: 100px; z-index: 1;" > </div>
    <div class="col-sm-6" >
        <h3>Get diagnostic help now, enter your info in the form below to receive instant help.</h3>
        <div class="frm" style="background:#FFF; padding:60px; margin-bottom:30px;">
        <form class="form-horizontal" action="sendmail.php" method="post">
            <div class="form-group">
            <div class="col-sm-12">
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
              </div>
          </div>
            <div class="form-group">
            <div class="col-sm-12">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
              </div>
          </div>
            <div class="form-group">
            <div class="col-sm-12">
                <input pattern="(.){10,10}" onkeypress="return isNumber(event)" Maxlength="10" placeholder="Phone" type="text" id="reservation_phone" name="phone" class="form-control" required/>
              </div>
          </div>
            <div class="form-group">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-default btn-defaults">Get Help Now</button>
              </div>
          </div>
          </form>
      </div>
      </div>
    <div class="col-sm-4"></div>
  </div>
    <div class="well">
    <p style="color:#000;">*<b>Disclaimer</b>: PC Help Number provides services for diagnostic and technical support issues for desktops, laptops, mobile devices, and tablets. We are a THIRD PARTY solution and we are NOT AFFILIATED with any brands, trademarks, logos, or any other company names used. The brand names, trademarks, and logos belong to their respective owners and are for representation purposes only.</p>
  </div>
  </div>
<div class="container">
    <div class="row">
    <div class="col-sm-8">
        <h3 class="margin1 style">Local and Remote Computer Help</h3>
        <br>
        <p class="lead style">At PC Help Number, we provide local computer support without appointment. Please feel free to drop by any time, and we'll provide you with a free diagnostic and quote before we perform any work on your computer.
        
        We can also provide remote service for a range of issues. Many people have trouble signing into their email because of adware or toolbars which prevent their internet from navigating to their email login page properly. We provide expert third party diagnostic and tech support to make your computer experience as pleasant as possible. However, please note that we do not provide password reset or account login assistance of any kind. 
        
        We started as a small local repair service, that eventually grew into a nationwide remote support service. We offer a wide range of affordable support options including complimentary email support, where we'll help you resolve problems on your computer that might keep you from accessing your email. We cannot reset passwords or help you log into your account, but we can help remove toolbars and search engine redirects that can keep you from reaching your destination. 
        
        We do not charge for any diagnostic service we provide, we just hope that you will remember our email service when you need computer support in the future!</p>
      </div>
    <div class="col-sm-4">
     <table class="table table-bordered" style="margin-top:108px;">
    <thead>
      <tr>
        <th>Our Services Offered</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>24/7 Instant Help Desk Access</td>
      </tr>
      <tr>
        <td>Remote Repair Services</td>
      </tr>
      <tr>
        <td>Scheduled Maintenance</td>
      </tr>
      <tr>
        <td>24/7 Chat Support</td>
      </tr>
      <tr>
        <td>Computer 360 Security Suite</td>
      </tr>
      <tr>
        <td>Online Data Backup</td>
      </tr>
    </tbody>
  </table>
    </div>
  </div>
  </div>
<div class="container-fluid bg-5">
    <div class="container price-sec">
    <div class="row">
        <div class="col-sm-12">
        <h1>Service Plans and Pricing</h1>
        <small>MONTHLY SERVICE PLANS</small>
      </div>
        <div class="col-sm-4">
        <div class="panel panel-primary">
            <div class="panel-heading">Basic</div>
            <hr>
            <h3 class="price-amount">$19.99</h3>
            <hr>
            <div class="panel-body">
            <p>PHONE SUPPORT</p>
            <p>ONLINE HELP DESK</p>
            <p>PC Help Number ANTI-VIRUS</p>
            <p>ON SITE OR IN OFFICE SUPPORT</p>
            <p>ONLINE BACKUP; 5GB</p>
            <p>REMOTE SUPPORT: $20 PER INCIDENT</p>
            <p>ONGOING MAINTENANCE: SEMI-ANNUALLY</p>
            <p>ADDITIONAL COMPUTER COVERAGE: $19.99/MO</p>
          </div>
          </div>
      </div>
        <div class="col-sm-4">
        <div class="panel panel-primary">
            <div class="panel-heading">Advanced</div>
            <hr>
            <h3 class="price-amount">$24.99</h3>
            <hr>
            <div class="panel-body">
            <p>PHONE SUPPORT</p>
            <p>ONLINE HELP DESK</p>
            <p>PC Help Number ANTI-VIRUS</p>
            <p>ON SITE OR IN OFFICE SUPPORT</p>
            <p>ONLINE BACKUP; 20GB</p>
            <p>REMOTE SUPPORT: ONCE PER MONTH</p>
            <p>ONGOING MAINTENANCE: QUARTERLY</p>
            <p>ADDITIONAL COMPUTER COVERAGE: $24.99/MO</p>
          </div>
          </div>
      </div>
        <div class="col-sm-4">
        <div class="panel panel-primary">
            <div class="panel-heading">Premium</div>
            <hr>
            <h3 class="price-amount">$39.99</h3>
            <hr>
            <div class="panel-body">
            <p>PHONE SUPPORT</p>
            <p>ONLINE HELP DESK</p>
            <p>PC Help Number ANTI-VIRUS</p>
            <p>ON SITE OR IN OFFICE SUPPORT</p>
            <p>ONLINE BACKUP; 100GB</p>
            <p>REMOTE SUPPORT: TWICE PER MONTH</p>
            <p>ONGOING MAINTENANCE: MONTHLY</p>
            <p>ADDITIONAL COMPUTER COVERAGE: $39.99/MO</p>
          </div>
          </div>
      </div>
        <div class="col-sm-12">
        <p class="text-justify">HOW OUR MONTHLY SERVICE PLANS WORK: Upon signing up for a monthly membership plan, your credit or debit card will immediately be charged $19.99-$39.99, depending on the plan selected, and it will be charged the same amount on the same day each month until your plan is cancelled. Once you have paid and registered for your monthly service plan, we will connect remotely, with your permission, and perform a full diagnostic, scan, cleaning, and optimization of your device. We'll then set up your data backup and anti-virus package depending on which plan you've selected. We will also perform a scheduled semi-annual, quarterly, or monthly tune up and optimization of your computer, depending on the package you have selected. As part of your scheduled tune up, we'll go through and perform a full system scan, threat removal, and optimization at that time. </p>
        <p class="text-justify">In addition to your scheduled ongoing maintenance, you will be allotted two no cost remote support sessions per month with the premium plan, and one no cost remote support session per month with the advanced plan. With the basic plan, or once you have reached your monthly limit with the advanecd or premium plan, each additional unscheduled remote support session will result in an additional charge of $20. To claim an additional remote support session, you can call us anytime during regular business hours, email support@pchelpnumber.com, or submit your information in one of the various contact forms throughout the site. If you have any questions about our monthly service plans, please contact support@pchelpnumber.com and we'll be happy to help.</p>
        <h3 class="margins">ONE TIME SERVICE AND CLEANING PLANS</h3>
      </div>
        <div class="col-sm-4">
        <div class="panel panel-primary">
            <div class="panel-heading">Basic</div>
            <hr>
            <h3 class="price-amount">$129.99</h3>
            <hr>
            <div class="panel-body">
            <p>US BASED AND TRAINED TECHNICIANS</p>
            <p>SYSTEM DIAGNOSIS</p>
            <p>QUICK SYSTEM SCAN AND THREAT REMOVAL</p>
            <p>STARTUP PROGRAM OPTIMIZATION</p>
            <p>REGISTRY SCAN AND CLEANING</p>
            <p>INSTALLATION OF SYSTEM UPDATES</p>
            <p>EMAIL CLIENT DIAGNOSIS, SHORTCUT INSTALL</p>
            <p>SHORTCUT CREATION TO FAVORITE SITES</p>
            <p>SYSTEM RESTORE (IF NECESSARY)</p>
            ------- </div>
          </div>
      </div>
        <div class="col-sm-4">
        <div class="panel panel-primary">
            <div class="panel-heading">Advanced</div>
            <hr>
            <h3 class="price-amount">$169.99</h3>
            <hr>
            <div class="panel-body">
            <p>US BASED AND TRAINED TECHNICIANS</p>
            <p>SYSTEM DIAGNOSIS</p>
            <p>QUICK SYSTEM SCAN AND THREAT REMOVAL</p>
            <p>STARTUP PROGRAM OPTIMIZATION</p>
            <p>REGISTRY SCAN AND CLEANING</p>
            <p>INSTALLATION OF SYSTEM UPDATES</p>
            <p>EMAIL CLIENT DIAGNOSIS, SHORTCUT INSTALL</p>
            <p>SHORTCUT CREATION TO FAVORITE SITES</p>
            <p>SYSTEM RESTORE (IF NECESSARY)</p>
            <p>VIRUS, MALEWARE, AND ADWARE REMOVAL </p>
            <p>INTERNET BROWER OPTIMIZATION </p>
            <p>NETWORK SPEED TEST </p>
            <p>CUSTOM PROGRAM INSTALLATION </p>
            ------- </div>
          </div>
      </div>
        <div class="col-sm-4">
        <div class="panel panel-primary">
            <div class="panel-heading">Premium</div>
            <hr>
            <h3 class="price-amount">$199.99</h3>
            <hr>
            <div class="panel-body">
            <p>US BASED AND TRAINED TECHNICIANS</p>
            <p>SYSTEM DIAGNOSIS
              <p>QUICK SYSTEM SCAN AND THREAT REMOVAL
              <p>STARTUP PROGRAM OPTIMIZATION
              <p>REGISTRY SCAN AND CLEANING
              <p>INSTALLATION OF SYSTEM UPDATES
              <p>EMAIL CLIENT DIAGNOSIS, SHORTCUT INSTALL
              <p>SHORTCUT CREATION TO FAVORITE SITES
              <p>SYSTEM RESTORE (IF NECESSARY)
              <p>VIRUS, MALEWARE, AND ADWARE REMOVAL
              <p>INTERNET BROWER OPTIMIZATION
              <p>NETWORK SPEED TEST
              <p>CUSTOM PROGRAM INSTALLATION
              <p>DESKTOP OPTIMIZATION
              <p>UNINSTALL UNWANTED PROGRAMS
              <p>DRIVER INSTALLATION ASSISTANCE
              <p>SAFE BROWSING AND USAGE TRAINING
              <p>DEEP SYSTM SCAN AND THREAT REMOVAL 
          </div>
          </div>
      </div>
        <div class="col-sm-12">
        <p class="text-justify">HOW OUR ONE TIME SERVICE PLANS WORK: Upon purchasing a one time service plan, your credit or debit card will be assesed a one time charge of $129.99-$199.99, depending on the service package selected. We will then connect to your device remotely, with your permission, and perform the services as outlined in the chart above. 
            
            Once we have completed service on your computer, you will have 7 calendar days to report any unresolved issues related to the original service performed, which we will fix at no additional cost as outlined in the terms and conditions. Any remote service requested outside of the 7 calendar day window will require an additional one time service package, or a montly service plan, to be purchased before additional service can be performed. 
            
            *On site repair services available depending on location. Prices vary depending on distance, severity of problem, and preliminary diagnosis. A free quote will be provided before any on site service or repair is performed.</p>
      </div>
      </div>
  </div>
  </div>
  

  
<div class="container-fluid bg-6">
<div class="container margins">
<div class="row">
<div class="col-sm-12">
<h1 class="margins">How Our Support Service Works</h1>
</div>
<div class="col-sm-4">
<img src="images/picT1.png" class="img-responsive center-block">
<h3>Get Connected</h3>
<p>Give us a call, and we'll get you connected through secure software.</p>
</div>
<div class="col-sm-4">
<img src="images/picT2.png" class="img-responsive center-block">
<h3>Diagnose</h3>
<p>Our trained experts will carefully diagnose your specific issue and make reccomendations.</p>
</div>
<div class="col-sm-4">
<img src="images/picT3.png" class="img-responsive center-block">
<h3>Repair</h3>
<p>Your support technician will repair and resolve any issues within your computer as quickly as possible.</p>
</div>
</div>
</div>
</div>
<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">
    <br>
    <div class="row">
    <div class="col-sm-4">
        <h3>Office Hours</h3>
        <p>
Monday-Friday:
7:00 AM-9:00 PM MST 
Saturday and Sunday:
7:00 AM-9:00 PM MST</p>
</div>
    <div class="col-sm-4">
     <h3>Office Headquarters</h3>
        <p>
1362  Cooks Mine Road
Twin Lakes
<br>New Mexico, 86515</p>
</div>
    <div class="col-sm-4">
   
<h3>Contact Info</h3>
<p>
Feel free to contact us anytime. Phone: (877) 353-4359 Email: support@pchelpnumber.com
</p>
  </div>
  </div>
</div>
<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  </footer>
</body>
</html>
