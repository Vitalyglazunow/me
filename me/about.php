<?php
$name = '�������';
$age = 34;
$email = 'vitalyglazunow@gmail.com';
$city = '������';
$about = '����� �� ������ ������ ���������� �� ���������������� �� php';
?>
<!DOCTYPE>
<html lang="ru">
    <head>
        <title><?= $name . ' � ' . $about ?></title>
        <meta charset="utf-8">
        <style>
            body {
                font-family: sans-serif;  
            }
        </style>
    </head>
    <body>
        <h1>�������� ������������ <?= $name ?></h1>
        <dl>
            <dt>���</dt>
            <dd><?= $name ?></dd>
            <dt>�������</dt>
            <dd><?= $age ?></dd>
            <dt>����� ����������� �����</dt>
            <dd><a href="mailto:<?= $email ?>"><?= $email ?></a></dd>
            <dt>�����</dt>
            <dd><?= $city ?></dd>
            <dt>� ����</dt>
            <dd><?= $about ?></dd>
        </dl>
    </body>
</html>