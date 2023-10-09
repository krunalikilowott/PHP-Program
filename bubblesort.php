<!DOCTYPE html>
<html>
<head>
    <title>Bubble Sort Form</title>
</head>
<body>
    <h2>Enter an array of integers separated by spaces:</h2>
    <form action="bubblesort.php" method="post">
        <input type="text" name="inputArray" placeholder="e.g., 5 2 8 1 9">
        <input type="submit" value="Sort">
    </form>

<?php

// Function to perform the bubble sort algorithm
function bubbleSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        $swapped = false;
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // Swap $arr[$j] and $arr[$j + 1]
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
                $swapped = true;
            }
        }
        // If no two elements were swapped in inner loop, the array is already sorted
        if (!$swapped) {
            break;
        }
    }
    return $arr;
}

// Function to get an array of integers from the user
function getArrayFromUser() {
    $input = readline("Enter the elements of the array separated by spaces: ");
    $elements = explode(" ", $input);
    return array_map('intval', $elements);
}

// Get an array of integers from the user
$arrayToSort = getArrayFromUser();

echo "Original Array: " . implode(", ", $arrayToSort) . "\n";

$sortedArray = bubbleSort($arrayToSort);
echo "Sorted Array: " . implode(", ", $sortedArray) . "\n";

?>
</body>
</html>


