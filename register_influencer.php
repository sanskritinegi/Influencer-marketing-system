<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<style type="text/css">
.form-style{
width:450px;
padding:30px;
margin:40px auto;
background: #FFF;
border-radius: 10px; -webkit-border-radius:10px; -moz-border-radius: 10px;
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13); -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13); -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.form-style .inner-wrap{
padding: 30px;
background: #F8F8F8;
border-radius: 6px;
margin-bottom: 15px;
}
.form-style h1{
background: #008080;
padding: 20px 30px 15px 30px;
margin: -30px -30px 30px -30px;
border-radius: 10px 10px 0 0; -webkit-border-radius: 10px 10px 0 0; -moz-border-radius: 10px 10px 0 0;
color: #fff;
text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
font: normal 30px 'Bitter', serif; -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17); -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
border: 1px solid #257C9E;
}
.form-style h1 > span{
display: block;
margin-top: 2px;
font: 13px Arial, Helvetica, sans-serif;
}
.form-style label{
display: block;
font: 13px Arial, Helvetica, sans-serif;
color: #888;
margin-bottom: 15px;
}
.form-style input[type="text"], .form-style input[type="date"], .form-style
input[type="datetime"], .form-style input[type="email"], .form-style
input[type="number"], .form-style input[type="search"], .form-style
input[type="time"], .form-style input[type="url"], .form-style
input[type="password"], .form-style textarea, .form-style select {
display: block;
box-sizing: border-box; -webkit-box-sizing: border-box; -moz-box-sizing: border-box;
width: 100%;
padding: 8px;
border-radius: 6px; -webkit-border-radius:6px; -moz-border-radius:6px;
border: 2px solid #fff;
box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33); -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33); -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}
.form-style .section{
font: normal 20px 'Bitter', serif;
color: #008080;
margin-bottom: 5px;
}
.form-style .section span {
background: #008080;
padding: 5px 10px 5px 10px;
position: absolute;
border-radius: 50%; -webkit-border-radius: 50%; -moz-border-radius: 50%;
border: 4px solid #fff;
font-size: 14px;
margin-left: -45px;
color: #fff;
margin-top: -3px;
}
.form-style input[type="button"], .form-style input[type="submit"]{
background: #008080;
padding: 8px 20px 8px 20px;
border-radius: 5px; -webkit-border-radius: 5px; -moz-border-radius: 5px;
color: #fff;
text-shadow: 1px 1px 3pxrgba(0, 0, 0, 0.12);
font: normal 30px 'Bitter', serif; -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17); -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
border: 1px solid #257C9E; font-size: 15px;
}
.form-style input[type="button"]:hover, .form-style
input[type="submit"]:hover{
background: #2A6881; -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28); -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
</style>
</head>
<body background="bluei.jpg" style="background-size: cover;">
<div class="form-style"> <h1>Register Now as an influencer!</h1>
<form name="Register" method="post" action="register_inf(temp).php">
<div class="section"><span>1</span>First Name & Address</div>
<div class="inner-wrap">
<label>Your Full Name <input type="text" name="name" /></label>
<label>Username <input type="text" name="username" /></label>
<label>Your Age <input type="text" name="age" /></label>
<label>Gender <input type="text" name="gender" /></textarea></label>
</div>
<div class="section"><span>2</span>Email & Phone</div>
<div class="inner-wrap">
<label>Email Address <input type="email" name="email" /></label>
<label>Phone Number <input type="text" name="phone" /></label>
</div>
<div class="section"><span>3</span>Other Details</div>
<div class="inner-wrap"> <label>Platforms<br>
<span style="font: 13px Arial, Helvetica, sans-serif; color: black;">
<input type="checkbox" name="facebook" value="facebook"> Facebook<br>
<input type="checkbox" name="insta" value="insta"> Instagram<br>
<input type="checkbox" name="youtube" value="youtube">Youtube<br>
<input type="checkbox" name="twitter" value="twitter"> Twitter<br> </span>
</label>
<label> Average Likes<input type="text" name="avg_likes" /></label>
<label>Genre <input type="text" name="genre" /></label> </div>
<div class="section"><span>4</span>Passwords</div> <div class="inner- wrap">
	<label>Password <input type="password" name="password" /></label>
<label>Confirm Password <input type="password" name="password2"
/></label> </div>
<div class="button-section"> <input type="submit" name="Register" /> </div>
<br> </form>
<form name="Login" action="inf_login.php"> <div class="button-section">
<input type="submit" name="Register" value = "Login"/> </div> </form>
</div> </body> </html>

<?php
 if(isset($_POST['Register']))
{
$conn=mysqli_connect('localhost','root','', 'influencer_marketing') or die(mysqli_error());
$inf_name=$_POST['name']; $inf_username=$_POST['username'];
$inf_username=strip_tags($inf_username); $inf_username=str_replace("","",$inf_username);
$inf_age=$_POST['age']; $inf_gender=$_POST['gender'];
$inf_email=$_POST['email'];
$inf_contact=$_POST['phone']; $inf_platform="";
if(isset($_POST['facebook']))
{
$inf_platform.=" facebook ";
}
if (isset($_POST['insta']))
{
$inf_platform.=" instagram ";
}
if (isset($_POST['youtube']))
{$inf_platform.=" youtube ";
}
if (isset($_POST['twitter']))
{
$inf_platform.=" twitter ";
}
$inf_avg_likes=$_POST['avg_likes'];
$inf_genre=$_POST['genre'];
$inf_password=$_POST['password'];
$inf_password=strip_tags($inf_password);
$inf_password2=$_POST['password2'];
$inf_password2=strip_tags($inf_password2);
$msg="";
if((strlen($inf_name)==0)||(strlen($inf_username)==0)||(strlen($inf_age)==0)||(strlen($inf_gender)==0)||(strlen($inf_platform)==0)||(strlen($inf_email)==0)||(strlen($inf_contact)==0)||(strlen($inf_avg_likes)==0)||(strlen($inf_genre)==0)||
($inf_passwrd!=$inf_password2))
{
if(strlen($inf_name)==0)
{
$msg = "Enter name!";
}
if(strlen($inf_username)==0)
{
$msg .= "Enter username!";
}
if(strlen($inf_age)==0)
{$msg .= "Enter age!";
}
if(strlen($inf_gender)==0)
{
$msg .= "Enter gender!";
}
if(strlen($inf_platform)==0)
{
$msg .= "Select a platform!";
}
if(strlen($inf_email)==0)
{
$msg .= "Enter email!";
}
if(strlen($inf_contact)==0)
{
$msg .= "Enter contact number!";
}
if(strlen($inf_avg_likes)==0)
{
$msg .= "Enter average likes!";
}
if(strlen($inf_genre)==0)
{
$msg .= "Enter genre!";
}
if($inf_password!=$inf_password2)
{$msg .="Password doesnt match!";
}
echo "<h4 style=\"color:red;\">".$msg."</h4>";
}
$sql_u = "SELECT * FROM influencer WHERE
inf_username='".$inf_username."'";
$res_u = mysqli_query($conn,$sql_u) or die (mysqli_error());
$n=mysqli_num_rows($res_u);
if ($n>0)
{
echo "<span style=\"color:white;\">Already Exists";
}
else
{
$sql = "insert into
influencer(inf_username,inf_password,inf_name,inf_platform,inf_email,inf_con
tact,inf_age,inf_gender,inf_avg_likes,inf_genre)
values('".$inf_username."','".$inf_password."','".$inf_name."','".$inf_platform."' ,'".$inf_email."',".$inf_contact.",".$inf_age.",'".$inf_gender."',".$inf_avg_likes. " ,'".$inf_genre."')";
if (mysqli_query($conn,$sql) === TRUE)
{
echo "<span style=\"color:white;\">Successfully registered!";
}
else
{
echo "Error:" .mysqli_error($conn);
}}
}
 ?>
