<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

<?php

$date = date("d-m-Y");
	$heure = date("H:i");
	Print("Nous sommes le $date et il est $heure");




 ?>



            <form action="Réponses.php" method="post" name="generateur_contenu">

            <label for="form-name">To do tasks</label>
            <input type="text" name="name" placeholder="Please enter your list" required="required" data-error="Task is required.">

            <input type="submit" class="btn btn-success btn-send" value="Save Task">


        </form>







    </body>
</html>
