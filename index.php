<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="imgLogo">
            <a href="index.php"><img class="logo" src="./shopping-logo-svgrepo-com.svg"></a>
        </div>
        <div class="list">
            <ul>
                <li> <a href="index.php">Creaza Cont</a></li>
                <li><a href="adaugaProduse.php">Adauga Produse</a></li>
                <li><a href="prduse.php">Produse</a></li>
                <li><a href="editeazaProduse.php">Editeaza Produse </a></li>
            </ul>
        </div>
    </nav>
    <div class="corp">
        <div class="data">
            <form action="colectareDate.php" method="POST">
                
            <h3>Ingregistreaza-te!</h3><br>
                <label for="numne">Nume:</label><br>
                <input class="input" type="text" name="nume" placeholder="Introduceti numele..."><br>
                <label for="numne">Prenume:</label><br>
                <input type="text" class="input" name="prenume" placeholder="Introduceti prenumele..."><br>
                <label for="numne">Nume de utilizator:</label><br>
                <input type="text" class="input" name="userName" placeholder="Introduceti userName..."><br>
                <label for="numne">Email:</label><br>
                <input type="email" class="input" name="email" placeholder="Introduceti email-ul..."><br>
                <label for="numne">Parola:</label><br>
                <input type="password" class="input" name="parola" placeholder="Introduceti parola..."><br>
                <input type="submit" class="submit" value="Trimite"><br>
            </form>
        </div>

    </div>
</body>

</html>