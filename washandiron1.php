<?php
session_start();

?>

<html>
<head>
	<title>check</title>
	<link rel="stylesheet" type="text/css" href="women.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
            @font-face
            {
                font-family:myfont3;
                src: url(PatuaOne-Regular.woff);
            }
            @font-face
            {
                font-family:myfont4;
                src: url(Quicksand-Bold.woff);
            }
            
            @font-face
            {
                font-family:myfont5;
                src: url(Quicksand-Regular.woff);
            }
        </style>
</head>
<body>
    <header>
    <div class="wrapper">
    <nav class="lol">
        <a href="Homepage1.php"><div class="logo" style="font-family: myfont3; color: #E2472F;">YOUR HELPERS : </div></a>
        <a href="laundry1.php"><div class="bakwaas" style="font-family: myfont3;">Laundry:</div></a>
        <a href="washandiron1.php"><div class="bakwaas" style="font-family: myfont3;">Wash And Iron</div></a>
        <ul>
            <li><a href="register.html" style="font-family: myfont3;">Don't have an account? Register here</a></li>
            <li><a class="activea" href="index.html" style="font-family: myfont3;">LOG IN</a></li>
        </ul>
    </nav>
    </div>
    </header>
        <div class="divider"></div>
    <p style="text-align: center; font-family: myfont4; color: white; font-size: 25px; margin: 20px;">We excel in taking away the pain of finding the right appliances expert to cater to your needs, right at the comfort of your home. With reasonable pricing you can avail our appliances services with just a few clicks of a button.</p>
    <nav class="lolol">
	<form action="W&I.php">
	<ul>
	 <li>
			<label style="font-family: myfont4;">Jeans/Pants
				<input type="checkbox" name="">
				<span class= "check"></span>
			</label>
		</li>
		<li>
			<label style="font-family: myfont4;">Shirt/T-Shirt
				<input type="checkbox" name="">
				<span class= "check"></span>
			</label>
		</li>
		<li>
			<label style="font-family: myfont4;">Saree
				<input type="checkbox" name="">
				<span class= "check"></span>
			</label>
		</li>
		<li>
			<label style="font-family: myfont4;">Suit
				<input type="checkbox" name="">
				<span class= "check"></span>
			</label>
		</li>
		<li>
			<label style="font-family: myfont4;">Daily Wear
				<input type="checkbox" name="">
				<span class= "check"></span>
			</label>
		</li>
		<li>
			<label style="font-family: myfont4;">Others
				<input type="checkbox" name="">
				<span class= "check"></span>
			</label>
		</li>

        <li>
            <input type="submit" id="btn" name="submit" value="Add to Cart" style="margin-left: 40px; font-family: myfont4;">
        </li>
    </ul>
	</form>
    </nav>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
            
        <div class="footer-main">
        <div class="footer-inner">
        <div class="footer-left">
        <div class="footer-box">
        <h6>SERVICES</h6>
            <ul>
                <li><a href="appliance1.php" style="text-decoration: none;">Appliance Repair</a></li>
                <li><a href="cobbler1.php" style="text-decoration: none;">Cobbler</a></li>
                <li><a href="tailor1.php" style="text-decoration: none;">Tailor</a></li>
                <li><a href="laundry1.php" style="text-decoration: none; color: white;">Laundry</a></li>
                <li><a href="About1.php" style="text-decoration: none;">About Developers</a></li>
            </ul>
        </div>
        <div class="footer-box">
        <h6>FOLLOW US:</h6>
            <ul style="display: flex">
                <li><a href="#" style="width: 50px; height: 50px; line-height: 50px; font-size: 20px; margin-right: 20px;"><i class="fa fa-facebook" aria-hidden="true"></i>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    </a>
                </li>
                
                <li><a href="#" style="width: 50px; height: 50px; line-height: 50px; font-size: 20px; margin-right: 20px;"><i class="fa fa-twitter" aria-hidden="true"></i>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    </a>
                </li>
                
                <li><a href="#" style="width: 50px; height: 50px; line-height: 50px; font-size: 20px; margin-right: 20px;"><i class="fa fa-google-plus" aria-hidden="true"></i>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    </a>
                </li>
                
                <li><a href="#" style="width: 50px; height: 50px; line-height: 50px; font-size: 20px; margin-right: 20px;"><i class="fa fa-linkedin" aria-hidden="true"></i>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    </a>
                </li>
                
                <li><a href="#" style="width: 50px; height: 50px; line-height: 50px; font-size: 20px; margin-right: 20px;"><i class="fa fa-instagram" aria-hidden="true"></i>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    </a>
                </li>
            </ul>
        </div>
            
        </div>
    <div class="footer-left">
        <div class="footer-box">
        <h6>INFORMATION</h6>
            <ul>
                <li><a href="#" style="text-decoration: none;">Terms</a></li>
                <li><a href="#" style="text-decoration: none;">Clients</a></li>
                <li><a href="#" style="text-decoration: none;">Partners</a></li>
                <li><a href="#" style="text-decoration: none;">Support</a></li>
            </ul>
        </div>
    </div>
            <div class="footer-left">
        <div class="footer-box">
        <h6>CONTACT US</h6>
            <ul>
                <li style="font-size: 14px; color: #999; font-family: myfont4;"><h3 style="color: white;">Mail Id:</h3>your.helpers1729@gmail.com</li>
                <li style="font-size: 14px; color: #999; font-family: myfont4;"><h3 style="color: white;">Contact No.:</h3>+91 821 829 0235</li>
            </ul>
        </div>
    </div>
        <div class="clr"></div>
        </div>
        </div>
        </footer>
</body>
</html>