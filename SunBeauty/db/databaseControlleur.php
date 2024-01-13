<?php class dbcontroller {
    private $db;
   public function __construct($pdo) {
        $this->db = $pdo;
    }
 function addClient($prenom,$nom,$email,$password){
        try{
        $sql='INSERT INTO `users`( `FirstName`, `LastName`, `Email`, `Password`) VALUES (:value1,:value2,:value3,:value4)';
        $stm=$this->db->prepare($sql);
        $stm->execute(array(
            ":value1"=>$prenom,
            ":value2"=>$nom,
            ":value3"=>$email,
            ":value4"=>$password
        ));
        return true;
}
catch(Exception $e){
    return false;
}
    }
 function fetchCLient($email,$password){
        try{
        $sql='select firstName,lastName,email,password from users where email=:email and password=:pass';
        $stm=$this->db->prepare($sql);
        $stm->execute(array(
            ":email"=>$email,
            ":pass"=>$password
        ));
        $res=$stm->fetchall();
        return $res;
}
catch(Exception $e){
    return false;
}
    }    
}
?>
