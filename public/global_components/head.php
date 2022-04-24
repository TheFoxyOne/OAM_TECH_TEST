<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href='/public/css/style.css'>
<title>OAM Tech Test</title>

<?php 
// Read the JSON file 
$json = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/localization/data.json');
  
// Decode the JSON file
$json_data = json_decode($json,true);
?>