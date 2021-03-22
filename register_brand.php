< !DOCTYPE html > 
<html > 
<head > 
<title > Register < /title >
  
<link href = 'http://fonts.googleapis.com/css?family=Bitter' rel =
  'stylesheet' type = 'text/css' > 
<style type = "text/css" > 
.form - style
{

width:450 px;

padding:30 px;

margin:40 px auto;

background:
#FFF;
border - radius:10 px;
-webkit - border - radius:10 px;
-moz - border - radius:10 px;

box - shadow:0 px 0 px 100 px rgba (0, 0, 0, 0.25);

moz - box - shadow:0 px 0 px 10 px rgba (0, 0, 0, 0.13);
-webkit - box - shadow:0 px 0 px 10 px rgba (0, 0, 0, 0.13);

}


.form - style.inner - wrap
{

padding:30 px;

background:
#F8F8F8;
border - radius:6 px;

margin - bottom:15 px;

}


.form - style h1
{

background:
#008080;
padding:20 px 30 px 15 px 30 px;

margin:-30 px - 30 px 30 px - 30 px;

border - radius:10 px 10 px 0 0;
-webkit - border - radius:10 px 10 px 0 0;
-moz - border - radius:10 px 10 px 0 0;

color:
#fff;
text - shadow:1 px 1 px 3 px rgba (0, 0, 0, 0.12);

font:normal 30 px 'Bitter', serif;
-moz - box - shadow:inset 0 px 2 px 2 px 0 px rgba (255, 255, 255, 0.17);
-webkit - box - shadow:inset 0 px 2 px 2 px 0 px rgba (255, 255, 255,
				  0.17);

box - shadow:inset 0 px 2 px 2 px 0 px rgba (255, 255, 255, 0.17);

border:1 px solid
#257C9E;
}


.form - style h1 > span
{

display:block;

margin - top:2 px;

font:13 px Arial, Helvetica, sans - serif;

}


.form - style label
{

display:block;

font:13 px Arial, Helvetica, sans - serif;

color:
#888;
margin - bottom:15 px;

}


.form - style input[type = "text"], 
.form - style input[type =
							  "date"],
  
.form - style input[type = "datetime"], 
form - style input[type =
							       "email"],
  
.form - style input[type = "number"], 
.form - style input[type =
							      "search"],
  
.form - style input[type = "time"], 
.form - style input[type =
							    "url"],
  
.form - style input[type =
		       "password"],
  
.form - style textarea,.form - style select
{

display:block;

box - sizing:border - box;
-webkit - box - sizing:border - box;
-moz - box - sizing:border - box;

width:100 %;

padding:8 px;

border - radius:6 px;
-webkit - border - radius:6 px;
-moz - border - radius:6 px;

border:2 px solid
#fff;
box - shadow:inset 0 px 1 px 1 px rgba (0, 0, 0, 0.33);
-moz - box - shadow:inset 0 px 1 px 1 px rgba (0, 0, 0, 0.33);
-webkit - box - shadow:inset 0 px 1 px 1 px rgba (0, 0, 0, 0.33);

}


.form - style.section
{

font:normal 20 px 'Bitter', serif;

color:
#008080;
margin - bottom:5 px;

}


.form - style.section span
{

background:
#008080;
padding:5 px 10 px 5 px 10 px;

position:absolute;

border - radius:50 %;
-webkit - border - radius:50 %;
-moz - border - radius:50 %;

border:4 px solid
#fff;
font - size:14 px;

margin - left:-45 px;

color:
#fff;
margin - top:-3 px;

}


.form - style input[type = "button"],.form - style input[type = "submit"]
{

background:
#008080;
padding:8 px 20 px 8 px 20 px;

border - radius:5 px;
-webkit - border - radius:5 px;
-moz - border - radius:5 px;

color:
#fff;
text - shadow:1 px 1 px 3 px rgba (0, 0, 0, 0.12);

font:normal 30 px 'Bitter', serif;
-moz - box - shadow:inset 0 px 2 px 2 px 0 px rgba (255, 255, 255, 0.17);
-webkit - box - shadow:inset 0 px 2 px 2 px 0 px rgba (255, 255, 255,
				  0.17);

box - shadow:inset 0 px 2 px 2 px 0 px rgba (255, 255, 255, 0.17);

border:1 px solid
#257C9E; font-size: 15px; }
.form - style input[type = "button"]: hover,.form - style 
 input[type = "submit"]:
  hover
  {
  
background:
#2A6881; -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
  -webkit - box - shadow:inset 0 px 2 px 2 px 0 px rgba (255, 255, 255,
				    0.28);
  
box - shadow:inset 0 px 2 px 2 px 0 px rgba (255, 255, 255, 0.28);
  
}
  
</style > 
</head > 
<body background = "blue.jpg" style =
    "background-size: cover;" > 
<div class =
    "form-style" > <h1 > Register Now as a Brand !< /h1 > 
<form name =
    "Register" method = "post" action =
    "register_brand(temp).php" > 
<div class =
    "section" >< span > 1 < /span > Brand Name & Username < /div >
    
<div class = "inner-wrap" > 
<label > Brand Name < input type =
    "text" name = "name" / ></label > 
<label > Username < input type =
    "text" name = "username" / ></label > 
</div > 
<div class =
    "section" >< span > 2 < /span > Email & Phone < /div > 
<div class =
    "inner-wrap" > 
<label > Email Address < input type = "email" name =
    "email" / ></label > 
<label > Contact Number < input type = "text" name =
    "phone" / ></label > 
</div > 
<div class =
    "section" >< span > 3 < /span > Brand type < /div > 
<div class =
    "inner-wrap" > <select id = "type" name = "type" > 
<optgroup label =
    "Electronics and Accesories" > 
<option value =
    "smartphone" > Smartphone < /option > 
<option value =
    "computers" > Computers < /option > 
<option value =
    "speakers" > Speakers < /option > 
<option value =
    "debate" > TVs and Monitors < /option > 
<option value =
    "gaming" > Gaming < /option > 
<option value =
    "other_electronics" > Other < /option > 
</optgroup > 
<optgroup label =
    "Fashion" > 
<option value =
    "clothing" > Clothing and apparels < /option > 
<option value =
    "jewellery" > Jewellery < /option > 
<option value =
    "footwear" > Footwear < /option > 
<option value =
    "perfumes" > Perfumes < /option > 
<option value =
    "eyewear" > Eyewear < /option > 
<option value =
    "other_fashion" > Other < /option > 
</optgroup > <optgroup label =
    "Others" > 
<option value =
    "other" > Other < /option > 
</optgroup > 
</select > 
</div >
    
<div class =
    "section" >< span > 4 < /span > Passwords < /div > 
<div class =
    "inner-wrap" > 
<label > Password < input type = "password" name =
    "password" / ></label > 
<label > Confirm Password < input type =
    "password" name = "password2" 
 /></label > 
</div > 
<div class =
    "button-section" > 
<input type = "submit" name = "Register" value =
    "Register" / >
</div > <br > 
</form > 
<form name = "Login" action =
    "brand_login.php" > 
<div class = "button-section" > 
<input type =
    "submit" name = "Register" value =
    "Login" / >
</div > 
</form > 
</div > 
</body > 
</html >
    
<? php 
 if (isset ($_POST['Register']))
    
    {
      
$conn =
	mysqli_connect ('localhost', 'root', '',
			'influencer_marketing') or 
 die (mysqli_error ());
      
$brand_name = $_POST['name'];
      
$brand_username = $_POST['username'];
      
$brand_username = strip_tags ($brand_username);
      
$brand_username = str_replace (" ", "", $brand_username);
      
$brand_email = $_POST['email'];
      
$brand_contact = $_POST['phone'];
      
$brand_genre = $_POST['type'];
      
$brand_password = $_POST['password'];
      
$brand_password = strip_tags ($brand_password);
      
$brand_password2 = $_POST['password2'];
      
$brand_password2 = strip_tags ($brand_password2);
      
$msg = "";
      
if ((strlen ($brand_name) == 0) || (strlen ($brand_username) == 0)
	   || (strlen ($brand_email) == 0) || (strlen ($brand_contact) == 0)
	   || ($brand_password != $brand_password2))
	
	{
	  
if (strlen ($brand_name) == 0)
	    
	    {
	      
$msg = "Enter brand name!";
	    
}
	  
if (strlen ($brand_username) == 0)
	    
	    {
	      
$msg. = "Enter username!";
	    
}
	  
if (strlen ($brand_email) == 0)
	    
	    {
	      
$msg. = "Enter email!";
	    
}
	  
if (strlen ($brand_contact) == 0)
	    
	    {
	      
$msg. = "Enter contact number!";
	    
}
	  
if ($brand_password != $brand_password2)
	    
	    {
	      
$msg. = "Password doesnt match!";
	    
}
	  
echo "<h4 style=\"color:red;\">".$msg."</h4>";
	
}
      
$sql_u =
	"select *from brand where brand_username='".$brand_username."'";
      
$res_u = mysqli_query ($conn, $sql_u) or die (mysqli_error ());
      
$n = mysqli_num_rows ($res_u);
      
if ($n > 0)
	
	{
	  
echo "<span style=\"color:white;\">already exist";
	
}
      
      else
	
	{
	  
$sql = "insert into brand
(brand_username,brand_password,brand_name,brand_email,brand_contact,bran
d_genre) values
('".$brand_username."','".$brand_password."','".$brand_name."','".$brand_email."',".$brand_contact.",'".$brand_genre."')";
	  
if (mysqli_query ($conn, $sql) == = TRUE)
	    
	    {
	      
echo "<span style=\"color:white;\"> Successfully registered!";
	    
}
	  
	  else
	    
	    {
	      
echo "Error:".mysqli_error ($conn);
	    
}
	
}
    
}
  
? >
