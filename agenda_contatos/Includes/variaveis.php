<?php
if (isset($_POST['acao'])) {
    $acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['acao'])) {
    $acao = filter_input(INPUT_GET, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $acao = "";
}

if (isset($_POST['id'])) {
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
} else if (isset($_GET['id'])) {
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $id = 0;
}

if (isset($_POST['name'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
} else if (isset($_GET['name'])) {
    $name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $name = "";
}

if (isset($_POST['nickname'])) {
    $nickname = filter_input(INPUT_POST, 'nickname', FILTER_SANITIZE_SPECIAL_CHARS);
} else if (isset($_GET['nickname'])) {
    $nickname = filter_input(INPUT_GET, 'nickname', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $nickname = "";
}


if (isset($_POST['number'])) {
    $number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_SPECIAL_CHARS);
} else if (isset($_GET['number'])) {
    $number = filter_input(INPUT_GET, 'number', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $number = "";
}


if (isset($_POST['email'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
} else if (isset($_GET['email'])) {
    $email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $email = "";
}


if (isset($_POST['adress'])) {
    $adress = filter_input(INPUT_POST, 'adress', FILTER_SANITIZE_SPECIAL_CHARS);
} else if (isset($_GET['adress'])) {
    $adress = filter_input(INPUT_GET, 'adress', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $adress = "";
}




