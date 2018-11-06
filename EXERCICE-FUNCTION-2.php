<?php
function produit(...$tab) {
    $res=1;
    foreach ($tab as $i) {
        if ($i!=0) {
        $res*=$i;
        }
    }
    return $res;
}
echo produit(7,1,1,0 ,1);