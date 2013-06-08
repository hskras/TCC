<?php

session_start();

// Confere se o que foi digitado é igual a imagem
if($_GET['code'] != $_SESSION['security_number'])
{
  echo '0';  // errado
} else {
  echo '1';  // certo
}

?>