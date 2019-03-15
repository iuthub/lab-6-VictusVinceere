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


$isNameError = $isPost && !$name;
$isEmailError = $isPost;
$isUsernameError = $isPost;
$isPasswordError = $isPost;
$isConfpasswordError = $isPost;
$isDateofbError = $isPost;
$isGenderError = $isPost;
$isMaritalError = $isPost;
$isAddressError = $isPost;
$isCityError = $isPost;
$isPostalCodeError = $isPost;
$isHomePhoneError = $isPost;
$isMobilePhoneError = $isPost;
$isCreditCardNumberError = $isPost;
$isCreditExpError = $isPost;
$isMSalaryError = $isPost;
$isUrlError = $isPost;
$isGpaError = $isPost;


$isFormError; 




?>


<!DOCTYPE html>
<html lang="en" dir="ltr"> 
	<meta charset="utf-8">
	<head>
		<title>Registration form</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>

		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<form>
		<dl>
			<dt>Name <span class="error"></span></dt>
			<dd><input type="text" name="name" /></dd>
			<dt>Email<span class="error"></span></dt>
			<dd><input type="text" /></dd>
			<dt>Username<span class="error"></span></dt>
			<dd><input type="text" /></dd>
			<dt>Password<span class="error"></span></dt>
			<dd><input type="text" /></dd>
			<dt>Confirm Password<span></span></dt>
			<dd><input type="text" /></dd>
			<dt>Date of birth<span class="error"></span></dt>
			<dd><input type="text" /></dd>
			<dt>Gender<span class="error"></span></dt>
			<dd><input type="text" /></dd>
			<dt>Marital status<span class="error"></span></dt>
			<dd><input type="text" /></dd>
			<dt>Address<span class="error"></span></dt>
			<dd><input type="text" /></dd>
			<dt>City<span class="error"></span></dt>
			<dd><input type="text" /></dd>
			<dt>Postal Code<span class="error"></span></dt>
			<dd><input type="text" /></dd>
			<dt>Home Phone<span class="error"></span></dt>
			<dd><input type="text" /></dd>
			<dt>Mobile Phone<span class="error"></span></dt>
			<dd><input type="text" /></dd>
			<dt>Credit Card Number<span class="error"></span></dt>
			<dd><input type="text" /></dd>
			<dt>Credit Card Expiry Date<span class="error"></span></dt>
			<dd><input type="text" /></dd>
			<dt>Monthly Salary<span class="error"></span></dt>
			<dd><input type="text" /></dd>
			<dt>Web Site URL<span class="error"></span></dt>
			<dd><input type="text" /></dd>
			<dt>Overall GPA<span class="error"></span></dt>
			<dd><input type="text" /></dd>
			
		</dl>
		
		
			 <input type="submit" value="Register">
		
		</form>
	</body>
</html>