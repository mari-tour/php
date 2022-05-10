<?php
$age=25;
function estllMajeure($age) { 
    if ($age>=18)
    return true;
    elseif ($age<18)
    return false;
}

echo estllMajeure ($age);
    
?> 