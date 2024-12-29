<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


// What are the different data types in PHP? Provide examples of each.
        // php te besh koyek dhoroner data type royeche. tar moddhe segoloke 2 vage vag kora jete pare. 1) scaler data type 2) compound data type 
        
        // sceller data type:
                // 1) integer  ex=> 2,3,45...
                // 2) float    ex=> 3.5667
                // 3) String   ex=> abc
                // 4) Boolean  ex=> true or false

        // compound data type:
        //         1) Array ex=> 
//                     $fruits = ["Apple", "Mango", "Water melon"];
//                     echo $fruits[0] . "<br>";
        
//                     $person = ["name" => "Shakil", "age" => 30];
//                     echo $person["name"] . "<br>";  
//                 // 2) object ex=> 
//                     class Car {
//                         public $color;
//                         public $brand;
                        
//                         function __construct($color, $brand) {
//                             $this->color = $color;
//                             $this->brand = $brand;
//                         }
//                     }
                
//                     $myCar = new Car("red", "Toyota");
//                     echo $myCar->color . "<br>"; 
//                     echo $myCar->brand . "<br>"; 

//             // Special data type:
//                 // 1) null        
//                 // 2) resource


// // How do you declare a variable in PHP? What are the rules for naming variables?
//         // php te ($)sign diye variable declear korte hoy.
//         // ex=>

//             $name = "Sumon"; 
//             $my_age = 27;   
//             $first_name = "Nuruddin";    
//             $_isActive = true;
//             echo $first_name . "<br/>";

// // What is the difference between an integer and a float in PHP?
//         // integer: only number without decimale
//         // float: number with decimale

// // How can you check the data type of a variable in PHP?  
//         // 1) gettype()
//         // 2) var_dump()
//         // ex=>
        
//             $var1 = 42;
//             $var2 = "Hello";
            
//             var_dump($var1)
//             var_dump($var2)

//             $var4 = "Hello";
//             $var5 = ["Nuruddin", "Shakil", "Mostak"];
            
//             echo gettype($var4) . "<br/>";  
//             echo gettype($var5) . "<br/>";

// // What is a boolean in PHP? Provide an example of its usage.

//     $isLoggedIn = true;
//     $isAdmin = false;

//     if ($isAdmin) {
//         echo "Welcome, you are logged in!"; 
//     } else {
//         echo "Please log in." . "<br/>";  
//     }

// // Write a PHP script to check if a number is even or odd using an if-else statement.
//         $num = 25;  
//         if ($num % 4 == 0) {
//             echo "the number is even";
//         } else {
//             echo "the number is odd";
//         }

//         for ($i=1; $i <= 20 ; $i += 2 ) { 
//             echo $i . "<br>";
//         }
//         for ($i=0; $i <= 20 ; $i += 2 ) { 
//             echo $i . "<br>";
//         }

// // How does a switch statement work in PHP? Provide an example.

//         $category = "alu";
//         switch ($category) {
//             case 'tomato':
//                 echo "tomato is red" . "<br>";
//                 break;
//             case 'alu':
//                 echo "Alur dam beshi" . "<br>";
//                 break;
//             default:
//             echo "Nothing" . "<br>";
//                 break;
//         }

// // Write a for loop in PHP to print numbers from 1 to 10.
//         for ($i=0; $i <= 10 ; $i++ ) { 
//             echo $i . "<br>";
//         }
        
// // What is the difference between a while loop and a do-while loop in PHP?
//         // while loop and do while loop uvoy 1 ti condition er upor base kore 1 ti variable ba 1 ti block ke bar bar run kore. muloto tader moddhe tokhoni diffarence ta dekha jay jokhon condition check korar proyojon hoy

//         $num = 3;

//         while ($num <= 35) {
//             echo "Count is $num" . "</br>";
//             $num+=4; 
//         }

//         $num = 5;
//         do {
//             echo "Count is $num" . "</br>";
//             $num+=4; 
//         }while ($num <= 35)

// // How do you use a foreach loop to iterate over an array in PHP?

//         $Fruits = ["Apple", "Banana", "Cherry", "Date"];

//         foreach ($Fruits as $Fruit) {
//             echo $Fruit . "<br>";  
//         }

  
//         $numbers = [1, 2, 3, 4];

//         foreach ($numbers as &$number) {
//             $number *= 2;  
//         }

//         print_r($numbers) . "<br>";  

// // Explain the difference between the == and === operators in PHP.
//         // ( == ) uvoy pasher value  soman or same kina . 
//         // ( === ) uvoy paher value and data type same kina


// // What is the purpose of the ternary operator in PHP? Provide an example.

//         $score = 75;

//         $result = ($score <= 100 && $score >= 80) ? "A+" : (($score <= 79 && $score >= 70) ? "B" : "C");

//         echo $result . "<br>"; 

// // How do logical operators (&&, ||, !) work in PHP? Give an example.


// $num_1 = 290;
// $num_2 = 40;


//  // Both conditions  true hole true . na hole false,
// if ($num_1 >= 18 && $num_2 <= 500) {
//     echo "You can drive." . "<br>"; 
// } else {
//     echo "You cannot drive." . "<br>";
// }



//  // one conditions  true hole true . na hole false,
// if ($num_1 >= 400 || $num_2 <= 500) {
//     echo "You can drive." . "<br>"; 
// } else {
//     echo "You cannot drive." . "<br>";
// }

//  // one conditions  true hole true . na hole false,
// if ($num_1 != 290) {
//     echo "You can drive." . "<br>"; 
// } else {
//     echo "You cannot drive." . "<br>";
// }


// // What is the difference between the ++$x and $x++ operators?

//         $x = 5;

//         // Pre-increment
//         echo ++$x . "<br>"; 

//         // Post-increment
//         echo $x++ . "<br>";  
//         echo $x . "<br>";

// // How do you concatenate two strings in PHP?

//     $x = "Sumon";
//     $y = "aslam";
//     $z = "abbas";

//     echo $x . $y . "<br>";
//     echo $x . " " . $y . " " . $z . "<br>";


//     $text = "PHP";
//     $text .= " is";
//     $text .= " awesome!";

//     echo $text . "<br>"; 



//     // issue issue issue issue issue issue issue
// // 1   1     1    1   1    1  1   1 1
//     class Car {
//         public $color;
//         public $brand;
        
//         function __construct($color, $brand) {
//             $this->color = $color;
//             $this->brand = $brand;
//         }
//     }

//     $myCar = new Car("red", "Toyota");
//     echo $myCar->color . "<br>"; 
//     echo $myCar->brand . "<br>"; 


//     // 2 2           22       2   2   2   2   2   2   2   2   2   

//     $x = 5;

//     // Pre-increment
//     echo ++$x . "<br>"; 

//     // Post-increment
//     echo $x++ . "<br>";  
//     echo $x . "<br>";

//     // 3   3   3   3   3   3   3   3   3   3   3   3

//     class Car {
//         public $color;
//         public $model;
//         public function __construct($color, $model) {
//           $this->color = $color;
//           $this->model = $model;
//         }
//         public function message() {
//           return "My car is a " . $this->color . " " . $this->model . "!";
//         }
//       }
      
//       $myCar = new Car("red", "Volvo");
//       var_dump($myCar);



    //   php casting
    // public function __construct($color, $model) {
    //     $this->color = $color;
    //     $this->model = $model;
    //   }

    //     class Car {

    //     public function message() {
    //         echo "This is color {$this->color} <br> This is model {$this->model}\n";

    //     }
    //   }
      
    //   $myCar = new Car();
    //   $myCar->color = "blue";
    //   $myCar->model = "Heollo03";
    //   $myCar->message();

    //     class Car {
    //         public function __construct($person, $age) {
    //             $this->name = $person;
    //             $this->age = $age;
    //         }
    //         public function message() {
    //             echo "$this->name <br>";
    //             echo $this->age;

    //         }
    //     }
      
    //   $myCar = new Car("Sumon", 27);

    //   $myCar->message();

    // class Fund{
    //     //  ai vaiable er kaj ki
    //     public $fund;

    //     function __construct($initialFund = 0) {
    //         $this->fund = $initialFund;
    //     }

    //     public function addFund($money) {
    //         $this->fund += $money;
    //     }

    //     public function deductFund($money) {
    //         $this->fund -= $money;
    //     }

    //     public function getFund() {
    //         echo $this->fund;
    //     }
    // }

    // $fundDetails = new Fund(100);
    // $fundDetails->addFund(40);
    // $fundDetails->deductFund(50);
    // $fundDetails->getFund();


    // $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    // print_r($car["model"]);

    // $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

    // foreach ($car as $x => $y) {
    //   echo "$x: $y <br>";
    // }



    // php constants

    // define("name", "Md Nuruddin Osman");
    // function myName() {
    //     echo name;
    // }
    // myName()

    // Array Array 
// Access array items

    $carss = ["apple", "bananas", "orange", "grap"];
    echo $carss[1] . "<br>";
    $carss = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    echo $carss["year"] . "<br>";


  
// Update Array items

    $garis = ["apple", "bananas", "orange", "grap"];
    $garis[3] = 2024;
    print_r($garis) . "<br>";

    echo   "<br>";

    $gari = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    $gari["year"] = 2024;
    print_r($gari) . "<br>";
    echo   "<br>";



    
// Add Array items

    $fruits = array("Apple", "Banana", "Cherry");
    $fruits[] = "Orange";   // post add single item
    

    echo   "<br>";

    $fruit = array("Apple"=>"250tk", "Banana"=>"50tk", "Cherry"=>"700tk");
    $fruit["Orange"]="400tk";    // post add single item
    print_r($fruit) . "<br>";
    echo   "<br>";

    $fruit1 = ["Apple"=>"250tk", "Banana"=>"50tk", "Cherry"=>"700tk"];
    array_push($fruit1, ["orange"=>"400tk", "mango"=>"300tk"]);   // post add multiple item
    print_r($fruit1) . "<br>";
    echo   "<br>";

    $fruits1 = array("Apple", "Banana", "Cherry");
    array_push($fruits1, "mango", "grap"); // post add multiple item
    print_r($fruits1);
    echo   "<br>";

// foreach Array items

    $garis = array("Volvo", "BMW", "Toyota");
    foreach ($garis as &$x) {
        echo $x . "<br>"; 
    }
        
    $garis1 = ["man"=>["Nuruddin", "Sabbvir", "AliKhan"], "woman"=>["Nafisa", "Akila"]];
    foreach ($garis1 as $category=>$inner_array){
        echo "<strong>$category</strong><br>";
        foreach ($inner_array as $item){
            echo $item . "<br>";
        }
    }
    echo   "<br>";

    $cars2 = array("Volvo", "BMW", "Toyota");
        foreach ($cars2 as &$x) {
            $x = "Frado";
        }
        unset($x);
        var_dump($cars2);

        echo   "<br>";

    $cars3 = array("Volvo", "BMW", "Toyota");
        unset($cars3[1]);
        $cars3[1] = "ad";
        print_r($cars3) . "<br>";
       

        echo   "<br>";

// Array sort method : =>
// 1) sort
// 2) rsort
// 3) asort
// 4) ksort
// 5) arsort
// 6) krsort


$name3 = ["sumon", "shakil", "mostak", "sazzad"];
sort($name3);       // 1) sort meaning in a,b,c,d (a-z)...... serial mantinace
print_r($name3);

echo   "<br>";

$name4 = ["sumon", "shakil", "mostak", "sazzad"];
rsort($name4);      // 2) rsort meaning in  z,x,w,v (z-a)...... serial mantinace
print_r($name4);

echo   "<br>";




$name5 = ["sumon"=> "23", "shakil"=> "56", "mostak"=> "67", "sazzad"=>"21"];
asort($name5);
print_r($name5);
foreach($name5 as $item => $value){
    echo "keys= " . $item . ", value= " . $value . ", ";
    echo "<br>";
}   // 3) asort meaning in serial maintaince from minmum to maximum 

echo "<br>";

$name6 = ["sumon"=> "23", "Ashakil"=> "56", "mostak"=> "67", "Dsazzad"=>"21"];
ksort($name6);
print_r($name6);
// foreach($name6 as $item => $value){
//     echo "keys= " . $item . ", value= " . $value . ", ";
//     echo "<br>";
// }   // 4) ksort meaning in serial maintaince from A to z 

echo "<br>";

$name7 = ["sumon"=> "23", "Ashakil"=> "56", "mostak"=> "67", "Dsazzad"=>"21"];
arsort($name7);   // 5) arsort meaning in serial maintaince from Maximum to minimum
print_r($name7);

echo "<br>";

$name8 = ["sumon"=> "23", "Ashakil"=> "56", "mostak"=> "67", "Dsazzad"=>"21"];
krsort($name8);   // 5) krsort meaning in serial maintaince from Z to A
print_r($name8);

echo "<br>";

$age2=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age2,CASE_UPPER));

echo "<br>";


// Write a PHP function to calculate the factorial of a number.

function factorial($number) {
    if ($number < 0) {
        echo "this number is nagetive";
    }elseif($number === 1 || $number === 0){
        echo "1";
    }else{
        $result = 1; 
        for ($i=1; $i <= $number; $i++) { 
            $result = $result * $i;
        }
        echo "This factorial is= " . $result;
    }
}
factorial(3);

echo "<br>";

$helo = "HanP, is as proa, 323#@$, alllj4GG";
$normalString = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $helo));
$reverseString = strrev($normalString);

echo $reverseString;

echo "<br>";



// Create a PHP function to check if a string is a palindrome. 
    // meaning in bangla: 1ti string 1ti palindrome kina seta php function create kore check koro

    function isPalindrome($string) {
        // Remove spaces and non-alphanumeric characters, and convert to lowercase
        $cleanString = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $string));
        
        // Reverse the cleaned string
        $reversedString = strrev($cleanString);
    
        // Check if the original cleaned string is equal to the reversed string
        return $cleanString === $reversedString;
    }
    
    // Example usage:
    $testString = "A man, a plan, a canal, Panama";
    if (isPalindrome($testString)) {
        echo "'$testString' is a palindrome.";
    } else {
        // echo "\"$testString\" is not a palindrome.";
    }
    echo "<br>";

// Create a PHP function to convert a temperature from Celsius to Fahrenheit.

    class Farenheit{
        public $farenheit;
        function farenValue($celciuos)  {
            $this->farenheit = ($celciuos * 9/5) + 32;
        }
    }
    $result = new Farenheit();
    $result->farenValue(100);
    echo $result->farenheit;

    echo "<br>";


    $faren;
    function fareVal($celci) {
        global $faren;
        $faren = ($celci * 9/5) + 32;
    }
    fareVal(100);
    echo "function and varialble test = " . $faren;

    echo "<br>";

// Write a PHP script to create an indexed array of fruits and print each fruit using a foreach loop.

    $fruits3 = array("apple", "banana", "mango");
    foreach ($fruits3 as $value) {
        echo $value . "<br>";
    }

    $fruits4 = array("key1"=>"G048dr", "key2"=>"w11R", "key3"=>"gitoE4", "key4"=>"Nai57",);
    foreach ($fruits4 as $key => $value) {
        echo $key . " = " . $value ."<br>";
    }

    echo "<br>";
// Create an associative array with student names and their marks. Print the name of the student with the highest marks.
    $students = ["Sumon"=>450, "sakil"=>600, "Mostak"=>130, "sazzad"=>350];
    arsort($students);
    foreach ($students as $key => $value) {
        echo $key." = ".$value . "<br>";
    }

    echo "<br>";

// Write a PHP function to find the maximum value in an array

    function maxVal($numbers) {
        $maxvalue = $numbers[0];

        foreach ($numbers as $value) {
            if ($value > $maxvalue) {
                $maxvalue = $value;
            }
        }
        return $maxvalue;
    }
    $numbers = [43,6,78,5,81,21];
    $result = maxVal($numbers);
    echo $result;

    echo "<br>";

// Write a PHP script to merge two arrays and remove duplicate values.
    $margeArr1 = ["Apple", "Banana", "Mango", "Grap", "FineApple"];
    $margeArr2 = ["Lemon", "Gowava", "Dalim", "Orange", "FineApple"];
    $margeArr = array_merge($margeArr1, $margeArr2); //merge array 
    $uniqueArray = array_unique($margeArr); //remove duplicate array object
    print_r($uniqueArray);
    foreach ($uniqueArray as $value) {
        echo $value . "<br>";
    }

    echo "<br>";
// Create a PHP program to sort an associative array by its keys in ascending order.
    $sortArr = ["b"=>"Banana", "m"=>"Mango", "g"=>"Grap", "f"=>"FineApple", "a"=>"Apple"]; 
    ksort($sortArr);
    foreach ($sortArr as $key => $value) {
        echo $key ." = ".$value . "<br>";
    }

    echo "<br>";
// Write a PHP script to count the number of vowels in a string.

    $letters = range('A', 'Z');  // Generate an array of uppercase letters
    $letter = array_map('strtolower', $letters);  // Convert letters to lowercase
    $vowels = ["a", "E", "i", "o", "u"];  // Define vowels
    $vowel = array_map('strtolower', $vowels); 
    foreach ($letter as $value) {
        if (in_array($value, $vowel)) {  // Check if the letter is a vowel
            echo $value . " ";
        }
    }

    echo "<br>";

//Create a PHP program to reverse a string without using the built-in strrev() function.

    function stringRevesrs($strings) {
        $recievedReversed = "";  // Initialize an empty string to store the reversed string
        $length = strlen($strings); // Get the length of the input string
        // Loop through the string in reverse order
        for ($i=$length-1; $i >= 0; $i--) { 
            // $recievedReversed = $recievedReversed . $strings[$i];
            $recievedReversed .= $strings[$i];  // Append each character to the reversed string
        }
        return $recievedReversed;
    }
    $result = stringRevesrs("Amar Sonar Bangle");
    echo $result;


    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

?> 
</body>
</html>