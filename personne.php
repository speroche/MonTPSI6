<?php
class personne {
    private $code,$nom,$prenom,$email,$num;

    function __construct($code, $nom, $prenom, $email, $num) {
        $this->code = $code;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->num = $num;
    }
    public function getNom() {
        return $this->nom;
    }
    public function getCode() {
        return $this->code;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getNum() {
        return $this->num;
    }
    public function setCode($code) {
        $this->code = $code;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setNum($num) {
        $this->num = $num;
    }

    public function afficherPersonne() {
        echo"<table border=1>";
        echo"<TR>";
        
        echo"<TD>" .$this->code."</TD>"."<TD>".$this->nom."</TD>"."<TD>".$this->prenom."</TD>"."<TD>".$this->email."</TD>"."<TD>".$this->num."</TD>";
        echo"</TR>";
        echo"</table>";
    }
}
?>