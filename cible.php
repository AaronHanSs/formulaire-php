<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire</title>
  </head>

  <body>



      <?php

      if (empty($_POST['nom']) && empty($_POST['prenom'])) {
        echo "il faut indiquer votre nom et prénom";
      }
      elseif(empty($_POST['nom'])) {
      echo 'Le champs nom n\'est pas indiqué';
    }
    elseif (empty($_POST['prenom'])) {
      echo "le champs prénom n'est pas indiqué";
    }
    elseif (!ctype_alpha($_POST['nom']) || !ctype_alpha($_POST['prenom'])) {
      echo "veuillez ne pas mettre de chiffre dans votre nom ou prénom tu n'es pas un robot couillon";
    }
    elseif (empty($_POST['sexe'])) {
      echo "le champs sexe n'est pas indiqué";
    }
    elseif (empty($_POST["sport"]) && empty($_POST["lecture"]) && empty($_POST["cinema"])) {
      echo "aucune case loisirs cochée";
    }
    elseif (isset($_FILES['fichier']) AND $_FILES['fichier']['error'] == 0) {

      if ($_FILES['fichier']['size'] <= 1000000 ) {

        $infosfichier = pathinfo($_FILES['fichier']['name']);
        $extenstion_fichier = $infosfichier['extension'];
        $format_fichier = array('jpg', 'jpeg','gif');
        if (in_array($extenstion_fichier,$format_fichier)) {
          move_uploaded_file($_FILES['fichier']['tmp_name'], 'reception/'.
          basename($_FILES['fichier']['name']));
          echo htmlspecialchars("Bonjour"." ".$_POST["prenom"]." ".$_POST["nom"]." "."tu est agée de"." ".$_POST["age"]." "."ans"." "."je vois que tu es de sexe"." ".$_POST["sexe"]." "."et que tu aimes"." ".$_POST["sport"]." ".$_POST["lecture"]." ".$_POST["cinema"]." "."et maintenant que tu habite dans la ville de"." ".$_POST["ville"]).'<br>'.'Envoie effectué';
        }
      }

      else {
        echo "pas de fichier";
      }
    }

    ?>




<p>
    <a href="index.php"> Retour a l'index</a>
</p>
  </body>
</html>
