<?php
session_start();
if (isset($_SESSION['school'])) {
    echo 'NIIT';
    unset($_SESSION['school']);
}