<?php
function getUsers($param): void
{
    $users = $param->query("SELECT * FROM `users`");
    $list = [];
    while ($user=mysqli_fetch_assoc($users)){
        $list[]=$user;
        http_response_code(200);
        echo json_encode($list);
    }
}
