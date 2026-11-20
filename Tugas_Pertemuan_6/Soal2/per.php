<?php
    echo "<table border='1' cellpadding='5' cellspacing='2'>";
    echo "<tr>";
    echo "<td>bilangan</td>";
    for ($kolom = 1; $kolom <= 10; $kolom++) {
        echo "<td style='background-color: lime;'>" . $kolom . "</td>";
    }
    echo "</tr>";

    for ($baris = 1; $baris <= 10; $baris++) {
        echo "<tr>";
        echo "<td style='background-color: lime;'>" . $baris . "</td>";

        for ($kolom = 1; $kolom <= 10; $kolom++) {
            $hasil = $baris * $kolom;

            if ($hasil % 2 == 0) {
                echo "<td style='background-color: cyan;'>" . $hasil . "</td>";
            } else {
                echo "<td style='background-color: yellow;'>" . $hasil . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
?>