<?php
 class reclam{
    private $id;
 	private $subject;
 	private $problem;
 	private $iduser;
 	private $decision;
      
      public function __construct(){

     
      



      }  
      public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getSubject(){
		return $this->subject;
	}

	public function setSubject($subject){
		$this->subject = $subject;
	}

	public function getProblem(){
		return $this->problem;
	}

	public function setProblem($problem){
		$this->problem = $problem;
	}

	public function getIduser(){
		return $this->iduser;
	}

	public function setIduser($iduser){
		$this->iduser = $iduser;
	}

	public function getDecision(){
		return $this->decision;
	}

	public function setDecision($decision){
		$this->decision = $decision;
	}
 	}

?>