<?php
// default to localhost values

$host = "localhost";
$port = "3306";
$user = "root";
$pw = "";
$dbname = "test";
// if we're on the PBCS server, use the cloud accountvalues

if (gethostname() == "server.pbcs.us") {
    $host = 'localhost';
    $port = '3306';
    $user = 'ppabusta_admin';
    $pw = 'codeschool1';
    $dbname = 'ppabusta_underFour';
}

//("mysql:host=$servername;dbname=$dbname", $username, $password)

$connection_info =
    "mysql"
    . ":host=" . $host
    . ":" . $port
    . ";dbname=" . $dbname
;

try {
    $db = new PDO($connection_info, $user, $pw);
     //echo 'Connected!';
} catch(PDOException $e) {
    echo $e->getMessage();
    echo "host:port = $host:$port";
    echo "dbname = $dbname";
    echo "user = $user";
    exit();
}
