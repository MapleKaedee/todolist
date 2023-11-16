<?php
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../Busineslogic/RemoveTodoList.php';
function viewRemoveTodoList()
{
    echo 'Menghapus ToDo' .
        PHP_EOL;

    $pilihan =
        input('Nomor (x untuk batalkan)');

    if ($pilihan ==
        'x') {
        echo 'Batal' .
            PHP_EOL;
    } else {
        $succes =
            removeTodoList($pilihan);

        if ($succes) {
            echo "Sukses Menghapus nomor $pilihan" .
                PHP_EOL;

        } else {
            echo "Gagal Menghapus nomor $pilihan" .
                PHP_EOL;
        }
    }


}