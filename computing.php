<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: '微軟正黑體';
            /* color: #363737; */
            color: whitesmoke;
        }
        div {
            font-size: 20px;
            text-align: center;
            padding: 50px 0;
        }
        .error {
            color: yellow;
            display: flex;
            justify-content: center;
            font-size: 30px;
            font-weight: bold;
        }
    </style>

</head>

<body>

    <div>

        <?php

        if (!empty($_GET['weight']) && !empty($_GET['height'])) {

            $weight = $_GET['weight'];
            $height = $_GET['height'];

            $h2 = $height / 100; //公分換成公尺

            $bmi = ($weight / ($h2 * $h2)); //計算bmi
            $bmi2 = sprintf('%.1f', $bmi); //只到小數點第1位

            if ($height <= 100 || $height > 235 || $weight >= 635 || $weight <= 20) {
                echo "<span class='error'>數值有誤，請重新輸入</span>";
            } else if ($bmi < 18.5) {
                echo "身高:" . $height . "cm" . "<br>";
                echo "體重:" . $weight . "kg" . "<br>";
                echo "BMI=" . $bmi2 . "<br>";
                echo "體重過輕";
            } else if ($bmi >= 18.5 && $bmi < 24) {
                echo "身高:" . $height . "cm" . "<br>";
                echo "體重:" . $weight . "kg" . "<br>";
                echo "BMI=" . $bmi2 . "<br>";
                echo "健康體重";
            } else if ($bmi >= 24 && $bmi < 27) {
                echo "身高:" . $height . "cm" . "<br>";
                echo "體重:" . $weight . "kg" . "<br>";
                echo "BMI=" . $bmi2 . "<br>";
                echo "過重";
            } else if ($bmi >= 27 && $bmi < 30) {
                echo "身高:" . $height . "cm" . "<br>";
                echo "體重:" . $weight . "kg" . "<br>";
                echo "BMI=" . $bmi2 . "<br>";
                echo "輕度肥胖";
            } else if ($bmi >= 30 && $bmi < 35) {
                echo "身高:" . $height . "cm" . "<br>";
                echo "體重:" . $weight . "kg" . "<br>";
                echo "BMI=" . $bmi2 . "<br>";
                echo "中度肥胖";
            } else if ($bmi >= 35) {
                echo "身高:" . $height . "cm" . "<br>";
                echo "體重:" . $weight . "kg" . "<br>";
                echo "BMI=" . $bmi2 . "<br>";
                echo "重度肥胖";
            }

        } else {
            echo "<span class='error'>請輸入身高體重</span>";
        }

        ?>

    </div>

</body>

</html>