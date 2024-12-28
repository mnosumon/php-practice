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


    define("name", "Md Nuruddin Osman");
    function myName() {
        echo name;
    }
    myName()

      


?> 
</body>
</html>