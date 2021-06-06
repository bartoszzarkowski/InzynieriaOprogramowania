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
                 <div class="title">
            <h1>SERWISANT</h1>
        </div>
        <div class="info">
            Użytkownik: 
            <?php
                echo $_SESSION['Imie']." ".$_SESSION['Nazwisko'];
            ?>
            <form action="logout.php">
                <input type="submit" value="WYLOGUJ" class="przycisk_zaloguj" />
            </form>
        </div>
        </div>
        </center>
        
    </div>
    </div>
    <div class="footer">
        Aplikacja do zarządzania serwisem komputerowym opracowana przez Bartosza Żarkowskiego oraz Macieja Kiepurę.
    </div>
</body>
</html>