<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>test</title>
    </head>
    <body>
<?php

    $chemin_vers_le_fichier_json2 = 'todo.json';
    	$open_file = file_get_contents($chemin_vers_le_fichier_json2);


    $open_file = json_decode($open_file);


    foreach ($open_file as $key => $objets) {
?>
        <input type ="checkbox" name="TachesAFaire" id="TachesAFaire">


<?php
        print_r([$open_file]);
    }
?>



    </body>
</html>
