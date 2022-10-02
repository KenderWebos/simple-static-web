<link rel="stylesheet" href="CSS/main.css" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css">

<?php
include '../conexion.php';

echo '<center>';
echo '<center style="width:50%">';

echo "<br>";
echo "<br>";

$firstName = $_POST['inputFistName'];
$lastName = $_POST['inputLastName'];
$email = $_POST['inputEmail'];
$password = $_POST['inputPassword'];
$passwordConfirmation = $_POST['inputPasswordConfirmation'];
$userName = $_POST['inputUserName'];

if ($email != null and $password != null and $password == $passwordConfirmation and $userName != null)
{
    $sql = "
    INSERT INTO public.user_db(email, password, firstname, lastname, nickname)
    VALUES ('".$email."','".$password."','".$firstName."','".$lastName."' ,'".$userName."')
    ";
    //$sql = "INSERT INTO user_db(email, password, firstname, lastname, nickname) VALUES ('".$email."','".$password."','".$firstName."','".$lastName."' ,'".$userName."')";
    $insercion = mysqli_query($conexion, $sql);
    echo "Se registro su usuario y correo correctamente";

    //INSERT INTO user_db(email, password, firstname, lastname, nickname) VALUES ('kender@gmail.com', 'password', 'Kevin', 'Campos', 'KenderWebos');
}
else 
{
    echo "Ingrese correctamente su usuario y correo";
}

echo "<br>";
echo "<br>";

echo "<a href='../../index.html'> CLICK PARA REGRESAR </a>";
echo "<br>";

echo "</div>";

if ($insercion) {
    echo
    '
            <img style="width: 300px; -webkit-user-select: none;margin: auto;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" src="https://c.tenor.com/Hw7f-4l0zgEAAAAC/check-green.gif">
            ';
} else {
    echo
    '
            <img style="width: 300px; -webkit-user-select: none;margin: auto;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" src="https://c.tenor.com/hwe3vkln0_UAAAAC/error-x-error.gif">
            ';
}

echo "</center>";
echo '</center>';

?>