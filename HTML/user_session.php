<?php
/*VASCONCELOS SANCHEZ CHRISTOFER RICARDO
AGUSTIN ADLER REYES ANCHEYTA
KAREN GUADALUPE MALVAEZ SANDOVAL
MIA TAMARA MONTIEL RUIZ
RIGOBERTO GUERRERO MARCELO 
CARLOS URIEL FABELA CORRAL
4PAM 
*/
/* It creates a class called UserSession. */
class UserSession{

   /**
    * The function starts a session.
    */
    public function __construct(){
        session_start();
    }

    /**
     * It sets the current user to the user that is passed in.
     * 
     * @param user The user object that you want to set as the current user.
     */
  /**
   * It sets the current user to the user that is passed in
   * 
   * @param user The user's username
   */
    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
    }

    /**
     * Devolvemos el usuario actual
     */
    public function getCurrentUser(){
        return $_SESSION['user'];
    }

   /**
    * Destruimos sesion y desactivamos las variables
    */
    public function closeSession(){
        session_unset();
        session_destroy();
    }
}

?>