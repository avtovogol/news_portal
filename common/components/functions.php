<?php
/**
 * Created by PhpStorm.
 * User: Георгий
 * Date: 20.06.2019
 * Time: 13:56
 */
function debug($arr){
    echo '<pre>' . print_r($arr, true) . '</pre>';
}

function dateru($str) {
    $result = "";
    $iter = 0;
    while ($iter < mb_strlen($str)) {

        switch (mb_substr($str,$iter,1)) {
            case 'д': {
                $dayN = date("N");
                $day = "";
                switch ($dayN) {
                    case 1:$day = "Понедельник";break;
                    case 2:$day = "Вторник";break;
                    case 3:$day = "Среда";break;
                    case 4:$day = "Четверг";break;
                    case 5:$day = "Пятница";break;
                    case 6:$day = "Суббота";break;
                    case 7:$day = "Воскресенье";break;
                }
                $iter++;
                $result .= $day;
                break;
            }
            case 'м': {
                $monthN = date("m");
                $month = "";
                switch($monthN) {
                    case '01':$month = "Января";break;
                    case '02':$month = "Февраля";break;
                    case '03':$month = "Марта";break;
                    case '04':$month = "Апреля";break;
                    case '05':$month = "Мая";break;
                    case '06':$month = "Июня";break;
                    case '07':$month = "Июля";break;
                    case '08':$month = "Августа";break;
                    case '09':$month = "Сентября";break;
                    case '10':$month = "Октября";break;
                    case '11':$month = "Ноября";break;
                    case '12':$month = "Декабря";break;
                }
                $iter++;
                $result .= $month;
                break;

            }

            default: {
                $result .=    date(mb_substr($str,$iter,1));
                $iter++;
                break;
            }
        }

    }

    return $result;
}
function translite($value) {
    $value = strtr($value, array(
        "January" => "Января",
        "February" => "Февраля",
        "March" => "Марта",
        "April" => "Апреля",
        "May" => "Мая",
        "June" => "Июня",
        "July" => "Июля",
        "August" => "Августа",
        "September" => "Сентября",
        "October" => "Октября",
        "November" => "Ноября",
        "December" => "Декабря",

        "Monday" => "Понедельник",
        "Tuesday" => "Вторник",
        "Wednesday" => "Среда",
        "Thursday" => "Четверг",
        "Friday" => "Пятница",
        "Saturday" => "Суббота",
        "Sunday" => "Воскресенье"));

    return $value;
}