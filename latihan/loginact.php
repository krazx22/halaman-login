<?php
$database = file_get_contents("http://localhost/latihan/login.json");
$database = json_decode($database, TRUE);

if (isset($_POST['username']) && isset($_POST['password'])) {
    for ($i = 0; $i < count($database); $i++) {
        if ($database[$i]['username'] == $_POST['username']) {

            if ($database[$i]['password'] == $_POST['password']) {
                $success = TRUE;
                break;
            } else {
                $success = FALSE;
            }
        } else {
            $success = FALSE;
        }
    }
}else{
    echo " Harap Isi Semua Kolom yang tersedia ";
}

if ($success == TRUE) {
    echo " Selamat Datang " . $_POST['username'];
    
} else {
    echo " Username/Password Salah ";
}
