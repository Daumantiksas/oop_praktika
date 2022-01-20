<?php
use Users\Car;
use Users\Bike;
use Users\MotorBike;
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <?php
        $car = new Car("Audi", "A8L",5);
        $car->setWheels(4);
        $car->setMaxSpeed(195);
        $car->setPrice(30000);
        $car->setWeigth(1950);
        echo $car;
        var_dump($car);


        $MotorBike = new MotorBike("Yamaha", "DragStar", 2, "Chiopper");
        $MotorBike->setWheels(2);
        $MotorBike->setPrice(4000);
        $MotorBike->setWeigth(350);
        echo $MotorBike;
        var_dump($MotorBike);


        $Bike = new Bike("Alpina", "XRP", 1, "YES");
        $Bike->setWeigth(15);
        $Bike->setPrice(200);
        $Bike->setWheels(2);
        echo $Bike;
        var_dump($Bike);


    ?>



    </body>
</html>