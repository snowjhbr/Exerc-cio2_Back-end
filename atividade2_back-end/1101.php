<?php

$m = 1;
$n = 1;
$i = 0;
$soma = 0;
$aux = 0;

fscanf(STDIN, "%d %d", $m, $n);

while ($m > 0 && $n > 0) {
    if ($n < $m) {
        $aux = $m;
        $m = $n;
        $n = $aux;
    }

    for ($i = $m; $i <= $n; $i++) {
        $soma += $i;
        echo "$i ";
    }

    echo "Sum=$soma\n";
    $soma = 0;
    fscanf(STDIN, "%d %d", $m, $n);
}


?>
