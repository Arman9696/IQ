

<?php

if (isset($_POST["date"]) && isset($_POST["cash"]) && isset($_POST["select"])&& isset($_POST["radio"])&& isset($_POST["pay"])) { 

    $date = $_POST["date"];
    $summn = $_POST["cash"];
    $summadd = $_POST["pay"];
   $daysn = $number = cal_days_in_month(CAL_GREGORIAN, substr($date,3,2), substr($date,6,4));
    $percent = 0.1;
    $daysy = $_POST["select"];
    if ($_POST["radio"]=='true'){

    $summn = $summn-1+($summn-1+$summadd)*$daysn*($percent/$daysy);
    $summn = number_format(intval($summn), 0, '.', ' ');

    // Формируем массив для JSON ответа
    $result = array(
        'name' =>$summn.' руб',
        'title'=>"Результат:"
    );
    }
    else{

    $summn = $summn-1+($summn-1+0)*$daysn*($percent/$daysy);
    $summn = number_format(intval($summn), 0, '.', ' ');

    // Формируем массив для JSON ответа
    $result = array(
        'name' =>$summn.' руб',
        'title'=>"Результат:"
    );
    }
    // Переводим массив в JSON
    echo json_encode($result); 
}

?>