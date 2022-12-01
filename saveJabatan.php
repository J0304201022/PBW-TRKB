<?php
include 'connect.php';

$jabatan = $_POST['jabatan'];


$sql = 'INSERT INTO jabatan VALUES (NULL,"'.$jabatan.'")';

$result = mysqli_query($conn, $sql);

if ($result) {
    header('Location: index.php');
} else {
    echo 'Inserted Failed.';
}
