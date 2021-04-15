<?php

function discriminant($a, $b, $c){
    return $b**2-4*$a*$c;
}
echo discriminant(3, -14, -5);