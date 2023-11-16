<?php

require_once __DIR__ . '/../Model/todolist.php';
require_once __DIR__ . '/../Busineslogic/ShowTodoList.php';
require_once __DIR__ . '/../View/ViewRemoveTodoList.php';
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../View/ViewAddTodoList.php';
function viewShowTodoList()
{
    while (true) {
        showTodoList();
        echo 'Menu' .
            PHP_EOL;
        echo '1. Tambah Todo' .
            PHP_EOL;
        echo '2. Hapus Todo' .
            PHP_EOL;
        echo 'x. Keluar' .
            PHP_EOL;

        $pilihan =
            input('pilih');
        if ($pilihan ==
            '1') {
            viewAddTodoList();
        } else if ($pilihan ==
            '2') {
            viewRemoveTodoList();
        } else if ($pilihan ==
            'x') {
            break;
        } else {
            echo 'Pilihan Tidak Dimengerti' .
                PHP_EOL;
        }

    }
    echo 'Sampai Jumpa' .
        PHP_EOL;
}