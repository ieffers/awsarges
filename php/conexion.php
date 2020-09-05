<?php
    $host = 'localhost';
    $dbname = 'awsarges';
    $username = 'groot';
    $password = '20202020';
    try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
	echo "    " .getcwd();
?>
