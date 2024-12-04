<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        This is PHP Website

        <?php 
        define("PI", 3.15);
        echo "<br>";
        echo "This is PHP";
        $myNum = 20;
        echo "<br>";
        echo ++$myNum;
        echo "<br>";
        echo $myNum++;
        echo "<br>";
        echo $myNum;

        $myVar = (true and true);
        echo "<br>";
        echo var_dump($myVar);
        echo "<br>";
        echo PI;

        $languages = array("PHP", "Java", "C++");
        echo "<br>";
        echo $languages[0];

        foreach($languages as $language){
            echo "<br>";
            echo $language;
        }

        function myFunction(){
            echo "This is a function";
        }
        myFunction();

         ?>
    </div>
</body>
</html>