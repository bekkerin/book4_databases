<?php
//echo "Hello World";
$host="localhost" ;
$database="players";
$user="root";
$password = "root";
$error = "Cant connect";
$con = mysqli_connect($host,$user,$password);
mysqli_select_db($con, $database) or die("Unableto connect to database");  

/*$query = "SELECT * FROM high_scores";  
$result= mysqli_query($con, $query);  
$n = mysqli_num_rows($result);  
while ($row = mysqli_fetch_assoc($result))  
{
	$name = $row["name"];
	$score = $row["score"];
	//echo "Name:".$name;
	//echo "Score:".$score; 
	echo $name."\t";
	echo $score."<br>";
}*/

$name = $_GET['name'];
echo "name: ".$name."<br>";
//$score = 100;
$score = $_GET['score'];

$query= "SELECT * FROM high_scores WHERE name = '$name'";
$result = mysqli_query($con,$query);
$n = mysqli_num_rows($result);
if($n>0)
{
	echo "Found 1 record";
	$query = "UPDATE high_scores SET score = '$score' WHERE name = '$name'";
}
else
{
	echo "SOrry, not registered";
	$query = "INSERT INTO high_scores VALUES ('$name','$score')";
}
//execute the update or insert query
$result = mysqli_query($con,$query);


?>
