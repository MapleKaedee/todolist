<?php

require_once '../Model/todoList.php';
require_once '../Busineslogic/AddTodoList.php';

addTodoList('Budi');
addTodoList('Rahayu');
addTodoList('Santoso');

var_dump($todoList);