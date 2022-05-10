<?php
     class User{
           private $id;
           private $name;
           private $lastname;
           private $email;
           private $password;
           private $role;
             
             public function __construct($n,$l,$e,$p){
            
            $this->name=$n;
            $this->lastname=$l;
            $this->email=$e;
            $this->password=$p;


             }    
             public function getId(){
                return $this->id;
            }
        
            public function setId($id){
                $this->id = $id;
            }
        
            public function getName(){
                return $this->name;
            }
        
            public function setName($name){
                $this->name = $name;
            }
        
            public function getLastname(){
                return $this->lastname;
            }
        
            public function setLastname($lastname){
                $this->lastname = $lastname;
            }
        
            public function getEmail(){
                return $this->email;
            }
        
            public function setEmail($email){
                $this->email = $email;
            }
        
            public function getPassword(){
                return $this->password;
            }
        
            public function setPassword($password){
                $this->password = $password;
            }



            public function getRole()
            {
                return $this->role;
            }

            public function setRole($role){
                $this->role=$role;
            }



     }
?>
     