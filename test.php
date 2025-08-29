<?php
$a = [3, -1, 2, 5, -2];
$p= [0];

for($i=0; $i<count($a); $i++) $p[$i+1]=$p[$i]+$a[$i];

function rangeSum($p, $l, $r) {
    return $p[$r+1]-$p[$l];
}

echo rangeSum($p, 1, 3);