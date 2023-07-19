<?php
require_once __DIR__ . '/../_utils/functions.php';
session_start();
$_SESSION['todos'] = $_SESSION['todos'] ?? [
        'make coffee',
        'improve TYPO3',
        'clean room',
    ];

if (($_POST['action'] ?? null) === 'flush') {
    $_SESSION['todos'] = [
        'improve TYPO3',
    ];
    $GLOBALS['todos'] = $_SESSION['todos'];
    if (!str_contains($_SERVER['HTTP_ACCEPT'], 'text/vnd.turbo-stream.html')) {
        header('Location: /t3see-2022-01/topwire/demo/streams.php');
    } else {
        header('Content-Type: text/vnd.turbo-stream.html; charset=utf-8');
        echo renderPartial('todo/flush-items-stream');
        die;
    }
}

if (!empty($_POST['new-todo']) && is_string($_POST['new-todo'])) {
    $_SESSION['todos'][] = $_POST['new-todo'];
    if (!str_contains($_SERVER['HTTP_ACCEPT'], 'text/vnd.turbo-stream.html')) {
        header('Location: /t3see-2022-01/topwire/demo/streams.php');
    } else {
        header('Content-Type: text/vnd.turbo-stream.html; charset=utf-8');
        echo renderPartial('todo/new-item-stream', ['item' => $_POST['new-todo']]);
        die;
    }
}
$GLOBALS['todos'] = $_SESSION['todos'];
