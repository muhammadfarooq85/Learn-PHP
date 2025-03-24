<?php
    // null
    // null is a special type in PHP.
    
    $isPaid = null;
    echo $isPaid;
    
    echo is_null($isPaid); // true


    $isAbsent = null;
    var_dump($isAbsent);
    unset($isAbsent);
    var_dump(isAbsent); // throwing error or warning
?>