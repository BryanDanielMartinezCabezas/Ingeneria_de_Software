<?php
$Numeros = array(); 
for ($i = 1; $i <= 20; $i++) {
    $Numeros[] = $i;
}

$par = array();
$impar = array();

foreach ($Numeros as $numero) {
    if ($numero % 2 == 0) {
        $par[] = $numero;
    } else {
        $impar[] = $numero;
    }
} 
?>

<div class="celda">
    <table border: "1">
        <tr>
            <td style = "margin: 20px;">
                <?php
                foreach ($par as $PAR) {
                    echo "Es par: $PAR <br>";
                }
                ?>
            </td>
            <td>
                <?php
                foreach ($impar as $IMPAR) {
                    echo "Es impar: $IMPAR <br>";
                }
                ?>
            </td>
        </tr>
    </table>
</div>