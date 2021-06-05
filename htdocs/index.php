<?php
    session_start();

    if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
    {
        if ($_SESSION['uprawnienia']  == 'Administrator')
        {
            header('Location: Administrator.php');
            exit();
        }
        else
        {
            header('Location: Serwisant.php');
            exit();
        }
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
        <div class="logowanie">
            <form action="login.php" method="post">
                <h2>Logowanie</h2></br>
                <input type="text" name="email" placeholder="E-mail" class="text_field" required></br></br>
                <input type="password" name="haslo" placeholder="Hasło" class="text_field" required></br></br>
                <input type="submit" value="Zaloguj" class="przycisk_zaloguj"/>
            </form>
            <?php
                if(isset($_SESSION['blad']))
                {
                    echo "</br>";
                    echo $_SESSION['blad'];
                }
            ?>
        </div>
        <div class="status">
        <form action="otworz_zlecenie.php" method="post">
            <h2>Status Zlecenia</h2></br></br>
            <input type="text" name="nr_zlecenia" placeholder="Numer zlecenia" class="text_field" required></br></br></br></br>
            <input type="submit" value="Sprawdź status" class="przycisk_status"/>
        </form>
        <?php
            if(isset($_SESSION['blad_zlecenia']))
            {
                echo "</br>";
                echo $_SESSION['blad_zlecenia'];
            }
        ?>
        </div>
    </div>
    <div class="footer">
        Aplikacja do zarządzania serwisem komputerowym opracowana przez Bartosza Żarkowskiego oraz Macieja Kiepurę.
    </div>
</body>
</html>