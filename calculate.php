<?php
    $location = array(
        'charbagh'=>'0',
        'indira nagar'=>'10',
        'bbd'=>'30',
        'barabanki'=>'60',
        'faizabad'=>'100',
        'basti'=>'150',
        'gorakhpur'=>'210'
    );



    $pickup = $_POST['pickup'];
    $drop = $_POST['drop'];
    $cab = $_POST['cab'];
    $lugg = $_POST['lugg'];

    // $arr = array($pickup, $drop, $cab, $lugg);
    
    // echo json_encode($arr);
    $distance = abs($location[$pickup]-$location[$drop]);
    // echo $distance;
    $price = 0;
    if ($cab == 'cedmicro') {
        $price = 50;
        if ($distance <= 10) {
            $price += $distance * 13.50;
        } else if (($distance > 10) && ($distance <= 60)) {
            $price += 10 * 13.50;
            $price += ($distance - 10) * 12.00;
        } else if (($distance > 60) && ($distance <= 160)) {
            $price += 10 * 13.50;
            $price += 50 * 12.00;
            $price += ($distance - 60) * 10.20;
        } else {
            $price += 10 * 13.50;
            $price += 50 * 12.00;
            $price += 100 * 10.20;
            $price += ($distance - 160) * 8.50;
        }
    } else if ($cab == "cedmini") {
        $price = 150;
        if ($distance <= 10) {
            $price += $distance * 14.50;
        } else if (($distance > 10) && ($distance <=60)) {
            $price += 10 * 14.50;
            $price += ($distance - 10) * 13.00;
        } else if (($distance > 60) && ($distance <= 160)) {
            $price += 10 * 14.50;
            $price += 50 * 13.00;
            $price += ($distance - 60) * 11.20;
        } else {
            $price += 10 * 14.50;
            $price += 50 * 13.00;
            $price += 100 * 11.20;
            $price += ($distance - 160) * 9.50; 
        }

        if ($lugg) {
            if ($lugg <= 10) {
                $price += 50;
            } else if (($lugg > 10) && ($lugg <= 20)) {
                $price += 100;
            } else {
                $price += 200;
            }
        }
    } else if ($cab == "cedroyal") {
        $price = 200;
        if ($distance <= 10) {
            $price += $distance * 15.50;
        } else if (($distance > 10) && ($distance <=60)) {
            $price += 10 * 15.50;
            $price += ($distance - 10) * 14.00;
        } else if (($distance > 60) && ($distance <= 160)) {
            $price += 10 * 15.50;
            $price += 50 * 14.00;
            $price += ($distance - 60) * 12.20;
        } else {
            $price += 10 * 15.50;
            $price += 50 * 14.00;
            $price += 100 * 12.20;
            $price += ($distance - 160) * 10.50; 
        }

        if ($lugg <= 10 && $lugg != 0) {
            $price += 50;
        } else if (($lugg > 10) && ($lugg <= 20)) {
            $price += 100;
        } else if($lugg > 20){
            $price += 200;
        } else {
            $price += 0;
        }
    } else if ($cab == "cedsuv") {
        $price = 250;
        if ($distance <= 10) {
            $price += $distance * 16.50;
        } else if (($distance > 10) && ($distance <=60)) {
            $price += 10 * 16.50;
            $price += ($distance - 10) * 15.00;
        } else if (($distance > 60) && ($distance <= 160)) {
            $price += 10 * 16.50;
            $price += 50 * 15.00;
            $price += ($distance - 60) * 13.20;
        } else {
            $price += 10 * 16.50;
            $price += 50 * 15.00;
            $price += 100 * 13.20;
            $price += ($distance - 160) * 11.50; 
        }

        if ($lugg) {
            if ($lugg <= 10) {
                $price += 50*2;
            } else if (($lugg > 10) && ($lugg <= 20)) {
                $price += 100*2;
            } else {
                $price += 200*2;
            }
        }
    }
  // echo $price;
    print_r(json_encode(array("price"=>$price, "distance"=>$distance)));
?> 
