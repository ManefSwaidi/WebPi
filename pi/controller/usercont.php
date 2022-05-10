<?php

    class usercont{

        private $pdo;

        public function __construct(){

            require_once "connexion.php" ;
            $c=new  Connexion();
            $this->pdo=$c->cnxbase();
        }

       public function add(User $user){

            $name=$user->getName();
            $lastname=$user->getLastname();
            $email=$user->getEmail();
            $password=$user->getPassword();

            $req="insert into user(name,lastname,email,password,role) values('$name','$lastname','$email','$password','utilisateur')";
           
            $res=$this->pdo->exec($req);
            return $res;
       }


       public function getusers(){
        $req="select id,name,lastname,email,password from user ";
        $res=$this->pdo->query($req);
        return $res; 
           

       }


       public function delete($id){

       $req="delete from user where id='$id' ";
        $res=$this->pdo->exec($req);
        return $res;

       }
        
        public function getusersbyid($id){
        $req="select id,name,lastname,email,password from user where id='$id' ";
        $res=$this->pdo->query($req);
        return $res; 
           

       }
        public function edit(User $user){
            $id=$user->getId();
            $name=$user->getName();
            $lastname=$user->getLastname();
            $email=$user->getEmail();
            $password=$user->getPassword();

            $req="update user set name='$name' ,lastname='$lastname',email='$email',password='$password' where id='$id'";
           
            $res=$this->pdo->exec($req);
            return $res;
       }


       public function getlogin(User $user){
            $email=$user->getEmail();
            $password=$user->getPassword();

            $req="select id,name,lastname,email,password,role from user where password='$password' AND email='$email'";


             $res=$this->pdo->query($req);
            return $res;
            

       }

function triuser(){
            $req="select id,name,lastname,email,password from user order by name";
             $res=$this->pdo->query($req);
             
        return $res; 
        }


        function rechercheuser($txt){
            $req="select id,name,lastname,email,password from user where lastname like '%$txt%' or name like '%$txt%' or email like '%$txt%'";
             $res=$this->pdo->query($req);
             
        return $res; 
        }

        public function editpassword($email,$password){
            

            $req="update user set `password`='$password' where email='$email'";
           //echo $req;
            $res=$this->pdo->exec($req);
            return $res;
       }

    }