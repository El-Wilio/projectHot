
<?php

$user = 'projecthot';
$database = 'redShark';
$host = 'localhost';

//Try catch only tests if the user, database and host exist. It does not test if the connection was succesfull (good password)

try {
    $db = new PDO('pgsql:host='.$host.';dbname='.$database, $user, $pass);
    echo "PDO connection object created ";
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

//close connection
$dbh = null

<? phpinfo(); ?>

?>

