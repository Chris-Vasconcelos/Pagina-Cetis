<?php
/*VASCONCELOS SANCHEZ CHRISTOFER RICARDO
AGUSTIN ADLER REYES ANCHEYTA
KAREN GUADALUPE MALVAEZ SANDOVAL
MIA TAMARA MONTIEL RUIZ
RIGOBERTO GUERRERO MARCELO 
CARLOS URIEL FABELA CORRAL
4PAM 
*/
include 'db.php';

/*Es una clase que extiende la clase DB y se usa para crear, leer, actualizar y eliminar usuarios. */
class User extends DB{
  /*Una variable que se utiliza para almacenar el nombre del usuario */
    private $nombre;
    private $username;


    public function userExists($user, $pass){
      /* Tomamos la contraseña y la encriptamos. */
        $md5pass = md5($pass);

        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username	 = :user AND passaword = :pass');
        /* Executing the query with the user and pass variables. */
        $query->execute(['user' => $user, 'pass' => $md5pass]);

      /* Checking to see if the query was successful. */
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

   /*Validamos que el usuario exista en la base de datos  */
    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user');
        $query->execute(['user' => $user]);
        
       /* A loop that is used to iterate through the query and assign the values of the query to the
       variables. */
        /* Looping through the query and assigning the values to the properties of the class. */
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->usename = $currentUser['username'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
}

?>