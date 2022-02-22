<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles/page_login.css"/>
    <title>Create decks</title>
</head>
<body>
    <header> 
        <nav class="navbar">
            <h1>LOGO</h1>
                <ul>
                    <li><a href="page_login">Sign In</a></li>
                    <li><a href="page_login">Sign Up</a></li>
                    <li><a href="page_signIn">Cartes</a> </li>               
                    <li><a href="../MTG_Project/page_decks.html">Decks</a></li>             
                </ul>
            <h2>SEARCH BAR</h2>
        </nav>
    </header>

    <div class="format">
        <br><br>
        <form>
            Sélectionner la couleur : 
            <select name="color">
                <option value=""W"">Blanc</option>
                <option value="Blanc">Couleur</option>
                <option value="Blanc">Couleur</option>
                <option value="Blanc">Couleur</option>
                <option value="Blanc">Couleur</option>

            </select>
            Nom du deck :<input type="text" name="nbInsertPerQuery" maxlength="25" size="15">
        </br>
        </form>
    </div>

    <nav class="navbar_filtre">
        <input type="text" placeholder="Rechercher" maxlength="25" size="30">
                <ul>
                    <li><img src="../Images/icon_white.png" alt=""width="45" height="48"/></a></li>
                    <li><img src="../Images/icon_red.png" alt=""width="45" height="48"/></a></li>
                    <li><img src="../Images/icon_black.png" alt=""width="45" height="48"/></a></li>              
                    <li><img src="../Images/icon_blue.png" alt=""width="45" height="48"/></a></li>
                    <li><img src="../Images/icon_green.png" alt=""width="45" height="48"/></a></li>  
                </ul>
    </nav>

</body>
</html>