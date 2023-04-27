<?php
// menghapu todolist

function menghapuustodolist(int $nomer): bool{
    global $todolist;

    if($nomer > sizeof($todolist)){
        return false;
    }
    
    for($a = $nomer; $a < sizeof($todolist); $a++ ){
        $todolist[$a]=  $todolist[$a + 1];
    }

    unset($todolist[sizeof($todolist)]);

    return true;
}
?>