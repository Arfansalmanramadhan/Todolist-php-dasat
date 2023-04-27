<?php
    //  Menampilkan todo list
function tampilkantodolist(){
    global $todolist;

    echo "Todolist";
    foreach ($todolist as $nomor => $nilai):
        echo "$nomor . $nilai";
    endforeach;
}
?>