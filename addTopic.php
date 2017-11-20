
<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>

<?php
   
   $key = $_GET['key'];

   $imgUrl = $_GET['imgUrl'];

   $file = file_get_contents('data.json');

   $data = json_decode($file,true);

   $arElt = ['key' => $key, 'imgUrl' => $imgUrl];
 
   $data[sizeof($data)-1]["elements"][] = $arElt;

   file_put_contents('data.json', json_encode($data));


   echo '<p>Ajout de</p><p/>';

   echo '<p>'.$key.'</p><p/>';

   echo '<img src="'.$imgUrl.'"/>';

   print_r($data);
?>

 </body>
</html>