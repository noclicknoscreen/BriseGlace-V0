<?php
   $type = $_POST['type'];
   $key = $_POST['key'];
   $imgUrl = $_POST['imgUrl'];


   $file = file_get_contents('data.json');


   if($type == "start")
   {
   	 echo "starting ";
   	 $data = ['theme' => $key, "elements" => []];
   }
   else
   {
   	echo "adding ";
   	$data = json_decode($file,true);


   	
   	$arElt = ['key' => $key, 'imgUrl' => $imgUrl];
 

   	$data["elements"][] = $arElt;

   	
   }
   
   print_r($data);

   file_put_contents('data.json', json_encode($data));
?>