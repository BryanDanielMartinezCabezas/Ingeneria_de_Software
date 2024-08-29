<?php
$arreglo = [2, 3, 45, 32, 2, 1, 63, 21, 52, 242, 22, 1];
$n = count($arreglo);

for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($arreglo[$j] > $arreglo[$j + 1]) {
            $temp = $arreglo[$j];
            $arreglo[$j] = $arreglo[$j + 1];
            $arreglo[$j + 1] = $temp;
        }
    }
}
echo "Arreglo ordenado: ";
foreach ($arreglo as $valor) {
    echo $valor . " ";
}
?>