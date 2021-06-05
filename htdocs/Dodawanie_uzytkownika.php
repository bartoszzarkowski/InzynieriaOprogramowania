<?php
    session_start();

    if(!isset($_SESSION['zalogowany']))
    {
        header('Location: index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<title>Serwis komputerowy</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="banner"></div>
        
            <?php
                echo "<p>Witaj administratorze ".$_SESSION['email']."!";
                echo '<p><a href="logout.php">[Wyloguj]</a></p>';
            ?>
            <br><br>
            Dodawanie użytkownika
        </div>
    </div>
    <div class="footer">
        Aplikacja do zarządzania serwisem komputerowym opracowana przez Bartosza Żarkowskiego oraz Macieja Kiepurę.
    </div>
</body>
</html>