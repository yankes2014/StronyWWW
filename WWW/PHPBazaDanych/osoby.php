<?php
	session_start();
	$servername = "localhost";
	$username = "yankes";
	$password = "cziter123";
	$dbname = "yankes2014";
	// Create connection
	$conn=mysqli_connect($servername, $username, $password, $dbname);
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM ludzie";
	$result = $conn->query($sql);

	if ($result->num_rows > 0)
	{

		echo "<b> id: </b>";
		echo "<b>Imię </b>";
		echo"<b>Nazwisko </b>";
    
		while($row = $result->fetch_assoc()){
			echo "<br>";
			echo $row["id"];
			echo " ";
			echo $row["imie"];
			echo " ";
			echo $row["nazwisko"];
			echo " ";
			echo "<a href='delete.php?id=" . $row["id"] . "'>Usun</a>";
		}
	}
	else
	{
    
		echo "Lista osob pusta";
	}
	echo "<br>";
	echo "<br>";
	echo "<br>";
    echo "Dodaj:";
    echo "<form action='add.php' method='get'>";
	echo "<br>";
    echo "Imię : <input type='text' name='name'/>";
	echo "<br>";
    echo "Nazwisko: <input type='text' name='surname'/>";
	echo "<br>";
    echo "<input type='submit' value='Dodaj'/>";
    echo "</form>";
?>