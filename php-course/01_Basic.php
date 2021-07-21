<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        <h2>Hello World</h2>
        <?php
            echo "Hello World"
        ?>
         <?php
             $firstName = "Hello";
             echo $firstName;

             $num1 = 20;
             $num2 = 30;
             echo "The sum of $num1 and $num2 is : ";
             echo "<br>";
             echo  $num1 + $num2;

             echo "<br>";
             echo "The substraction of $num1 and $num2 is : ";
             echo  $num1 - $num2;

             echo "<br>";
             echo "<h2>The multiplication of $num1 and $num2 is : </h2>";
             echo  $num1 * $num2;

             echo "<br>";
             echo "The multiplication of $num1 and $num2 is : ";
             echo  $num1 / $num2;

             echo "<br>";
             $oldVar = "Old Data";
             $newVar = $oldVar;
             echo $newVar;

             echo "<br>";
             $number = 10;
             echo "<br>";
             echo "<h2>Increment Data : $number</h2>";
             $number += 2;
             echo "<br>";
             echo "<h2>Increment Data is $number";

             echo "<br>";
             echo "<h2>Pre Increment and Post increment</h2>";
             $number = 4;
             echo "<br>";
             echo $number++;
             echo "<br>";
             echo "$number";

             echo "<br>";
             echo $number--;
             echo "<br>";
             echo "$number";

             echo "<br>";
             echo var_dump(1 == 4);
             echo "<br>";
             echo var_dump(1 >= 3);
             echo "<br>";
             echo var_dump(1 <= 4);

             $firstNumber = 10;
             $seconNumber = 20;
            echo "<br>";
             if ($firstNumber > $seconNumber) {
                 # code...
                 echo "Greater";
             }else{
                 echo"Lesser";
             }
            // Data types
            // 1. String
            // 2. Integer
            // 3. Float
            // 4. Boolean
            // 5. array
            // 6. object

            echo "<br>";
            echo "Test all the variables : ";
            echo "<br>";
            $String = "This is boy";
            $Integer = 19;
            $Float = 12.11;
            $Boolean = true;

            echo var_dump($String);
            echo var_dump($Integer);
            echo var_dump($Float);
            echo var_dump($Boolean);
            echo "<br>";
            
        ?>

    </div>
</body>
</html>