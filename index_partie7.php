<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Exercice 1

<form action = "./informations.php" method="GET">
    
    <label>Nom</label>
    <input type="text" placeholder="Nom" name="lastname">

    <label>Prénom</label>
    <input type="text" placeholder="Prénom" name="firstname">

    <button type="submit">Envoyer</button>

</form> -->

<!-- Exercice 2 -->

<!-- <form action = "./informations.php" method="POST">
    
    <label>Nom</label>
    <input type="text" placeholder="Nom" name="lastname">

    <label>Prénom</label>
    <input type="text" placeholder="Prénom" name="firstname">

    <button type="submit">Envoyer</button>

</form> -->

<!-- Exercice 5 -->

<!-- <form action = "./informations.php" method="GET">
    
    <label>Nom</label>
    <input type="text" placeholder="Nom" name="lastname"></input>

    <label>Prénom</label>
    <input type="text" placeholder="Prénom" name="firstname"></input>

    <label>Civilité</label>
    <select name = "gender">
    <option valeur="choisir">Choisir</option>
    <option valeur="femme">Madame</option>
    <option valeur="homme">Monsieur</option>
    </select>

    <button type="submit">Envoyer</button>


</form> -->

<!-- Exercice 6 -->

<!-- <?php
if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['gender'])) {
    echo "<p>" . $_POST['prenom'] . $_POST['nom'] . $_POST['gender'];
}

?> -->


<!-- // <form action = "" method="POST">  On ne met rien dans action pour que l'info soit dans la même page.
    
    <label>Nom</label>
    <input type="text" placeholder="Nom" name="lastname"></input>

    <label>Prénom</label>
    <input type="text" placeholder="Prénom" name="firstname"></input>

    <label>Civilité</label>
    <select name = "gender">
    <option valeur="choisir">Choisir</option>
    <option valeur="femme">Madame</option>
    <option valeur="homme">Monsieur</option>
    </select>

    <button type="submit">Envoyer</button>

</form>  -->

<!-- mettre => <?php } ?> à la fin du document -->

<!-- Exercice 7  -->

<!-- <form action = "./informations.php" method="POST">
    
    <label>Nom</label>
    <input type="text" placeholder="Nom" name="lastname"></input>

    <label>Prénom</label>
    <input type="text" placeholder="Prénom" name="firstname"></input>

    <label>Civilité</label>
    <select name = "gender">
    <option valeur="choisir">Choisir</option>
    <option valeur="femme">Madame</option>
    <option valeur="homme">Monsieur</option>
    </select>

    <form enctype="multipart/form-data" action="_URL_" method="POST">
  <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
  Envoyez ce fichier : <input name="userfile" type="file" />
    
    <button type="submit">Envoyer</button>

    </form>
</form> -->

<!-- Exercice 8 -->

<!-- <form action = "./informations.php" method="POST">
    
    <label>Nom</label>
    <input type="text" placeholder="Nom" name="lastname"></input>

    <label>Prénom</label>
    <input type="text" placeholder="Prénom" name="firstname"></input>

    <label>Civilité</label>
    <select name = "gender">
    <option valeur="choisir">Choisir</option>
    <option valeur="femme">Madame</option>
    <option valeur="homme">Monsieur</option>
    </select>

    <form enctype="multipart/form-data" action="_URL_" method="POST">
  <input type="hidden" name="MAX_FILE_SIZE" value="30000"/>
  Envoyez un fichier : <input name="files" type="file">
    
    <button type="submit">Envoyer</button>

    </form>
</form> -->
    
</body>
</html>