<?php
$currentTimeSlot = (new DateTime())->format('H');
$name = 'Matthieu';
if($currentTimeSlot < 12){
    $toDisplay = "Good morning!";
} elseif($currentTimeSlot < 18){
    $toDisplay = "Good afternoon!";
} elseif($currentTimeSlot < 22){
    $toDisplay = "Good evening!";
} else{
    $toDisplay = "Please, sleep...";
}

$range = range(0, 10);

//Super global variable _GET: it's an array given to PHP by Apache, and inside there's associative elements representing the query string.

$firstName = $_GET["firstname"] ?? "Carlos";
// $firstName = htmlentities($firstName);

$lastName = $_GET["lastname"] ?? "Mendoza";
// $lastName = htmlentities($lastName);

// $value = htmlentities($firstName);

// echo $value;

// if(isset($_GET["name"])) {
//     $name = $_GET["name"];
// }

// if(isset($_GET["firstname"])) {
//     $firstName = $_GET["firstname"];
// }

// if(isset($_GET["lastname"])) {
//     $lastName = $_GET["lastname"];
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    strong{
        color:red;  
    }
  </style>
</head>
<body>
  Hello <strong><?php echo $firstName . ' ' . $lastName . ','?> </strong><?php echo $toDisplay; ?>
  <ul>
  	<?php foreach ($range as $index) { ?>
  	<li>
  		<?php echo $index ?>
  	</li>    
  	<?php }?>
  </ul>
  <ul>
  <?php foreach($range as $index){
    echo '<li>' . $index . '</li>';
  }?>
  </ul>
</body>
</html>