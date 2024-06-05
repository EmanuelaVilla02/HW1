<?php
$currentdate = date('H');

if ($currentdate > 19 ||$currentdate > 00 && $currentdate < 07)
    $result = 'https://dragon.best/api/clock.png?time=&flip=on&sleepy=on';
else
    $result = 'https://dragon.best/api/clock.png';

echo json_encode(array(
                "ok"=>true,
                "Link" => $result
                )
);
?>