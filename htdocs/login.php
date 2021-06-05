<?php

    session_start();

    if ((!isset($_POST['email'])) || (!isset($_POST['haslo'])))
    {
        header('Location: index.php');
        exit();
    }

	require_once "connect.php";

    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($polaczenie->connect_errno!=0)
    {
        echo "Błąd: ".$polaczenie->connect_errno;
    }
    else
    {
        $email = $_POST['email'];
        $haslo = $_POST['haslo'];
        
        $email = htmlentities($email, ENT_QUOTES, "UTF-8");
        $haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
            
        if($rezultat = @$polaczenie->query(
        sprintf("SELECT * FROM uzytkownicy WHERE E_mail='$email' AND Haslo='$haslo'", mysqli_real_escape_string($polaczenie, $email), mysqli_real_escape_string($polaczenie, $haslo))))
        {
            $ilu_userow = $rezultat->num_rows;
            if($ilu_userow>0) 
            {
                $_SESSION['zalogowany'] = true;
                
                $wiersz = $rezultat->fetch_assoc();
                $_SESSION['id'] = $wiersz['id'];
                $_SESSION['email'] = $wiersz['E_mail'];
                $uprawnienia = $wiersz['Uprawnienia'];
                
                unset($_SESSION['blad']);
                
                $rezultat->free_result();
                
                if ($uprawnienia == 'Administrator')
                {
                    $_SESSION['uprawnienia'] = 'Administrator';
                    header('Location: Administrator.php');
                }
                else
                {
                    $_SESSION['uprawnienia'] = 'Serwisant';
                    header('Location: Serwisant.php');
                }
                echo $email;
            }
            else
            {
                $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
                
                header('Location: index.php');
            }
        }
        
        $polaczenie->close();
    }
?>