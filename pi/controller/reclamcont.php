<?php
 

     class reclamcont{

         private $pdo;

        public function __construct(){

            require_once "connexion.php" ;
            $c=new  Connexion();
            $this->pdo=$c->cnxbase();
        }
           
           public function add(reclam $reclam){

            
            $subject=$reclam->getSubject();
            $problem=$reclam->getProblem();
            $iduser=$reclam->getIduser();
            $decision=0;

            $req="insert into reclamation (subject,problem,iduser,decision) values('$subject','$problem','$iduser','$decision')";

            $res=$this->pdo->exec($req);

            return $res;
       }

        public function getreclams(){
        $req="select r.id,r.subject,r.problem,r.iduser,r.decision, u.name, u.lastname from reclamation r inner join user u on u.id=r.iduser ";
        $res=$this->pdo->query($req);
        return $res; 
           

       }


       public function delete($id){

       $req="delete from reclamation where id='$id' ";
        $res=$this->pdo->exec($req);
        return $res;

       }
        
        public function getreclamsbyid($id){
        $req="select
        id,subject,problem,iduser,decision from reclamation where id='$id' ";
        $res=$this->pdo->query($req);
        return $res; 
           

       }
        public function edit(reclam $reclam){
            $id=$reclam->getId();
            $subject=$reclam->getSubject();
            $problem=$reclam->getProblem();
            $iduser=$reclam->getIduser();
            $decision=0;

            $req="update reclamation set subject='$subject' ,problem='$prbolem' where id='$id'";
           
            $res=$this->pdo->exec($req);
            return $res;
       }

           public function getreclamsbyiduser($idu){
        $req="select
        id,subject,problem,iduser,decision from reclamation where iduser='$idu' ";
        $res=$this->pdo->query($req);
        return $res; 
           

       }

public function editdecision($id,$dec){
            

            $req="update reclamation set decision='$dec' where id='$id'";
           
            $res=$this->pdo->exec($req);
            return $res;
       }



     }