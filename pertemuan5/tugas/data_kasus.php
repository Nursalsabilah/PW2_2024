<?php

require_once 'class_kasus.php';

//object
$bukufiksi = new BukuFiksi('Bawang Merah dan Bawang Putih', 'MB. Rahimsyah AR', 'Fiksi');
$bukunonfiksi = new BukuNonFiksi('Sejarah Indonesia', 'Tim Penyusun', 'Sejarah');

//echo Buku Fiksi
echo 'Info Buku Fiksi:<br>';
$bukufiksi->getInfoBukuFiksi();
echo '<br>';

// echo Buku Non Fiksi
echo 'Info Buku Non Fiksi:<br>';
$bukunonfiksi->getInfoBukuNonFiksi();
echo'<br>';