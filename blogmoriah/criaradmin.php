<?php
require_once __DIR__ . '/wp-load.php';

$username = 'Adminvtor';
$password = 'Admin123@';
$email    = 'victorssantos572@gmail.com';

if (username_exists($username)) {
    echo 'Usuário já existe.';
    exit;
}

if (email_exists($email)) {
    echo 'E-mail já está em uso.';
    exit;
}

$user_id = wp_create_user($username, $password, $email);

if (is_wp_error($user_id)) {
    echo 'Erro: ' . $user_id->get_error_message();
    exit;
}

$user = new WP_User($user_id);
$user->set_role('administrator');

echo 'Usuário administrador criado com sucesso.';