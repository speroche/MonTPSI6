<?php
class repertoire {
    private $liste=array();
    
    function __construct($liste) {
        $this->liste = $liste;
    }

    public function afficherRepertoire()
        {
            echo"<table border=1>";
            echo"<TR>";
            echo"<TD>".'Code'."</TD>"."<TD>".'Nom'."</TD>"."<TD>".'Prenom'."</TD>"."<TD>".'Email'."</TD>"."<TD>".'Num'."</TD>";
            echo"</TR>";
            echo"</table>";
            foreach($this->liste as $pers)
            {
                $pers->afficherPersonne();
            }
        }

                 
     public function ajouterRepertoire($code, $nom, $prenom, $email, $num){
         //$a=new personne($this->code, $this->nom, $this->prenom, $this->email, $this->num);
         $p=new personne ($code, $nom, $prenom, $email, $num);
         array_push($this->liste,$p);
     }
     
     public function supprimerRepertoire($code){
         $compteur=0;
         foreach($this->liste as $pers)
            {
                if($pers->getCode()==$code){
                    unset($this->liste[$compteur]);
                    
                }
                $compteur++;
            }
            }
   }
?>