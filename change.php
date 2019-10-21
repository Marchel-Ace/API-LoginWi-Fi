
<?php

require_once 'router_conn.php';
$get = json_decode(stripslashes($_POST['post']));

$name       = $get->name;
$oldpass    = $get->oldpassword;
$newpass    = $get->newpassword;

$get_user_active = $API->comm("/ip/hotspot/active/getall",array(
    "?user" => $name,
));

foreach ($get_user_active as $active_user) {
    $active_name    = $active_user['user'];
    $get_name  = $API->comm("/ip/hotspot/user/getall", array(
        "?name" => $active_name,
    ));
    foreach ($get_name as $get_data ) {
        $id     = $get_data['.id'];
        $password   = $get_data['password'];
        if ($oldpass == $password) {
            $API->comm("/ip/hotspot/user/set",array(
                ".id" => $id,
                "password" => $newpass,
            ));
            echo "Success";
        }else {
            echo "Failed";
        }
    }
}
?>
