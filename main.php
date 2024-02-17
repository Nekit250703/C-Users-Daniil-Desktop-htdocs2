<?php 
// API для ToDO


if ($_GET['token'] != 'nw5ZRUzIfa6mFbrHxXTcd9CMXh2edsaKaB56')  {
    die("Хули ты тут забыл?");
}
header("Content-Type: application/json; charset=UTF-8");

require('../config.php'); 

$data = $DATABASE->query("SELECT task.id, 
task.name as 'nameTask', 
task_status.name as 'nameStatus', task.text
            FROM task, task_status
            WHERE task.status = task_status.id AND `user_active` = 1 AND task.status != 4 ;")->fetchAll();

echo json_encode($data);

?>