<?php
//echo "Hello World";
$host="localhost" ;
$database="players";
$user="root";
$password = "root";
$error = "Cant connect";
$con = mysqli_connect($host,$user,$password);
mysqli_select_db($con, $database) or die("Unableto connect to database");  

$query = "SELECT * FROM high_scores";  
$result= mysqli_query($con, $query);  
$n = mysqli_num_rows($result);  
while ($row = mysqli_fetch_assoc($result))  
{
	$name = $row["name"];
	$score = $row["score"];
	//echo "Name:".$name;
	//echo "Score:".$score; 
	echo $name."\t";
	echo $score."\n";
}

?>
