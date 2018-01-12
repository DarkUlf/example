<?php
require_once 'private/functions.php';
define('DOMAIN', $_SERVER['SERVER_NAME']);

$_CONFIG = array(
    'title' => 'Студия Click',
    'phoneFormat' => '8 ($1) $2-$3-$4',
    'receivers' => array(
        'mr.maltsev-nik@yandex.ru'
    ),
);

if (!empty($_POST)) {
    $data = $_POST;

    if (validateRequired($data['name'], $data['phone'], $data['email']) && validatePhone($data['phone']) && validateEmail($data['email'])) {
        $lines = array(
            $data['action'],
            '',
            '=== Данные ===',
            'Имя: ' . trim($data['name']),
            'Телефон: ' . formatPhone($data['phone']),
            'E-mail: ' . formatPhone($data['email']),
        );
        if (sendMail('noreply@' . DOMAIN, config('receivers'), 'Заявка с сайта ' . DOMAIN, $lines)) {
            response('Письмо успешно отправлено');
        }
    }

    response('Ошибка', true);
}

require_once 'private/view.php';