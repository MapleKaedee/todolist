<?php
 require_once "../View/ViewAddTodoList.php";
 require_once "../Busineslogic/ShowTodoList.php";
 require_once "../Busineslogic/AddTodoList.php";
 
 addTodoList("Budi");
 addTodoList("Yanto");
 
 viewAddTodoList();
 
 showTodoList();