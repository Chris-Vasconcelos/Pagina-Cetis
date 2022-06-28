<?php
/*VASCONCELOS SANCHEZ CHRISTOFER RICARDO
AGUSTIN ADLER REYES ANCHEYTA
KAREN GUADALUPE MALVAEZ SANDOVAL
MIA TAMARA MONTIEL RUIZ
RIGOBERTO GUERRERO MARCELO 
CARLOS URIEL FABELA CORRAL
4PAM 
*/

    include_once 'user_session.php';

    $userSession = new UserSession();
    $userSession->closeSession();

    header("location: ../HTML/index.php");

?>