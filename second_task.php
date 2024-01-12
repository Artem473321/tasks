<?php
$pdo = new PDO('pgsql:host=localhost;dbname=postgres', 'postgres', 'admin');

function query( $pdo, $sql){

    $query = $pdo->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
        print_r($row);
    }
}

$task1 = "SELECT c.* FROM public.click c JOIN public.actions a ON c.id = a.click_id;";
$task2 = "SELECT c.* FROM public.click c LEFT JOIN public.actions a ON c.id = a.click_id WHERE a.click_id IS NULL;";

query($pdo, $task1);
query($pdo, $task2);


