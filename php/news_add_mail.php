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
    if($mysqli->query("INSERT INTO newsletter VALUES('".$email."')"))
        echo 'Vous voilà inscrit(e) !';
    else
    {
        if($mysqli->errno == 1062)
            echo "Vous êtes déjà inscrit(e) !";
        else
            echo "Erreur: ".$mysqli->error;
    }
}
else
    echo 'Adresse e-mail invalide...';
$mysqli->close();
?>