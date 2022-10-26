<?php

/*
Oggi pomeriggio provate ad immaginare quali 
sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali. 
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti. 
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
*/



require_once __DIR__ . '/user.php';
require_once __DIR__ . '/general_product.php';
require_once __DIR__ . '/food.php';
require_once __DIR__ . '/toys.php';
require_once __DIR__ . '/pet_beds.php';

$user = new User("Mario", "Rossi", true, 0002345, 2024); 

echo "<pre>";
var_dump($user);
echo "</pre>";


$petbed = new PetBed(80, "Large", 20, 0001234, "dog");
echo "<pre>";
var_dump($petbed);
echo "</pre>";

$user->AddToCart($petbed);
echo "<pre>";
var_dump($user);
echo "</pre>";

?>