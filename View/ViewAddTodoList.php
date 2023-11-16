<?php

require_once __DIR__ . '/../Model/todolist.php';
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../Busineslogic/AddTodoList.php';
function viewAddTodoList()
{
    echo 'Menambah Todo' .
        PHP_EOL;

    $todo =
        input('Todo (x untuk batal)');

    if ($todo ==
        'x') {
        echo 'Batal' .
            PHP_EOL;
    } else {
        addTodoList($todo);
    }
}