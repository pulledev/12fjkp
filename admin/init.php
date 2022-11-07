<?php
spl_autoload_register(
    function ($className) {
    error_log('autoloader:' . $className);
    include __DIR__ . '/class/' . $className . '.php';
});

