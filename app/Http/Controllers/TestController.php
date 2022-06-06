<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller{

    public function palindrome(){
        $words = explode(' ', $string);
        $count = 0;
        
        foreach($words as $word) {
            if(strrev($word) === $word) {
                $count++;
            }
        }
        
        echo $count;
    }
}


class TestController extends Controller{
    public function timeElapsed(){
        $date1 = date_create("1732-04-14");
        $date2 = date();

    //difference between two dates
        $diff = date_diff($date1,$date2);

    //count days
       echo 'Days Count:'.$diff;

    //convert days to seconds

    }
}


class TestController extends Controller{
    public function textFile(){
        $response = file_get_contents('https://icanhazdadjoke.com/slack');
        // $text= json_decode($response);
        echo $text->text
        

    }
}
