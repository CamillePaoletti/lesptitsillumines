<?php
$return = [];
$mysqli = new mysqli("lesptitsijsql.mysql.db", "lesptitsijsql", "RSDu82sZ", "lesptitsijsql");
if($mysqli->connect_errno)
{
    $return['error'] = "Erreur: ".$mysqli->connect_error;
    echo json_encode($return);
    exit;
}
session_start();
if($_SESSION['active'])
{
    if($result = $mysqli->query("SELECT * FROM newsletter"))
    {
        while($row = $result->fetch_assoc())
            echo $row['email'].PHP_EOL;
        $result->free();
    }
    else
        echo "Erreur: ".$mysqli->error;
}
else
    echo "Vous n'êtes pas connecté(e)";
$mysqli->close();
?>