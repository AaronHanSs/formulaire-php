<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire</title>
    <link rel="stylesheet" href="main.css">
  </head>

  <body>

    <div class="formulaire">

    <form action="cible.php" method="post" enctype="multipart/form-data">

      <h1>Contact</h1>
      <fieldset>
          <legend>A propos de vous</legend>
          <ul>

          <li>  <label for="prenom" class="label_title"> Prénom : </label>
             <input type="text" name="prenom">  </li>

          <li>  <label for="nom" class="label_title"> Nom : </label>
              <input type="text" name="nom"> </li>

          <li><label for="age"> age :</label>
          <select class="Age" name="age">
            <option value="-15"> moins de 15 ans </option>
            <option value="15"> 15 ans </option>
            <option value="16"> 16 ans </option>
            <option value="17"> 17 ans </option>
            <option value="18"> 18 ans </option>
            <option value="19"> 19 ans </option>
            <option value="20"> 20 ans </option>
            <option value="21"> 21 ans </option>
            <option value="22"> 22 ans </option>
            <option value="23"> 23 ans </option>
            <option value="24"> 24 ans </option>
            <option value="25"> 25 ans </option>
            <option value="26"> 26 ans </option>
            <option value="27"> 27 ans </option>
            <option value="28"> 28 ans </option>
            <option value="29"> 29 ans </option>
            <option value="30"> 30 ans </option>
            <option value="+30"> plus de 30 ans </option>
          </select> </li>

          <li>  <label for="sexe" class="label_title">Sexe :</label>
            <input type="radio" name="sexe" id="Masculin" value="Masculin">
            <label for="Masculin">Homme</label>
            <input type="radio" name="sexe" id="feminin" value="feminin">
            <label for="feminin">Femme</label> </li>

          <li>  <label for="city" class="label_title"> Ville : </label>
            <select class="Ville_css" name="ville">
              <option value="lille"> Lille </option>
              <option value="roubaix"> Roubaix </option>
              <option value="tourcoing"> Tourcoing </option>
            </select> </li>

            <li>
                <h4>loisirs :</h4>
            <li>  <label for="sport"> sport</label>
                 <input type="checkbox" name="sport" id="sport" value="sport"> </li>

            <li>  <label for="lecture"> lecture </label>
                <input type="checkbox" name="lecture" id="lecture" value="lecture">
            </li>

            <li>  <label for="cinema"> cinéma </label>
                <input type="checkbox" name="cinema" id="cinema" value="cinema">
            </li>

          </ul>
      </fieldset>

      <fieldset>
        <legend>Fichier</legend>
        <input type="file" name="fichier">
        <!-- <input type="submit" name="bouton_fichier" value="Envoyer le fichier"/> -->
      </fieldset>
      <input type="submit" />

    </form>

  </div>
  </body>
</html>
