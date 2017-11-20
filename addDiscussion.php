<?php

   $key = $_POST['key'];


   $file = file_get_contents('data.json');
   
   $data = json_decode($file,true);

   $data[] = ['theme' => $key, "elements" => [], "date" => time(), "open" => true];

   
   print_r($data);

   file_put_contents('data.json', json_encode($data));
?>