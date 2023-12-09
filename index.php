<?php include "header.php";

if(isset($_GET['menu'])){
    if($_GET['menu']==1){
        include "beranda.php";
    }else if ($_GET['menu']==2){
        include "belanja.php";
    }else if ($_GET['menu']==3){
        include "tentang.php";
    }else if ($_GET['menu']==4){
        include "hubungi.php";
    }else if ($_GET['menu']==5){
        include "beli.php";
    }else {
        echo "Pilih Menu";
    }
}else{
    include "beranda.php";
}
include "footer.php";
?>