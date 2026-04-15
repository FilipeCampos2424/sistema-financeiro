<?php
if (!isset($_SESSION["usuario"])) {
    header("Location: /sistema-financeiro/login.php")
}

?>