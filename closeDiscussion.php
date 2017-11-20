
<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>

<?php
   

   $file = file_get_contents('data.json');

   $data = json_decode($file,true);
 
   $data[sizeof($data)-1]["open"] = false;

   file_put_contents('data.json', json_encode($data));


   echo '<p>Discussion fermée</p><p/>';

   echo '<a href="http://localhost/BriseGlace/discussionEnCours.php">Retour</a>';

?>

 </body>
</html>