<?php

//menghitung jumlah karakter dengan strlen()
$kalimat = "Belajar pemrograman di malasngoding.com";
echo strlen($kalimat); 
echo "<br/>";
//menghitung jumlah kata pada string dengan str_word_count()
$kalimat = "Belajar pemrograman di malasngoding";
echo str_word_count($kalimat);
echo "<br/>";
//membalik dtring dengan sttrev()
$kalimat = "Belajar pemrograman di malasngoding";
echo strrev($kalimat);
echo "<br/>";
//memfilter dan menggati string dengan tr_replace()
str_replace("yang ingin di ganti","pengganti","isi string");

$kalimat = "Belajar pemrograman di malasngoding";
echo str_replace("Belajar","Tutorial",$kalimat);

//


?>