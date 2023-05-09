<?php
    $host='localhost';
    $port=3306;
    $dbname='formulaire';
    $user='root';
    $pwd='';

     try{
            $newBD=new PDO('mysql:host=$host;port=$port;dbname=$dbname',$user,$pwd);
            echo "Connexion etbalie";
     }catch(PDOException $e){
        die('Erreur :' $e->getMessage());
     }

     if (isset($_POST['nom'])&&
         isset($_POST['prenom'])&&
         isset($_POST['telphone'])&&
         isset($_POST['mail'])&&
         isset($_POST['adresse'])&&
         isset($_POST['genre'])&&
         isset($_POST['sm'])) {
                    $insertion=$newBD->prepare('INSERT INTO profil VALUES(NULL,:nom,;prenom,:telphone,:mail,:adresse,:genre,:sm)');
                $insertion->bindValue(':nom',$_POST['nom']);
                $insertion->bindValue(':prenom',$_POST['prenom']);
                $insertion->bindValue(':telphone',$_POST['telphone']);
                 $insertion->bindValue(':mail',$_POST['mail']);
                 $insertion->bindValue(':adresse',$_POST['adresse']);
                 $insertion->bindValue(':genre',$_POST['genre']);
                 $insertion->bindValue(':sm',$_POST['sm']);
                $verification= $insertion->execute();
                    $verification=$insertion->execute();
                    if ($verification) {
                        echo "<br>Insertion reussie"
                    }else{
                        echo "Echec d'insertion";
                    }
                        
    }else{
        echo "Une variable n'est pas declaree et ou est null ";
    }
     