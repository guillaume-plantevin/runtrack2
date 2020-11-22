<?php 
    function bubblesort(&$array, $bool) {
        $size = count($array);
        
        if ($bool) {
            for ($i = 0; $i < $size; ++$i) {
                for ($j = $i + 1; $j < $size; ++$j) {
                    if ($array[$i] > $array[$j]) {
                        $temp = $array[$i];
                        $array[$i] = $array[$j];
                        $array[$j] = $temp;
                    }
                }
            }
        }
        else {
            for ($i = 0; $i < $size; ++$i) {
                for ($j = $i + 1; $j < $size; ++$j) {
                    if ($array[$i] < $array[$j]) {
                        $temp = $array[$i];
                        $array[$i] = $array[$j];
                        $array[$j] = $temp;
                    }
                }
            }
        }
        return $array;
    }
    
    $tab = ['abc', 'ghi', 'def'];
    $croissant = false;

    echo '<pre>';
    print_r(bubblesort($tab, $croissant));
    echo '</pre>';
?>
