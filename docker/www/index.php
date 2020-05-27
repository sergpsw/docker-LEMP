<?php
$host = 'mysql'; 
$database = getenv("DB_NAME");
$user = getenv("DB_USER");
$password = getenv("DB_PASSWORD");

$link = mysqli_connect($host, $user, $password, $database) 
        or die("Error! " . mysqli_error($link));

$query ="SELECT * FROM users";
$result = mysqli_query($link, $query) or die("Error! " . mysqli_error($link)); 
if($result)
{
        while ($table = mysqli_fetch_assoc($result)) 
        {
                print_r($table);
                echo "<br>";
        }
}

mysqli_close($link);
?>