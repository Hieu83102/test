<!-- <?php
        $adu = 'Chào các bạn <br/>';
        $adu1 = 'chao mung den voi php';
        $adu2 = ' toi la Hieu';
        $total = $adu . $adu1 . $adu2;
        echo $total;
        echo '<br/>';
        $test = "Con c nó {$adu} {$adu1} blablabla.... {$adu2}";
        echo $test;
        $int = 1;
        printf("<br/>He looo $int");
        ?>

<table border="1" width="100%">
    <?php

    for ($i = 1; $i <= 10; $i++) {
        if ($i == 1 || $i == 6) {
            echo '<tr>';
        }

        echo '<td>';
        for ($j = 1; $j <= 10; $j++) {
            echo $i . ' x ' . $j . ' = ' . $i * $j . '<br>';
        }
        echo '</td>';

        if ($i == 5 || $i == 10) {
            echo '</tr>';
        }
    }
    ?>    
</table> -->



<!-- <table width="100%" border="1" cellpadding="0" cellspacing="0">
    <?php
    $giaodien = null;
    for ($row = 'a'; $row <= 'h'; $row++) {
        $giaodien .= '<td style="text-align: center;">' . $row . '</td>';
    }
    echo '<tr><td style="width: 30px;"></td>:' . $giaodien . '</tr>';

    $index = 8;
    for ($row = 1; $row <= 8; $row++) {
        echo '<tr>';
        echo '<td width="30px">' . $index . '</td>';

        for ($col = 1; $col <= 8; $col++) {
            $total = $row + $col;

            if ($total % 2 == 0) {
                echo '<td style="background: #fff; width: 12.5%; height: 75px;"></td>';
            } else {
                echo '<td style="background: #000; width: 12.5%; height: 75px;"></td>';
            }
        }
        echo '</tr>';
        $index--;
    }
    ?>
</table> -->

 <?php
$select = '<select name="category">';

for ($i = 2000; $i <= 2022; $i++) {
    $select .= '<option value="' . $i . '">Năm ' . $i . '</option>';
}

$select .= '</select>';
echo $select; 
