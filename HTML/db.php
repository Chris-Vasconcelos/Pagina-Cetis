<?php
/*VASCONCELOS SANCHEZ CHRISTOFER RICARDO
AGUSTIN ADLER REYES ANCHEYTA
KAREN GUADALUPE MALVAEZ SANDOVAL
MIA TAMARA MONTIEL RUIZ
RIGOBERTO GUERRERO MARCELO 
CARLOS URIEL FABELA CORRAL
4PAM 
*/
/* This class is used to connect to a database. */
class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

  /**
   * It's a constructor function that sets the database connection variables
   */
    public function __construct(){
        $this->host     = 'localhost';
        $this->db       = 'cetis64';
        $this->user     = 'root';
        $this->password = "";
        $this->charset  = 'utf8mb4';
    }

    function connect(){
    
        try{
            
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);
    
            return $pdo;

        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }   
    }
}






?>