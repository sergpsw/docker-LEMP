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
	echo '<table border="1">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>id</th>';
	echo '<th>username</th>';
	echo '<th>email</th>';
	echo '<th>password</th>';
	echo '<th>role</th>';
	echo '<th>created</th>';
	echo '<th>updated</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';

	while ($table = mysqli_fetch_array($result)) 
	{
	    echo '<tr>';
	    echo '<td>' . $table['id'] . '</td>';
	    echo '<td>' . $table['username'] . '</td>';
	    echo '<td>' . $table['email'] . '</td>';
	    echo '<td>' . $table['password'] . '</td>';
	    echo '<td>' . $table['role'] . '</td>';
	    echo '<td>' . $table['created'] . '</td>';
	    echo '<td>' . $table['updated'] . '</td>';
	    echo '</tr>';
	}
	echo '</tbody>';
	echo '</table>';
}


mysqli_close($link);
?>
