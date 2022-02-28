

<?php

$user = 'root';
$pass = '';
$db = 'hack';


    //open connection to mysql db
    $connection = new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");

    //fetch table rows from mysql db
    $sql = "SELECT x,y FROM categories";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);

    //close the db connection
    mysqli_close($connection);
?>