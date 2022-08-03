//contoh kita memiliki file index.php dan kita ingin menyisipkan file header.php dibagian atas index 
include('header.php');
require('header.php');

//jika file diluar foler maka gunakan("../")
include('../header.php');
require('../header.php');

//jika yg ingin di sisipkan berada di folder ygg bereda
include('namafolder/header.php');




