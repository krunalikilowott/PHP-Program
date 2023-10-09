<!DOCTYPE html>
<html>
<head>
    <title>Bubble Sort Random Array</title>
</head>
<body>
    <h2>Bubble Sort Random Array</h2>
    
    <?php

    function bubbleSort($arr) {
        $n = count($arr);
        for ($i = 0; $i < $n - 1; $i++) {
            $swapped = false;
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                    $swapped = true;
                }
            }
           
            if (!$swapped) {
                break;
            }
        }
        return $arr;
    }

    function generateRandomArray($size, $min, $max) {
        $arr = [];
        for ($i = 0; $i < $size; $i++) {
            $arr[] = rand($min, $max);
        }
        return $arr;
    }

    $size = 10; 
    $minValue = 1; 
    $maxValue = 100;

    $randomArray = generateRandomArray($size, $minValue, $maxValue);

    echo "<p>Original Array: " . implode(", ", $randomArray) . "</p>";

    $sortedArray = bubbleSort($randomArray);

    echo "<p>Sorted Array: " . implode(", ", $sortedArray) . "</p>";
    ?>
</body>
</html>
