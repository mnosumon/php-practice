<?php 
        $stringWth_s = 'Amar Sonar Bangle';
        // $explodes = explode(' ',$stringWth_s);
        // $strJoin = join("_", $explodes);
        $perlacStr = str_replace(' ','_',$stringWth_s);
        echo $perlacStr;
        // echo $strJoin;
    
        echo "<br>";
    
        // Create a PHP program to check if a string contains a specific substring.
    
        $string = "Amar sonar bangla ami tomay vlao";  // Original string
        $substring = "ami s";  // Substring to check for
        // Check if the substring exists in the string
        if (strpos($string, $substring) !== false) {
            echo "this is striong";
        }else{
            echo "its not string";
        }
        
        echo "<br>";
?>