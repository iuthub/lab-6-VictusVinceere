<?php 
error_reporting(0);

$name = $_REQUEST["name"];
$email= $_REQUEST["email"];
$username = $_REQUEST["username"];
$password = $_REQUEST["password"];
$confpassword= $_REQUEST["confpassword"];
$dateofb= $_REQUEST["dateofb"];
$gender= $_REQUEST["gender"];
$marital= $_REQUEST["marital"];
$address= $_REQUEST["address"];
$city= $_REQUEST["city"];
$postal_code= $_REQUEST["postal_code"];
$home_phone= $_REQUEST["home_phone"];
$mobile_phone= $_REQUEST["mobile_phone"];
$credit_card_number= $_REQUEST["credit_card_number"];
$credit_exp= $_REQUEST["credit_exp"];
$m_salary= $_REQUEST["m_salary"];
$url= $_REQUEST["url"];
$gpa= $_REQUEST["gpa"];




$isPost = $_SERVER["REQUEST_METHOD"]=="POST";
$isGet = $_SERVER["REQUEST_METHOD"]=="GET";


$isNameError = $isPost && !preg_match('/^[a-z0-9]{2,}$/i',$name);
$isEmailError = $isPost && !preg_match('/^\w+@[a-zA-Z]+?\.[a-zA-Z]{2,3}$/', $email);
$isUsernameError = $isPost && !preg_match('/^[a-z0-9]{5,}$/i',$username);
$isPasswordError = $isPost && !preg_match('/^[a-z0-9]{8,}$/i',$password);
$isConfpasswordError = $isPost && $password != $confpassword;
$isDateofbError = $isPost && !preg_match('/^(0[1-9]|[12][0-9]|3[01])[.](0[1-9]|1[012])[.](19|20)\d\d/',$dateofb);
$isGenderError = $isPost && !preg_match('/^Male|Female$/',$gender);
$isMaritalError = $isPost && !preg_match('/^(Single|Married|Divorced|Widowed)$/',$marital);
$isAddressError = $isPost && !$address;
$isCityError = $isPost && !$city;
$isPostalCodeError = $isPost && !preg_match('/^[0-9]{6}$/',$postal_code);
$isHomePhoneError = $isPost && !preg_match('/^\d{2}\s\d{7}$/',$home_phone);
$isMobilePhoneError = $isPost && !preg_match('/^\d{2}\s\d{7}$/',$mobile_phone);
$isCreditCardNumberError = $isPost && !preg_match('/^\d{4}\s\d{4}\s\d{4}\s\d{4}$/',$credit_card_number);
$isCreditExpError = $isPost && !preg_match('/^(0[1-9]|[12][0-9]|3[01])[.](0[1-9]|1[012])[.](19|20)\d\d/',$credit_exp);
$isMSalaryError = $isPost && !preg_match('/^(UZS)\s[0-9]{3}[,][0-9]{3}[.][0-9]{2}$/',$m_salary);
$isUrlError = $isPost && !preg_match('/^(http:\/\/)[a-z0-9\w]{3,}[.][a-z]{2,3}$/i',$url);
$isGpaError = $isPost && !preg_match('/^([1-3][.][0-9])|(4[.][0-5])$/',$gpa);


$isFormError = $isNameError || $isEmailError || $isUsernameError || $isPasswordError || $isConfpasswordError; 



?>


<!DOCTYPE html>
<html lang="en" dir="ltr"> 
	<meta charset="utf-8">
	<head>
		<title>Registration form</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
	<?php if($isGet || $isFormError) { ?>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr/>
		
		<h2>Please, fill below fields correctly</h2>
		<form action="index.php" method = "post">
		<dl>
			<dt>Name <span class="error"><?=$isNameError?"Please enter a name":""?></span></dt>
			<dd><input type="text" name="name" /></dd>
			<dt>Email<span class="error"><?=$isEmailError?"Please enter correct mail":""?></span></dt>
			<dd><input type="text" name="email" /></dd>
			<dt>Username<span class="error"><?=$isUsernameError?"Please type your username below at least 5 chars":""?></span></dt>
			<dd><input type="text" name="username"/></dd>
			<dt>Password<span class="error"><?=$isPasswordError?"Please type your password at least 8 chars":""?></span></dt>
			<dd><input type="text" name="password" /></dd>
			<dt>Confirm Password<span class="error"><?=$isConfpasswordError?" Password doesn't match":""?></span></dt>
			<dd><input type="text" name="confpassword"/></dd>
			<dt>Date of birth<span class="error"><?=$isDateofbError?"Date format dd.mm.yyyy":""?></span></dt>
			<dd><input type="text" name="dateofb" /></dd>
			<dt>Gender<span class="error"><?=$isGenderError?"Female or Male":""?></span></dt>
			<dd><input type="text" name="gender" /></dd>
			<dt>Marital status<span class="error"><?=$isMaritalError?"Single, Married, Divorced, Widowed":""?></span></dt>
			<dd><input type="text" name="marital" /></dd>
			<dt>Address<span class="error"><?=$isAddressError?"Enter your address":""?></span></dt>
			<dd><input type="text" name="address" /></dd>
			<dt>City<span class="error"><?=$isCityError?"Enter your city":""?></span></dt>
			<dd><input type="text" name="city" /></dd>
			<dt>Postal Code<span class="error"><?=$isPostalCodeError?"Enter postal code 6 digits":""?></span></dt>
			<dd><input type="text" name="postal_code" /></dd>
			<dt>Home Phone<span class="error"><?=$isHomePhoneError?"Enter your home phone number 9 digits.Ex 71 1234567":""?></span></dt>
			<dd><input type="text" name="home_phone" /></dd>
			<dt>Mobile Phone<span class="error"><?=$isMobilePhoneError?"Enter your mobile phone number 9 digits. Ex 99 1234567 ":""?></span></dt>
			<dd><input type="text" name="mobile_phone" /></dd>
			<dt>Credit Card Number<span class="error"><?=$isCreditCardNumberError?"Enter your credit card number 16 digits. Ex 4444 4444 4444 4444":""?></span></dt>
			<dd><input type="text" name="credit_card_number" /></dd>
			<dt>Credit Card Expiry Date<span class="error"><?=$isCreditExpError?"Credit card expire date dd.mm.yyyy format":""?></span></dt>
			<dd><input type="text" name="credit_exp" /></dd>
			<dt>Monthly Salary<span class="error"><?=$isMSalaryError?"Format of salary UZS 200,000.00":""?></span></dt>
			<dd><input type="text" name="m_salary" /></dd>
			<dt>Web Site URL<span class="error"><?=$isUrlError?"Url format http://github.com":""?></span></dt>
			<dd><input type="text" name="url" /></dd>
			<dt>Overall GPA<span class="error"><?=$isGpaError?"Starts from 1.0 to 4.5":""?></span></dt>
			<dd><input type="text" name="gpa" /></dd>
			
		</dl>
		
		
			 <input type="submit" value="Register">
		
		</form>

	<?php } else { ?>
		<h1>Thanks for register!</h1>
		<?php } ?>
	</body>
</html>