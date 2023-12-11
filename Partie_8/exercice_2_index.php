<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

            <form action="./exercice_2_informations.php" method="post">

                <label for="lastname">Lastname :</label>
                <input type="text" name="lastname" id="lastname">

                <label for="firstname">Firstname :</label>
                <input type="firstname" name="firstname" id="firstname">

                <label for="age">Age :</label>
                <input type="age" name="age" id="age">

                <button name="Send" type="submit">Send</button>
            </form>


</body>
</html>