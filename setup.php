<?php

if (isset($_GET['rows']) && isset($_GET['cols'])) {
    $rows = intval($_GET['rows']);
    $cols = intval($_GET['cols']);

    $positions = [];
    if($rows*$cols <= 7){
        for($i = 1; $i <= $rows*$cols; $i++){
            $positions[] = $i;
        }
        echo json_encode(["positions" => $positions, "rows" => $rows, "cols" => $cols]);
    }
    else if ($rows > 0 && $cols > 0) {
        $i = 0;
        $positions = [];
        while ($i < 7) {
            do{
                $index = rand(1, $rows*$cols);
            }while(in_array($index, $positions));
            $positions[] = $index;
            $i += 1;
            
        }
        echo json_encode(["positions" => $positions, "rows" => $rows, "cols" => $cols]);
    }
}


?>
