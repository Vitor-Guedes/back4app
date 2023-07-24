<?php

$app->get('/', function () {
    return view('index');
});

$app->get('/login', function () {
    return view('login');
});