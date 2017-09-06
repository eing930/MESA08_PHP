<table border="1" width="100%" backgroup="red">
    <tr>
            <?php
                for($k= 0;$k< 2;$k++) {
                    echo '<tr>';
                    for ($j = 2; $j <= 5; $j++) {
                        $newj = $j + 4 * $k;

                        if(($j + $k) % 2 == 0) {
                            echo '<td bgcolor = "#ffff00">';
                        }else{
                            echo '<td bgcolor = "d2961e">';
                            }
                        for ($i = 1; $i <= 9; $i++) {
                            $r = $newj * $i;
                            echo "{$newj} x {$i} = {$r}<br>";
                        }
                            echo '</td>';
                }
                    echo '</tr>';
                }
                ?>
</table>