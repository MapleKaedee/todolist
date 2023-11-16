<?php
require_once "../Model/todolist.php";
require_once "../Busineslogic/AddTodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../Busineslogic/ShowTodoList.php";

addTodoList("Budi");
addTodoList("Agus");
addTodoList("Santoso");
addTodoList("Sukiyem");

showTodoList();
viewRemoveTodoList();
showTodoList();
viewRemoveTodoList();
showTodoList();