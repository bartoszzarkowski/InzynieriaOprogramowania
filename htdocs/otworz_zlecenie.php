<?php
    session_start();

    require_once "connect.php";

    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($polaczenie->connect_errno!=0)
    {
        echo "Błąd: ".$polaczenie->connect_errno;
    }
    else
    {
        $nr_zlecenia = $_POST['nr_zlecenia'];
        
        $nr_zlecenia = htmlentities($nr_zlecenia, ENT_QUOTES, "UTF-8");
        
        if($rezultat = @$polaczenie->query(
        sprintf("SELECT * FROM serwisy WHERE ID_serwisu='$nr_zlecenia'", mysqli_real_escape_string($polaczenie, $nr_zlecenia))))
        {
            $istnieje = $rezultat->num_rows;

            if($istnieje>0)
            {
                $wiersz = $rezultat->fetch_assoc();
                $_SESSION['ID_serwisu'] = $wiersz['ID_serwisu'];
                $_SESSION['ID_uzytkownika'] = $wiersz['ID_uzytkownika'];
                $_SESSION['ID_klienta'] = $wiersz['ID_klienta'];
                $_SESSION['Data_przyjecia'] = $wiersz['Data_przyjecia'];
                $_SESSION['Status'] = $wiersz['Status'];
                $_SESSION['Priorytet'] = $wiersz['Priorytet'];
                $_SESSION['Opis'] = $wiersz['Opis'];
                $_SESSION['Szacowana_kwota'] = $wiersz['Szacowana_kwota'];
                $_SESSION['Cena_uslugi'] = $wiersz['Cena_uslugi'];
                $_SESSION['Cena_podzespolow'] = $wiersz['Cena_podzespolow'];
                $_SESSION['Cena_calkowita'] = $wiersz['Cena_calkowita'];
                
                $rezultat->free_result();
                
                header('Location: Status.php');
            }
            else
            {
                $_SESSION['blad_zlecenia'] = '<span style="color:red">Nieprawidłowy numer zlecenia!</span>';

                header('Location: index.php');
            }
            $polaczenie->close();
        }
    }
?>