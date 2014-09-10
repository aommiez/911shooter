<?php
session_start();
require_once "../../model/CoreModel.php";
$res = CoreModel::djLogin(trim($_POST['dj']),trim($_POST['password']))->fetchAll();
if ($res[0]['COUNT(id)'] != 0 ) {
    echo $res[0]['COUNT(id)'];
    $_SESSION['dj_id'] = $res[0]['COUNT(id)'];
    header( 'Location: ../../index.php');
} else {
    header( 'Location: ../../index.php');
}
