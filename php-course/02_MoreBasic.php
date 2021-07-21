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
        <h1>PHP Tutorial</h1>
        
    <?php
        $age = 19;
        if ($age > 18) {
            echo "Adult";
        }else{
            echo "Not an adult";
        }

        $languages = array("Python", "C++", "PHP", "NodeJs");
        // fetch array data with loop
    
        // echo "<br>";
        // echo $languages[0];
        // echo "<br>";
        // echo count($languages);

        $i = 0;
        while($i < count($languages)) {
            echo "<br>";
            echo $languages[$i];
            $i++;
        }

        // for loop using
        for ($i=0; $i < count($languages); $i++) { 
            # code...
            echo "<br>";
            echo $languages[$i];
        }

        echo "<br>";
        // swtich case
        $month = "Jan";
        switch ($month) {
            case 'Jan':
                echo "January";
                break;
            case 'Feb':
                echo "February";
                break;
            case 'Feb':
                echo "February";
                break;
            
            default:
                echo "No condition match";
                break;
        }
        // do while loop
        $j = 0;
        do{
            echo "<br>";
            echo $j;
            $j++;
        }while($j < 10);

        // $a = 0;
        // while($a <= 10){
        //     echo "Hello World $a";
        //     $a++;
        //     echo "<br>";
        // }
        // for each
        foreach ($languages as $lang) {
            echo "<br>";
            echo $lang;
        }

        // function
        function welcome(){
            echo "<br> WELCOME";
        }

        welcome();
        welcome();

        // function as argument passing
        function dsiplayNum($inputNumber){
            echo "<br> You entered ";
            echo $inputNumber;
        }

        dsiplayNum(19);
    ?>
    </div>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            max-width: 80%;
            background-color: gray;
            margin: auto;
        }
    </style>
</body>
</html>