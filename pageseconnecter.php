<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="pagedaccueil.css">
</head>
<body>
<header>
    <h1 class="h1">HUHU</h1>
        <nav>
            <ul>
                <li><a href="pagedaccueil.php">Accueil</a></li>
                <li><a href="pageproduits.php">Produits</a></li>
                <li><a href="pageseconnecter.php">Se connecter</a></li>
                
            </ul>
        </nav>
    </header>
    <h1>Se connecter</h1>  

    <form method="POST" action="login.php" class="login">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
