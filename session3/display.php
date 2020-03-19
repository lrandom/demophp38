<?php
if (isset($_POST['submit'])) {
    var_dump($_POST);
    echo $_POST['username'];
    echo $_POST['dob_date'];
    echo $_POST['dob_month'];
    if ($_POST['gender'] == 1) {
        echo 'Giới tính Nam';
    } else {
        echo 'Giới tính Nữ';
    }
}