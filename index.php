<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require('personne.php');
        require('repertoire.php');
        $P1= new personne("p8","param","tanu","tan@",010206);
        //$Personne->afficherPersonne();
        $P2= new personne("j2","coum","sandi","sand@",020508);
        //$Personne2->afficherPersonne();
       
        $rep=new repertoire(array($P1,$P2));
        $rep->ajouterRepertoire("ajouter1", "nom1", "prenom1", "1@1", 11111);
        $rep->ajouterRepertoire("ajouter2", "nom2", "prenom2", "2@2", 22222);    
        $rep->supprimerRepertoire(1);
        $rep->afficherRepertoire();


//$rep->supprimerRepertoire();
        
        
        ?>

    </body>
</html>