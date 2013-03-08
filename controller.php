<?php
// print_r($_POST);

$actress = $_POST['actress'];
if ($actress == "Megan Fox") {
 echo "Transformers";
}
elseif ($actress == "Jessica Alba") {
 echo "Sin City";
}
elseif ($actress == "Kate Beckinsale") {
 echo "Underworld";
}
elseif ($actress == "Milla Jovovich") {
 echo "Resident Evil";
}
elseif ($actress == "Olivia Wilde") {
 echo "Cowboys & Aliens";
}

?>