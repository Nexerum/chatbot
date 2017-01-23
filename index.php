<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome to Chatbot!</title>
</head>
<body>

<!-- <?php
 	if ($_GET ['name'] == NULL):
?>

<form>
	<label for="name">Name</label>
	<input type="text" name="name" id="name">
	<input type="submit" value="Send!">
</form> -->

<!-- <?php

else:

$name = $_GET ['name'];
$half_name_lenght = (int) (mb_strlen($name) / 2);
$remaining_chars = mb_strlen($name) - $half_name_lenght;
$name_end = mb_substr($name, $half_name_lenght, $remaining_chars);
$name_beginning = mb_substr($name, 0, $half_name_lenght);
$botname = $name_end . $name_beginning;

?> -->
<!-- 
<h1><?= $botname ?></h1>

<?php 
endif;
if ($_GET ['search'] == NULL):
?>

<form>
	<label for="search">Fråga</label>
	<input type="text" name="search" id="search">
	<input type="submit" value="Fråga!">
	<input type="hidden" name="name" value="<?= $name ?>">
</form> -->

<!-- 
<?php  
else:
$lander = [
["country" => "Sverige", "capital" => "Stockholm"],
["country" => "Norge", "capital" => "Oslo"],
["country" => "Danmark", "capital" => "Köpenhamn"],
["country" => "Finland", "capital" => "Helsingfors"]
];

$search = $_GET ['search'];
for ($i = 0; $i < count($lander); $i++) {
  if (in_array($search, $lander[$i])) {
    echo $lander[$i]["capital"] . " är " . $lander[$i]["country"] . "s huvudstad." . "\n";
  }
}

?>
 
<?php endif ?>

-->
<?php
if ($_GET['name'] == NULL):
?>


<form>
	<label for="name">Name</label>
	<input type="text" name="name" id="name">
	<input type="submit" value="Send!">
</form>

<?php
elseif ($_GET['reply'] == NULL): 
	$name = $_GET['name'];
	$half_name_length = (int) (mb_strlen($name) / 2);
	$remaining_chars = mb_strlen($name) - $half_name_length;
	$name_end = mb_substr($name, $half_name_length, $remaining_chars);
	$name_beginning = mb_substr($name, 0, $half_name_length);
	$botname = $name_end . $name_beginning;
?>

<p><strong><?= $botname ?>:</strong> Hej <?= $name ?></p>
<form>
	<input type="text" name="reply">
	<input type="hidden" name="name" value="<?= $name ?>">
	<input type="hidden" name="botname" value="<?= $botname ?>">
	<input type="submit" value="reply">
</form>
<?php
else:
	$name = $_GET['name'];
	$botname = $_GET['botname'];
	$reply = $_GET['reply'];
?>
<p><strong><?= $botname ?>:</strong> Hej <?= $name ?></p>
<p><strong><?= $name ?>:</strong> <?= $reply ?></p>

<?php
$array = ["Fint väder?", "Hur mår du"];
$botreply = $array[random_int(0, count($array) - 1)];
?>

<p><strong><?= $botname ?>:</strong> <?= $botreply ?></p>

<?php endif ?>


</body>
</html>
