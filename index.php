<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Variable functions challenge</title>
</head>
<body>
    
    <?php

        $name = "  Bob  ";

        $age = "thirty five";

        $job = "plumber";

        $carMake = " Toyota";

        $carColour = "RED";

        $happy = true;

        $time = "this many";

        echo trim($name);

        $age = str_replace("thirty five", 35, $age);

        echo $age;

        echo strtolower($carColour);

        $time = strlen($time);

        echo $time;

        $car = $carColour.$carMake;

        echo $car;

        $retire = 65-$age;

        echo $retire.'<br>';

        $sentance = $name.' is a '.$job.'. He drives a '.$car.' and works '.$time.' hours a day. He is '.$age.' years old and is '.$retire.' years old from retirement. He is '.$happy.' with his life.';

        echo $sentance;
        
    ?>

</body>
</html>