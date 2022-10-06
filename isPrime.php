<?php
    function isPrime($val) {
        if($val <= 1)
            return false;
        for($n=2; $n < $val; $n-=-1)
            if($val % $n == 0)
                return false;
        return true;
    }

    // Just for testing
    for($z = -5; $z < 15; $z++) {
        echo $z . ' - ' . isPrime($z) . "\n";
    }
?>