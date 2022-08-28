<?php

if(!$_SESSION['nome']) {
    header('Location: ops.php');


    exit();
}

