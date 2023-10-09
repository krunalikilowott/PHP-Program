<!DOCTYPE html>
<html>
<head>
    <title>Bubble Sort</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h1 {
            text-align: center;
        }
        form {
            text-align: center;
        }
        input[type="text"] {
            width: 300px;
            padding: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            padding: 5px 15px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .output {
            margin: 20px auto; /* Center the output div */
            width: 80%; /* Set a width for the output */
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Bubble Sort</h1>
    <form method="post" action="">
        Enter values separated by spaces: <input type="text" name="inputArray">
        <br><br>
        <input type="submit" name="submit" value="Sort">
    </form>

    <?php
    function bubbleSort($arr) {
        $n = count($arr);
        $swapped = true;

        while ($swapped) {
            $swapped = false;
            for ($i = 0; $i < $n - 1; $i++) {
                if ($arr[$i] > $arr[$i + 1]) {
                    // Swap arr[$i] and arr[$i + 1]
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$i + 1];
                    $arr[$i + 1] = $temp;
                    $swapped = true;
                }
            }
        }

        return $arr;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["inputArray"])) {
        $input = $_POST["inputArray"];
        $myArray = explode(" ", $input);

        // Convert the array elements to integers
        $myArray = array_map('intval', $myArray);

        $sortedArray = bubbleSort($myArray);

        echo "<div class='output'>";
        echo "<h2>Original Array:</h2>";
        echo implode(" ", $myArray);

        echo "<h2>Sorted Array:</h2>";
        echo implode(" ", $sortedArray);
        echo "</div>";
    }
    ?>
</body>
</html>







