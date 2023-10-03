<!--
Dibuje el tablero de un ajedrez con bucles y utilizando tablas.
-->
<!DOCTYPE html>
<html>
<head>
    <style>
        .chessboard {
            border-collapse: collapse;
        }

        .chessboard td {
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 20px;
        }

        .white {
            background-color: #ffffff;
        }

        .black {
            background-color: #000000;
        }
    </style>
</head>
<body>
<table class="chessboard">
    <?php
    for ($row = 1; $row <= 8; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 8; $col++) {
            $class = ($row + $col) % 2 == 0 ? 'white' : 'black';
            echo "<td class='$class'></td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
