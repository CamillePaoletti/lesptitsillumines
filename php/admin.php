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
if($_POST['function'] == 'check_logged')
{
    if($_SESSION['active'])
        $return['logged'] = true;
}
else if($_POST['function'] == 'login')
{
    $pass = $_POST['pass'];
    if($result = $mysqli->query("SELECT * FROM admin"))
    {
        $hash = $result->fetch_assoc()['hash'];
        $result->free();
        if(password_verify($pass, $hash))
            $_SESSION['active'] = true;
        else
            $return['message'] = "Password incorrect !";
    }
    else
        $return['error'] = "Erreur: ".$mysqli->error;
}
else if($_POST['function'] == 'new_pass')
{
    if($_SESSION['active'])
    {
        $new_pass = $_POST['new_pass'];
        if($mysqli->query("TRUNCATE admin"))
        {
            if($mysqli->query("INSERT INTO admin VALUES('".password_hash($new_pass, PASSWORD_DEFAULT)."')"))
                $return['message'] = "Password changé";
            else
                $return['error'] = "Erreur: ".$mysqli->error;
        }
        else
            $return['error'] = "Erreur: ".$mysqli->error;
    }
    else
        $return['message'] = "Vous n'êtes pas connecté(e)";
}
else if($_POST['function'] == 'disconnect')
    if($_SESSION['active'])
        unset($_SESSION['active']);
    else
        $return['message'] = "Vous n'êtes pas connecté(e)";
else if($_POST['function'] == 'get_mails')
{
    if($_SESSION['active'])
    {
        $mails = [];
        if($result = $mysqli->query("SELECT * FROM newsletter"))
        {
            while($row = $result->fetch_assoc())
                array_push($mails, $row['email']);
            $result->free();
            $return['mails'] = $mails;
        }
        else
            $return['error'] = "Erreur: ".$mysqli->error;
    }
    else
        $return['message'] = "Vous n'êtes pas connecté(e)";
}
$mysqli->close();
echo json_encode($return, JSON_FORCE_OBJECT);
?>