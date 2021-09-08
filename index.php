
<!DOCTYPE html>
<html>
<head>
<title>pay</title>

<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegant Feedback Form  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>
<body class="agileits_w3layouts">
    <h1 class="agile_head text-center">PAYMENT</h1>
 <div class="w3layouts_main wrap">
	  <h3> </h3>
<div class="background">
<center><img src="bgz.jpg" width=88%></center>

</div>


	    <form action="feedback.php" method="post" class="agile_form">
		 
			<br>
      <br>
     
			 <ul class="agile_info_select">
				 
				 <li><input type="radio" name="view" value="Rs.1000" id="Rs 1000"> 
				      <div class="check w3ls"></div>
				 </li>
				
				
			 </ul>	
       
       <br>
			<h2></h2>
			<input type="text" placeholder="Your Name" name="name" minlength="3" />
			<input type="email" placeholder="Your Email " name="email"/>
			<input type="text" placeholder="Your Phone Number " name="num" maxlength="10"  /><br>
<!-- Card Number -->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="textinput"></label>
      <div class="col-sm-6">
        <input type="text" id="cardnumber"  minlength="16" maxlength="16" placeholder="Card Number" class="card-number form-control">
      </div>
    </div>

<!-- CVV -->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="textinput"></label>
      <div class="col-sm-3">
        <input type="text" id="cvv" placeholder="CVV" minlength="3" maxlength="3" class="card-cvc form-control">
      </div>
    </div>
<h2><left>EXPIRY DATE</left></h2>
    <!-- Expiry-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="textinput">Card Expiry Date</label>
      <div class="col-sm-6">
        <div class="form-inline">
        <select name="select2" data-stripe="exp-month" class="card-expiry-month stripe-sensitive required form-control">
            <option value="01" selected="selected">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select> 
          <span> / </span>
    <select name="select2" data-stripe="exp-year" class="card-expiry-year stripe-sensitive required form-control">
<option value="2021" selected="selected">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
            <option value="2028">2028</option>
            <option value="2029">2029</option>
            <option value="2030">2030</option>
            
          </select> 

          <script type="text/javascript">
            var select = $(".card-expiry-year"),
            year = new Date().getFullYear();
 
            for (var i = 0; i < 12; i++) {
                select.append($("<option value='"+(i + year)+"' "+(i === 0 ? "selected" : "")+">"+(i + year)+"</option>"))
            }
        </script> 
        </div>
      </div>
    </div>
			<center><input type="submit" value="P A Y   N O W" class="agileinfo" /></center>
<br>
<br>
<p>
 <a href="http://localhost/4257/GYM-USER-REGISTRATION/home.php"><b><h1><center><h1 class="agile_head text-center">BACK</h1> </b></h1></center></a> </p></br></br>
	  </form>
	</div>
	<div class="agileits_copyright text-center">
			
	</div>
</body>
</html>

