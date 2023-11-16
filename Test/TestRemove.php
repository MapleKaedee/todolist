<?php

require_once "../Model/todolist.php";
require_once "../Busineslogic/AddTodoList.php";
require_once "../Busineslogic/ShowTodoList.php";
require_once  "../Busineslogic/RemoveTodoList.php";

addTodoList("Budi");
addTodoList('Agus');
addTodoList('Siti');
addTodoList('Bambang');
addTodoList('Budii');

showTodoList();
removeTodoList(3);
showTodoList();