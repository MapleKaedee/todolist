<?php
require_once __DIR__ . "/Model/todolist.php";
require_once __DIR__ . "/Busineslogic/ShowTodoList.php";
require_once __DIR__ . '/Busineslogic/AddTodoList.php';
require_once __DIR__ . '/Busineslogic/RemoveTodoList.php';
require_once __DIR__ . "/View/ViewShow.php";
require_once __DIR__ . "/View/ViewAddTodoList.php";
require_once __DIR__ . "/View/ViewRemoveTodoList.php";
require_once __DIR__ . "/Helper/Input.php";

echo "Aplikasi Todolist" . PHP_EOL;

viewShowTodoList();