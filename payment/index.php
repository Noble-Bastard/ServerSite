<?php
$nick = $_POST['nickname'];
$donate = $_POST['group'];

if($nick == null){
    header('Location: /donate.html');
} elseif($donate == null){
    header('Location: /donate.html');
}