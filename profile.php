<!DOCTYPE HTML>

<html>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
<head>

 

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />

		<?php
		// Initialisation
		require_once('../Includes/init.php');

		// Require the user to be logged in before they can see this page.
		Auth::getInstance()->requireLogin();
		?>
</head>

<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="../index.php">Video Network <span>by Du'Bois</span></a></div>
				<a href="../#menu">Menu</a>
			</header>

		



  <?php $user = Auth::getInstance()->getCurrentUser(); ?>
  
<section id="" class="wrapper">
<div class="inner">
<div class="align-center">

  <dl>
    <dt>User Name</dt>
    <dd><?php echo htmlspecialchars($user->name); ?></dd>
    <dt>Registered email address</dt>
    <dd><?php echo htmlspecialchars($user->email); ?></dd>
  </dl>

<form action="" method='post' enctype="multipart/form-data">
Description of Video: <input type="text" name="description_entered"/><br><br>
<input type="file" name="file"/><br><br>
	
<input type="submit" name="submit" value="Upload"/>

</form>

<?php 

$user = "root"; 
$password = "8kicker2"; 
$host = "localhost"; 
$dbase = "vidnetwork"; 
$table = "vidtable"; 

$path= "../Videos/";

$connection= new mysqli($host, $user, $password, $dbase);
if ($connection->connect_error)
{
die ('Could not connect:' . $connection->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$name= $_FILES['file']['name'];
echo "$name <br>";	


$tmp_name= $_FILES['file']['tmp_name'];
echo "<h1> Sauce too drip $tmp_name </h1>";
$submitbutton= $_POST['submit'];

$position= strpos($name, "."); 
$name= trim($name);
$newname= substr($name, 0, $position );
$newname .= date("-d-m-Y-h-i-s");

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);
$name= $newname . "." . $fileextension; 
$description= $_POST['description_entered'];

$success= -1;

$descript= 0;

if (empty($description))
{
$descript= 1;
}

if (isset($name)) {

if (!empty($name)){
if (($fileextension !== "mp4") && ($fileextension !== "ogg") && ($fileextension !== "webm"))
{
$success=0;
echo "The file extension must be .mp4, .ogg, or .webm in order to be uploaded";
}


else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm"))
{
$success=1;

echo "temp $tmp_name <br> path" . $path.$name;

if (move_uploaded_file($tmp_name, $path.$name)) {
echo 'Uploaded!';
}
else{
	echo "did not upload";
}
}
}
}

$sql= "INSERT INTO $table (description, filename, fileextension)
VALUES ('$description', '$name', '$fileextension')";


if((!empty($description)) && ($success == 1)){
//mysqli_query("INSERT INTO `$table` (description, filename, fileextension)
//VALUES ('$description', '$name', '$fileextension')");

if($connection->query($sql) === TRUE){

} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

}
}


$sql= "SELECT description, filename, fileextension FROM $table ORDER BY ID DESC LIMIT 5"; 
$result= $connection->query($sql);

echo"<p id='para6'>Videos</p>";

print "<table border=1>\n"; 


while ($row = @mysqli_fetch_array($result)){ 
$videos_field= $row['filename'];
$video_show= "../Videos/$videos_field";
$descriptionvalue= $row['description'];
$fileextensionvalue= $row['fileextension'];
print "<tr>\n"; 
print "\t<td>\n"; 
echo "<font face=arial size=4/>$descriptionvalue</font>";
print "</td>\n";
print "\t<td>\n"; 
echo "<div align=center><video width='320' controls><source src='$video_show' type='video/$fileextensionvalue'>Your browser does
not support the video tag.</video></div>";
print "</td>\n";
print "</tr>\n"; 
} 
print "</table>\n";  


 echo "<a href='../Vendor/logout.php'>Log out</a></p>";

 ?>

 </div>
</div>

</section>
 </body>
 </html>