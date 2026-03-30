<?php

$email = $_POST['email'];
$senha = $_POST['senha'];
// email = amor07@email.com
// senha = 1812

// verifica email
if ($email != 'amor07@email.com') {
    echo "<script>
            alert('Email incorreto!');
            window.location.href='login.php';
          </script>";
    exit();
}

// verifica senha
if ($senha != '1812') {
    echo "<script>
            alert('Senha incorreta!');
            window.location.href='login.php';
          </script>";
    exit();
}

// se tudo estiver correto

    echo "<script>
            alert('Bem vindo ao seu site Rychard');
            window.location.href='index.php';
          </script>";
    exit();

exit();

?>