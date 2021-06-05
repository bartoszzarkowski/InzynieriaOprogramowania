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
        <div class="edycja_serwisow">
            <form action="Dodawanie_serwisu.php">
            <input type="submit" value="DODAJ SERWIS" class="przycisk_zaloguj" />
            </form><br>
            <table>
                <tr>
                    <th>Numer serwisu</th><th>Opcje</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><center><img src="images/x.png" width="30px"></center></td>
                    <td><center><img src="images/edit.png" width="30px"></center></td>
                    <td><center><img src="images/list.png" width="30px"></center></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><center><img src="images/x.png" width="30px"></center></td>
                    <td><center><img src="images/edit.png" width="30px"></center></td>
                    <td><center><img src="images/list.png" width="30px"></center></td>
                </tr>
                    <tr>
                    <td>3</td>
                    <td><center><img src="images/x.png" width="30px"></center></td>
                    <td><center><img src="images/edit.png" width="30px"></center></td>
                    <td><center><img src="images/list.png" width="30px"></center></td>
                </tr>
                    <tr>
                    <td>4</td>
                    <td><center><img src="images/x.png" width="30px"></center></td>
                    <td><center><img src="images/edit.png" width="30px"></center></td>
                    <td><center><img src="images/list.png" width="30px"></center></td>
                </tr>
                    <tr>
                    <td>5</td>
                    <td><center><img src="images/x.png" width="30px"></center></td>
                    <td><center><img src="images/edit.png" width="30px"></center></td>
                    <td><center><img src="images/list.png" width="30px"></center></td>
                </tr>
                    <tr>
                    <td>6</td>
                    <td><center><img src="images/x.png" width="30px"></center></td>
                    <td><center><img src="images/edit.png" width="30px"></center></td>
                    <td><center><img src="images/list.png" width="30px"></center></td>
                </tr>
                    <tr>
                    <td>7</td>
                    <td><center><img src="images/x.png" width="30px"></center></td>
                    <td><center><img src="images/edit.png" width="30px"></center></td>
                    <td><center><img src="images/list.png" width="30px"></center></td>
                </tr>
                    <tr>
                    <td>8</td>
                    <td><center><img src="images/x.png" width="30px"></center></td>
                    <td><center><img src="images/edit.png" width="30px"></center></td>
                    <td><center><img src="images/list.png" width="30px"></center></td>
                </tr>
                    <tr>
                    <td>9</td>
                    <td><center><img src="images/x.png" width="30px"></center></td>
                    <td><center><img src="images/edit.png" width="30px"></center></td>
                    <td><center><img src="images/list.png" width="30px"></center></td>
                </tr>
                    <tr>
                    <td>10</td>
                    <td><center><img src="images/x.png" width="30px"></center></td>
                    <td><center><img src="images/edit.png" width="30px"></center></td>
                    <td><center><img src="images/list.png" width="30px"></center></td>
                </tr>
            </table>
        </div>
        <div class="edycja_uzytkownikow">
            <form action="Dodawanie_uzytkownika.php">
                <input type="submit" value="DODAJ UŻYTKOWNIKA" class="przycisk_status" />
            </form><br>
            <table>
                <tr>
                    <th>ID użytkownika</th><th>Opcje</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><center><img src="images/x.png" width="30px"></center></td>
                    <td><center><img src="images/edit.png" width="30px"></center></td>
                    <td><center><img src="images/list.png" width="30px"></center></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><center><img src="images/x.png" width="30px"></center></td>
                    <td><center><img src="images/edit.png" width="30px"></center></td>
                    <td><center><img src="images/list.png" width="30px"></center></td>
                </tr>
                    <tr>
                    <td>3</td>
                    <td><center><img src="images/x.png" width="30px"></center></td>
                    <td><center><img src="images/edit.png" width="30px"></center></td>
                    <td><center><img src="images/list.png" width="30px"></center></td>
                </tr>
                    <tr>
                    <td>4</td>
                    <td><center><img src="images/x.png" width="30px"></center></td>
                    <td><center><img src="images/edit.png" width="30px"></center></td>
                    <td><center><img src="images/list.png" width="30px"></center></td>
                </tr>
                    <tr>
                    <td>5</td>
                    <td><center><img src="images/x.png" width="30px"></center></td>
                    <td><center><img src="images/edit.png" width="30px"></center></td>
                    <td><center><img src="images/list.png" width="30px"></center></td>
                </tr>
                    <tr>
                    <td>6</td>
                    <td><center><img src="images/x.png" width="30px"></center></td>
                    <td><center><img src="images/edit.png" width="30px"></center></td>
                    <td><center><img src="images/list.png" width="30px"></center></td>
                </tr>
                    <tr>
                    <td>7</td>
                    <td><center><img src="images/x.png" width="30px"></center></td>
                    <td><center><img src="images/edit.png" width="30px"></center></td>
                    <td><center><img src="images/list.png" width="30px"></center></td>
                </tr>
                    <tr>
                    <td>8</td>
                    <td><center><img src="images/x.png" width="30px"></center></td>
                    <td><center><img src="images/edit.png" width="30px"></center></td>
                    <td><center><img src="images/list.png" width="30px"></center></td>
                </tr>
                    <tr>
                    <td>9</td>
                    <td><center><img src="images/x.png" width="30px"></center></td>
                    <td><center><img src="images/edit.png" width="30px"></center></td>
                    <td><center><img src="images/list.png" width="30px"></center></td>
                </tr>
                    <tr>
                    <td>10</td>
                    <td><center><img src="images/x.png" width="30px"></center></td>
                    <td><center><img src="images/edit.png" width="30px"></center></td>
                    <td><center><img src="images/list.png" width="30px"></center></td>
                </tr>
            </table>
            
        </div>
    </div>
    <div class="footer">
        Aplikacja do zarządzania serwisem komputerowym opracowana przez Bartosza Żarkowskiego oraz Macieja Kiepurę.
    </div>
</body>
</html>