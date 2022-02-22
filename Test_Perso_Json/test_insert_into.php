<?php

$db = new PDO('mysql:host=localhost;dbname=mtg_project', 'root', ''); # Création de l'objet représentant la BDD, on passe les identifiants en paramètres
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); # Définit le mode exception sur cette base de données (utilisation du bloc try/catch)

$pageContent = file_get_contents("https://mtgjson.com/api/v5/VOW.json");
$jsonData = json_decode($pageContent); # Met en forme les données reçues
$keys = array(); # Tableau allant contenir nos codes d'extensions

foreach ($jsonData->data->cards as $card) { # On parcourt tout les codes d'extension récupérés

    $color = $card->colorIdentity->0;
    $bicolor = $card->colorIdentity->1;    
    $nom = $card->name;
    $codeExtension = $card->setCode;
    $type = NULL;
    $rarete = $card->rarity;
    $coutConvertiMana = NULL;
    $coutManaTexte = NULL;
    $forceCreature = NULL;
    $enduranceCreature = NULL;
    $text = NULL;
    $urlImage = $card->identifiers->scryfallId;

    if (isset($card->type) && isset($card->manaCost)){
        $color = $card->colors;
        $type = $card->type;
        $coutManaTexte = $card->manaCost;

        if (isset($card->manaCost) && isset($card->power) && isset($card->toughness) && isset($card->text)){
            $forceCreature = $card->power;
            $enduranceCreature = $card->toughness;
            $text = $card->text;
        }
    }

    $sql = 'INSERT INTO cartes (`color`,`bicolor`,`nom`,`codeExtension`,`type`,`rarete`,`coutConvertiMana`,`coutManaTexte`, `forceCreature`, `enduranceCreature`, `text`,`urlImage`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)';
    $query = $db->prepare($sql);
    $query->execute(array($color, $bicolor, $nom, $codeExtension, $type, $rarete, $coutConvertiMana, $coutManaTexte, $forceCreature, $enduranceCreature, $text, $urlImage));
}
?>