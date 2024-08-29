<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Ajedrez</title>
    <style>
        table {
            border: 5px solid brown ;
            margin: auto;
        }
        td {
            width: 50px;
            height: 50px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>

<table>
    <?php
    for ($row = 0; $row < 8; $row++) {
        echo "<tr>";
        for ($col = 0; $col < 8; $col++) {
            $colorClass = ($row + $col) % 2 == 0 ? 'white' : 'black';
            echo "<td class='$colorClass'></td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
