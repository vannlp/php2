<?php

function checkLogin()
{
    if (!isset($_SESSION['user'])) {
        header('location: /home');
        exit();
    }
}
