<?php
//
function fib($i)
{

        $num0 = 0;
        $num1 = 1;
        $i = 0;

        echo"{$num0}\n";
        echo"{$num1}\n";


        while($i < 10000){

            $i = $num0 + $num1;
            $num0 = $num1;
            $num1 = $i;

            echo"{$i}\n";


        }

            //echo"\n";
}

//
fib($i);
