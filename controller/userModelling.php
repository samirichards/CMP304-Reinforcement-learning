<?php

    //State explanations
    //State 0 = low_engagement
    //State 1 = high_engagement

    $numberOfStates = 2;
    $numberOfActions = 372;
    $qMatrix = array_fill(0, $numberOfStates, array_fill(0, $numberOfActions, 1.0));
    echo var_dump($qMatrix);
    var_dump(serialize($qMatrix));


?>