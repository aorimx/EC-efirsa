<?php

  header('X-Robots-Tag: noindex');
  document::$snippets['head_tags']['noindex'] = '<meta name="robots" content="noindex" />';
  document::$snippets['title'][] = language::translate('title_create_account_EC', 'Crear Cuenta');

  breadcrumbs::add(language::translate('title_create_account_EC', 'Crear Cuenta'));

  if (!$_POST) {
    foreach (customer::$data as $key => $value) {
      $_POST[$key] = $value;
    }
    $_POST['newsletter'] = '1';
  }

  if (!empty(customer::$data['id'])) {
    notices::add('errors', language::translate('error_already_logged_in_EC', 'YYa iniciaste sesion'));
  }

  if (!empty($_POST['create_account'])) {

    if (settings::get('captcha_enabled')) {
      $captcha = functions::captcha_get('create_account');
      if (empty($captcha) || $captcha != $_POST['captcha']) notices::add('errors', language::translate('error_invalid_captcha_EC', 'Captcha incorrecta'));
    }

    if (isset($_POST['email'])) $_POST['email'] = strtolower($_POST['email']);

    if (!empty($_POST['email']) && database::num_rows(database::query("select id from ". DB_TABLE_CUSTOMERS ." where email = '". database::input($_POST['email']) ."' limit 1;"))) notices::add('errors', language::translate('error_email_already_registered_EC', 'La dirección de correo electrónico ya existe en nuestra base de datos de clientes. Inicie sesión o seleccione una dirección de correo electrónico diferente.'));

    if (empty($_POST['email'])) notices::add('errors', language::translate('error_email_missing_EC', 'Debe ingresar su correo electronico'));

    if (empty($_POST['password'])) notices::add('errors', language::translate('error_missing_password_EC', 'Debe ingresar su contraseña'));
    if (empty($_POST['confirmed_password'])) notices::add('errors', language::translate('error_missing_confirmed_password_EC', 'Debe confirmar su contraseña'));
    if (isset($_POST['password']) && isset($_POST['confirmed_password']) && $_POST['password'] != $_POST['confirmed_password']) notices::add('errors', language::translate('error_passwords_missmatch_EC', 'La contraseña no coincide'));

    if (empty($_POST['firstname'])) notices::add('errors', language::translate('error_missing_firstname_EC', 'Debe ingresar su nombre'));
    if (empty($_POST['lastname'])) notices::add('errors', language::translate('error_missing_lastname_EC', 'Debe ingresar su apellido'));
    //if (empty($_POST['address1'])) notices::add('errors', language::translate('error_missing_address1', 'You must enter an address.'));
    //if (empty($_POST['city'])) notices::add('errors', language::translate('error_missing_city', 'You must enter a city.'));
    //if (empty($_POST['postcode']) && !empty($_POST['country_code']) && reference::country($_POST['country_code'])->postcode_format) notices::add('errors', language::translate('error_missing_postcode', 'You must enter a postcode.'));
    if (empty($_POST['country_code'])) notices::add('errors', language::translate('error_missing_country_EC', 'Debe ingresar su pais'));
    if (empty($_POST['zone_code']) && !empty($_POST['country_code']) && reference::country($_POST['country_code'])->zones) notices::add('errors', language::translate('error_missing_zone_EC', 'Debe seleccionar una zona'));

    $mod_customer = new mod_customer();
    $result = $mod_customer->validate($_POST);
    if (!empty($result['error'])) notices::add('errors', $result['error']);

    if (empty(notices::$data['errors'])) {

      $customer = new ctrl_customer();

      $customer->data['status'] = 1;

      $fields = array(
        'email',
        'tax_id',
        'company',
        'firstname',
        'lastname',
        'address1',
        'address2',
        'postcode',
        'city',
        'country_code',
        'zone_code',
        'phone',
        'newsletter',
      );

      foreach ($fields as $field) {
        if (isset($_POST[$field])) $customer->data[$field] = $_POST[$field];
      }

      $customer->save();

      $customer->set_password($_POST['password']);

      $email_message = language::translate('email_account_created_EC', "Bienvenido %customer_firstname %customer_lastname a %store_name!\r\n\r\nSu cuenta ha sido creada. Ahora puede hacer compras en nuestra tienda en línea y realizar un seguimiento de la historia.\r\n\r\nInicie sesion usando su correo electronico %customer_email y contraseña %customer_password.\r\n\r\n%store_name\r\n\r\n%store_link");

      $translations = array(
        '%store_name' => settings::get('store_name'),
        '%store_link' => document::ilink(''),
        '%customer_firstname' => $_POST['firstname'],
        '%customer_lastname' => $_POST['lastname'],
        '%customer_email' => $_POST['email'],
        '%customer_password' => $_POST['password']
      );

      foreach ($translations as $needle => $replace) {
        $email_message = str_replace($needle, $replace, $email_message);
      }

      functions::email_send(
        null,
        $_POST['email'],
        language::translate('email_subject_customer_account_created_EC', 'Cuenta de cliente creada'),
        $email_message
      );

      notices::add('success', language::translate('success_your_customer_account_has_been_created_EC', 'Su cuenta de cliente ha sido creada'));

    // Login user
      customer::load($customer->data['id']);

      header('Location: '. document::ilink(''));
      exit;
    }
  }

  $_page = new view();
  echo $_page->stitch('pages/create_account');
