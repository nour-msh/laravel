<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller{

    public function palindrome(){
        $array=["level","madam","apple"];
        $count = 0;
        
        foreach($array as $word) {
            if(strrev($word) === $word) {
                $count++;
            }
        }
        
        echo $count;
    }



    public function timeElapsed(){
        $date1 = date_create("1732-04-14");
        echo "Start date: ".$date1->format("Y-m-d")."<br>";
        $date2 = date_create("2022-06-06");
        echo "End date: ".$date2->format("Y-m-d")."<br>";
        $diff = date_diff($date1,$date2);
        echo $diff->format("%R%a days ");
        echo strtotime('105973 days', 0);
    }




    public function textFile(){
        $response = file_get_contents('https://icanhazdadjoke.com/slack');
        $data= json_decode($response,true);
        // echo $response->attachments;
        echo $data["attachments"][0]["text"];
    }
    
}
