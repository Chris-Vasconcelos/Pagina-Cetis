<?php
/*VASCONCELOS SANCHEZ CHRISTOFER RICARDO
AGUSTIN ADLER REYES ANCHEYTA
KAREN GUADALUPE MALVAEZ SANDOVAL
MIA TAMARA MONTIEL RUIZ
RIGOBERTO GUERRERO MARCELO 
CARLOS URIEL FABELA CORRAL
4PAM 
*/
include_once 'user.php';
include_once 'user_session.php';


/*Creación de una nueva instancia de la clase UserSession */
$userSession = new UserSession();
/*Creación de una nueva instancia de la clase UserSession. */
$user = new User();

/* Checking if the user is logged in. */
if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    include_once 'home.php';

/* Checking if the username and password are set. */
}else if(isset($_POST['username']) && isset($_POST['password'])){
    
    /* Getting the username from the form. */
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

   /* Checking if the user exists in the database. */
    $user = new User();
    if($user->userExists($userForm, $passForm)){
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once 'home.php';
    }else{
        //echo "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'login.php';
    }
}else{
    //echo "login";
    include_once 'login.php';
}



?>