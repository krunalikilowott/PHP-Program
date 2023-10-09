<!DOCTYPE html>
<html>
<head>
    <title>Bubble Sort Result</title>
</head>
<body>
    <h2>Bubble Sort Result</h2>

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
            // If no two elements were swapped in the inner loop, the array is already sorted
            if (!$swapped) {
                break;
            }
        }
        return $arr;
    }

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the user input array and split it into integers
        $input = $_POST["inputArray"];
        $inputArray = explode(" ", $input);
        $inputArray = array_map('intval', $inputArray);

        // Sort the array using bubble sort
        $sortedArray = bubbleSort($inputArray);

        // Display the sorted array
        echo "<p>Original Array: " . implode(", ", $inputArray) . "</p>";
        echo "<p>Sorted Array: " . implode(", ", $sortedArray) . "</p>";
    }
    ?>
</body>
</html>

