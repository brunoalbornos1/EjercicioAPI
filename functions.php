<?php
function cambiar_moneda($moneda){
    $monedaUru = $moneda*38;
    $IVA = $monedaUru*0.22;
    $total = $monedaUru - $IVA;

    echo $total;
}
