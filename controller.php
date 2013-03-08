<?php
// print_r($_POST);

$actress = $_POST['actress'];
$data = array();
switch ($actress) {
  case "Megan Fox": $data = array("Transformers", "Transformers - Die Rache", "Jennifer's Body"); break;
  case "Jessica Alba": $data = array("Sin City", "Machete", "Die Killerhand", "The Eye"); break;
  case "Kate Beckinsale": $data = array("Underworld", "Aviator"); break;
  case "Milla Jovovich": $data = array("Resident Evil", "Das f&uuml;nfte Element", "Ultraviolet"); break;
  case "Olivia Wilde": $data = array("Cowboys & Aliens", "In Time"); break;
}
echo json_encode(array("movies" => $data));

?>