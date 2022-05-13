<style>
    div{
        color: 	#363737;
    }
</style>

<div>

<?php

$weight=$_GET['weight'];
$height=$_GET['height'];

echo "身高:" .$height ."cm" ."<br>";
echo "體重:" .$weight ."kg" ."<br>";

$h2=$height/100; //公分換成公尺

$bmi=($weight/($h2*$h2)); //計算bmi
$bmi2=sprintf('%.1f',$bmi); //只到小數點第1位

echo "BMI=". $bmi2. "<br>"; 

if($height<=50 || $height>235 || $weight>=635 || $weight<=5) {
    echo "數值有誤，請重新輸入";
}

else if($bmi<18.5){
    echo "體重過輕";
}
else if($bmi>=18.5 && $bmi<24){
    echo "正常範圍";
}
else if($bmi>=24 && $bmi<27){
    echo "過重";
}
else if($bmi>=27 && $bmi<30){
    echo "輕度肥胖";
}
else if($bmi>=30 && $bmi<35){
    echo "中度肥胖";
}
else if($bmi>=35){
    echo "重度肥胖";
}
?>

</div>