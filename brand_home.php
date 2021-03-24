<?php
session_start();
if (!isset($_SESSION['username']))
{
header('location:brand_login.php');
}
?>
<?php
$connection = mysqli_connect('localhost','root','', 'influencer_marketing');
if(!$connection)
{
die ("Connection failed " . mysqli_error());
}
else
{
echo "<center>We are Connected</center>";
}
?>
<!DOCTYPE html>
<html> <head> <title></title> </head>
<body style="background: url(black_back.png); background-size: cover">
<center>
<h1 style="color: green" align="center"><b>Dashboard For Brands</b></h1>
<div style="background: white;width: 70%;border-radius: 0px; height: 60%">
<?php
$query = "SELECT * FROM brand where
brand_username='".$_SESSION['username']."'";
$select_brand_by_id = mysqli_query($connection, $query);
while ($row =mysqli_fetch_assoc($select_brand_by_id))
{
$brand_id = $row['brand_id'];
$brand_username = $row['brand_username'];
$brand_password = $row['brand_password'];
$brand_name = $row['brand_name'];
$brand_email = $row['brand_email'];
$brand_contact = $row['brand_contact'];
$brand_genre = $row['brand_genre'];
}
?> <br> <br>
<div style="margin-right: 50%">
<table cellpadding="5px">
<tr> <th>Brand Username : </th> <td> <?php echo "$brand_username"; ?>
</td> </tr>
<tr> <th> Brand Name : </th> <td> <?php echo "$brand_name"; ?> </td>
</tr>
<tr> <th>Brand Email : </th> <td> <?php echo "$brand_email"; ?> </td>
</tr>
<tr> <th>Brand Contact : </th> <td> <?php echo "$brand_contact"; ?> </td>
</tr>
<tr> <th>Brand Genre : </th> <td> <?php echo "$brand_genre"; ?> </td>
</tr>
</table> </div>
<style>
{
background-color: #4CAF50;
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
cursor: pointer;
}
table
{
border-collapse: collapse;
width: 100%;
}
th, td
{
text-align: left;
padding: 8px;
}
tr:nth-child(even)
{
background-color: #f2f2f2;
}
th
{
background-color: #339933;
color: white;
}
</style>
<a href="brand_logout.php">Logout</a>
<?php
$query=" select * from influencer group by inf_genre ";
$rec_set=mysqli_query($connection,$query) or die(mysqli_error());
echo "<HTML>";
echo "<form method=POST action=\"brand_home.php\">";
echo "<select name=genre>";
while ($rec=mysqli_fetch_assoc($rec_set))
{
echo "<option value =".$rec['inf_genre'].">".$rec['inf_genre']."</option>";
}
echo "</select>";
echo "<br>";
echo "<input id=\"but\" type=submit name=submit value=\"Find influencers in
genre\">";
echo "</form>";
echo "</HTML>";
?>
<?php
if(isset($_POST['submit']))
{
$drop = $_POST['genre'];
$query = "SELECT * from influencer WHERE inf_genre='".$drop."'";
$select_users = mysqli_query($connection, $query);
?>
<table border="2px" >
<thead> <tr>
<th>S.No</th>
<th>Name </th>
<th> Genre </th>
<th>Platform</th>
<th>Average Likes</th>
<th>Email</th>
<th>Contact</th>
</tr> </thead>
<tbody>
<.php
$i=1;
while ($row =mysqli_fetch_assoc($select_users))
{
$inf_name = $row['inf_name'];
$inf_genre = $row['inf_genre'];
$inf_pl = $row['inf_platform'];
$avg_likes = $row['inf_avg_likes'];
$inf_email = $row['inf_email'];
$inf_contact = $row['inf_contact'];
echo "<tr>";
echo "<th scope=\"row\">$i</th>";
echo "<td> $inf_name </td>";
echo "<td> $inf_genre </td>";
echo "<td> $inf_pl </td>";
echo "<td> $avg_likes </td>";
echo "<td> $inf_email </td>";
echo "<td> $inf_contact</td>";
echo "</tr>";
$i+=1;
}
}
?>
</tbody> </table> </div> </center>
</body>
</html>
