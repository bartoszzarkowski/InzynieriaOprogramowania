<?php
    session_start();
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
            <h1>STATUS ZLECENIA</h1>
        </div>
        
        <div class="status_content">
            <table>
                <tr>
                    <th>ID serwisu</th><td><?php echo $_SESSION['ID_serwisu']; ?></td>
                </tr>
                <tr>
                    <th>ID serwisanta</th><td><?php echo $_SESSION['ID_uzytkownika']; ?></td>
                </tr>
                <tr>
                    <th>ID klienta</th><td><?php echo $_SESSION['ID_klienta']; ?></td>
                </tr>
                <tr>
                    <th>Data przyjęcia</th><td><?php echo $_SESSION['Data_przyjecia']; ?></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                    <?php 
                        if($_SESSION['Status'] == 'Do_odebrania') 
                        {
                            echo 'Do odebrania';
                        }
                        else 
                        { 
                            echo $_SESSION['Status'];
                        }
                    ?>
                    </td>
                </tr>
                <tr>
                    <th>Priorytet</th><td><?php echo $_SESSION['Priorytet']; ?></td>
                </tr>
                <tr>
                    <th>Opis</th><td><?php echo $_SESSION['Opis']; ?></td>
                </tr>
                <tr>
                    <th>Szacowana kwota</th><td><?php echo $_SESSION['Szacowana_kwota']; ?></td>
                </tr>
                <tr>
                    <th>Cena usługi</th><td><?php echo $_SESSION['Cena_uslugi']; ?></td>
                </tr>
                <tr>
                    <th>Cena podzespołów</th><td><?php echo $_SESSION['Cena_podzespolow']; ?></td>
                </tr>
                <tr>
                    <th>Cena całkowita</th><td><?php echo $_SESSION['Cena_calkowita']; ?></td>
                </tr>
            </table> 
            
            <form action="index.php">
            <input type="submit" value="Powrót" class="przycisk_status" />
            </form>
            
        </div>
    </div>
    <div class="footer">
        Aplikacja do zarządzania serwisem komputerowym opracowana przez Bartosza Żarkowskiego oraz Macieja Kiepurę.
    </div>
</body>
</html>