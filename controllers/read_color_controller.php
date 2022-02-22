<?php

include_once "../config.php"; // On appelle le model/class Database.
include_once "../models/class_cartes.php"; // On appelle le model/class Cartes.

$cards = new Cartes; //On instancie une variable qui contient tout les paramètres de l'objet "Cartes".

$cards ->  set_color("W"); // On définit l'attribut color (par exemple ici: la valeur de l'attribut color est "W").

$array_color = $cards -> read_color(); // On crée une variable qui va contenir dans un tableau (fetch) toutes les cartes d'une couleur.







