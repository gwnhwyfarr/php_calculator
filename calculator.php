<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$r = $_POST['r'];

    function MyCalculator($n1,$n2, $r) 
    {
        switch($r)
        {
        case "Add": 
        
            $compute = $n1 + $n2; 
            break;
        case "Sub":
            $compute = $n1 - $n2;
            break;
        case "Mult":
            $compute = $n1 * $n2; 
            break;
        case "Div":
            $compute = $n1 / $n2; 
            break;
        }
        return $compute; 
    }
echo "$r <br /> 
<br /> 1st Number: $n1 
<br /> 2nd Number: $n2 <br />
<br />";
echo "Result:" .MyCalculator($n1,$n2, $r);
?>
