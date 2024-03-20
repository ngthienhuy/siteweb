<?php
    include "header.php";
    if(isset($_Get['do'])){
        $do=$_GET['act'];
        switch($act){
            case'addcategory':
                include "category/add.php";
                break;
            case'addproduct':
                include "category/add.php";
                break;
            default:
                include "home.php";
                break ;
        }

    }
    include "home.php";
    


?>