<?php

  header('X-Robots-Tag: noindex');
  document::$snippets['head_tags']['noindex'] = '<meta name="robots" content="noindex" />';
  document::$snippets['title'][] = language::translate('title_reset_password_EC', 'Reestablecer contraseña');

  breadcrumbs::add(language::translate('title_reset_password_EC', 'Reestablecer contraseña'));

  if (!empty($_POST['reset_password'])) {

    try {

      if (empty($_REQUEST['email'])) throw new Exception(language::translate('error_must_provide_email_address_EC', 'Debes proporcionar una dirección de correo electrónico'));

      $customer_query = database::query(
        "select * from ". DB_TABLE_CUSTOMERS ."
        where email = '". database::input($_REQUEST['email']) ."'
        limit 1;"
      );
      $customer = database::fetch($customer_query);

      if (empty($customer)) throw new Exception(language::translate('error_email_not_in_database_EC', 'La dirección de correo electrónico no existe en nuestra base de datos.'));

      if (empty($customer['status'])) throw new Exception(language::translate('error_account_inactive_EC', 'Su cuenta está inactiva, contacte a soporte al cliente'));

      if (!empty($_REQUEST['reset_token'])) {

        if (!$reset_token = json_decode($customer['password_reset_token'], true)) throw new Exception(language::translate('error_invalid_reset_token_EC', 'Token de reinicio inválido'));

        if ($_REQUEST['reset_token'] != $reset_token['token']) throw new Exception(language::translate('error_incorrect_reset_token_EC', 'Token de reinicio incorrecto'));

        if (strtotime($reset_token['expires']) < time()) throw new Exception(language::translate('error_reset_token_expired_EC', 'Token de reinicio ha expirado'));

        if (empty($_POST['new_password'])) throw new Exception(language::translate('error_missing_password_EC', 'Debes ingresar una contraseña.'));

        if (empty($_POST['confirmed_password'])) throw new Exception(language::translate('error_missing_confirmed_password_EC', 'Debes confirmar tu contraseña'));

        if ($_POST['new_password'] != $_POST['confirmed_password']) {
          throw new Exception(language::translate('error_passwords_did_not_match_EC', 'Las contraseñas no coinciden'));
        }
      }

    // Process

      if (empty($_REQUEST['reset_token'])) {

        $reset_token = array(
          'token' => functions::password_generate(8),
          'expires' => date('Y-m-d H:i:s', strtotime('+30 minutes')),
        );

        database::query(
          "update ". DB_TABLE_CUSTOMERS ."
          set password_reset_token = '". database::input(json_encode($reset_token)) ."'
          where id = '". (int)$customer['id'] ."'
          limit 1;"
        );

        $message = language::translate('email_body_reset_password_EC', "Recientemente solicitó restablecer su contraseña para %store_name. Si no solicitó restablecer la contraseña, ignore este correo electrónico. Visite el siguiente enlace para restablecer su contraseña:\r\n\r\n%link\r\n\r\nReset Token: %token");
        $message = strtr($message, array(
          '%email' => $customer['email'],
          '%store_name' => settings::get('store_name'),
          '%token' => $reset_token['token'],
          '%link' => document::ilink('reset_password', array('email' => $customer['email'], 'reset_token' => $reset_token['token'])),
        ));

        functions::email_send(
          null,
          $customer['email'],
          language::translate('title_reset_password_EC', 'Reestablecer contraseña'),
          $message
        );

        notices::add('success', language::translate('success_reset_password_email_sent_EC', 'Se ha enviado un correo electrónico con instrucciones a su dirección de correo electrónico.'));
        header('Location: '. document::ilink('reset_password', array('email' => $_REQUEST['email'], 'reset_token' => '')));
        exit;

      } else {

        database::query(
          "update ". DB_TABLE_CUSTOMERS ."
          set password_reset_token = ''
          where id = '". (int)$customer['id'] ."'
          limit 1;"
        );

        $customer = new ctrl_customer($customer['id']);
        $customer->set_password($_POST['new_password']);

        notices::add('success', language::translate('success_new_password_set_EC', 'Su nueva contraseña ha sido establecida. Ahora puede iniciar sesión.'));
        header('Location: '. document::ilink('login', array('email' => $customer->data['email'])));
        exit;

      }

    } catch (Exception $e) {
      notices::add('errors', $e->getMessage());
    }
  }


  $_page = new view();
  echo $_page->stitch('pages/reset_password');
