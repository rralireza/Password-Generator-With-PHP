<?php


    if(isset($_POST['btn']))
    {
        $x="qwertyuiopasdfghjklzxcvbnm[];',./?!@#$%^&*-=_915263478";
        $l=strlen($x);

        $ch1=$x[rand(1,$l)];
        $ch2=$x[rand(1,$l)];
        $ch3=$x[rand(1,$l)];
        $ch4=$x[rand(1,$l)];
        $ch5=$x[rand(1,$l)];
        $ch6=$x[rand(1,$l)];
        $ch7=$x[rand(1,$l)];
        $ch8=$x[rand(1,$l)];
        $ch9=$x[rand(1,$l)];
        $ch10=$x[rand(1,$l)];
        $ch11=$x[rand(1,$l)];
        $ch12=$x[rand(1,$l)];

        $gen=$ch1.$ch2.$ch3.$ch4.$ch5.$ch6.$ch7.$ch8.$ch9.$ch10.$ch11.$ch12;
    }


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Password Generator</title>
        <meta charset="UTF-8">
    </head>
    <body style="background-color: #20c997; align-items: center; text-align: center; margin: 300px;">
        <form method="post">
            <h1>Password Generator</h1>
            <input type="text" name="txt" value="<?php
                if(isset($_POST['btn']))
                {
                    if(isset($gen))
                    {
                        echo $gen;
                    }
                }
            ?>">
            <button type="submit" name="btn">Generate</button>
        </form>
    </body>
</html>