
<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>

<?php
   

   $file = file_get_contents('data.json');

   $data = json_decode($file,true);


   $lastTalk = $data[sizeof($data)-1];

   if($lastTalk["open"] == true)
   {


   echo '<p>Discussion en cours</p><p/>';

   echo '<p> Theme : '.$lastTalk["theme"].'</p><p/>';


   echo '<a href="http://localhost/BriseGlace/closeDiscussion.php">Fermer Discussion en cours</a>';

   }
   else
   {
   	echo '<p>Aucune discussion en cours</p><p/>';
   }



?>

 </body>
</html>