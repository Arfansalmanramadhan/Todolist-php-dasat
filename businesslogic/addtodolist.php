<?php
// menambahkan todolist

function menambahkantodolist(string $todo){
    global $todolist;

    $nomer = sizeof($todolist) + 1;

    $todolist[$nomer] = $todo;
}
?>