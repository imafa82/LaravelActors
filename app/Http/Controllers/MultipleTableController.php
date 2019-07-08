<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultipleTableController extends Controller
{
    public function index($n = 2){
        foreach(range(1,10) as $x){
            echo "$x * $n =".($x * $n);
            echo '<br>';
        }
        return 'Il numero è '.$n;
    }
}
