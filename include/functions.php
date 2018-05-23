<?php
/*Распечатка массива*/

function print_arr($array){
    echo "<pre>" . print_r($array, true) . "</pre>";
}





/*Получение массива меню*/

function get_menu(){
    $query = "SELECT * From menu";
    $res = mysqli_query($connection, $query);
    
    $arr_menu = array();
    while($row = mysqli_fetch_assoc($res)){
        $arr_menu[] = $row;
    }
    return $arr_menu;
}








?>