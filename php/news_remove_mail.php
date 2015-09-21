<?php
$mysqli = new mysqli("lesptitsijsql.mysql.db", "lesptitsijsql", "RSDu82sZ", "lesptitsijsql");
if($mysqli->connect_errno)
{
    echo "Erreur: ".$mysqli->connect_error;
    exit;
}
$email = $_POST['email'];
if(filter_var($email, FILTER_VALIDATE_EMAIL))
{
    if($result = $mysqli->query("SELECT * FROM newsletter WHERE email='".$email."'"))
    {
        if($result->fetch_row()[0])
        {
            if($mysqli->query("DELETE FROM newsletter WHERE email='".$email."'"))
                echo "Vous êtes désinscrit(e) !";
            else
                echo "Erreur: ".$mysqli->error;
        }
        else
            echo "Vous n'étiez pas inscrit(e) !";
        $result->free();
    }
    else
        echo "Erreur: ".$mysqli->error;
}
else
    echo "Adresse e-mail invalide...";
$mysqli->close();
?>