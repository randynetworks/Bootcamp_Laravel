<?
require_once 'Animal.php';

$sheep = new Animal("shaun");

echo $sheep->getName(); // "shaun"
echo "<br>";
echo $sheep->getLegs(); // 2
echo "<br>";
echo $sheep->getCold_Blooded(); // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())