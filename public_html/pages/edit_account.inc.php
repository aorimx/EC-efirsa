<?php

  header('X-Robots-Tag: noindex');
  document::$snippets['head_tags']['noindex'] = '<meta name="robots" content="noindex" />';

  customer::require_login();

  document::$snippets['title'][] = language::translate('title_edit_account_EC', 'Editar Cuenta');

  breadcrumbs::add(language::translate('title_account_EC', 'Cuenta'), '');
  breadcrumbs::add(language::translate('title_edit_account_EC', 'Editar Cuenta'));

  $customer = new ctrl_customer(customer::$data['id']);

  if (empty($_POST)) {
    foreach ($customer->data as $key => $value) {
      $_POST[$key] = $value;
    }
  }

  if (!empty($_POST['save'])) {

    if (isset($_POST['email'])) $_POST['email'] = strtolower($_POST['email']);

    if (database::num_rows(database::query("select id from ". DB_TABLE_CUSTOMERS ." where email = '". database::input($_POST['email']) ."' and id != '". $customer->data['id'] ."' limit 1;"))) notices::add('errors', language::translate('error_email_already_registered_EC', 'El correo electronico ya existe en nuestra base de datos'));

    if (empty($_POST['email'])) notices::add('errors', language::translate('error_email_missing_EC', 'Debe ingresar un correo electronico'));

    if (!empty($_POST['new_password'])) {
      if (empty($_POST['confirmed_password'])) notices::add('errors', language::translate('error_missing_confirmed_password_EC', 'Debe confirmar su contraseña'));
      if (isset($_POST['new_password']) && isset($_POST['confirmed_password']) && $_POST['new_password'] != $_POST['confirmed_password']) notices::add('errors', language::translate('error_passwords_missmatch_EC', 'Las contraseñas no coinciden'));
    }

    if (empty($_POST['firstname'])) notices::add('errors', language::translate('error_missing_firstname_EC', 'Debe ingresar un nombre'));
    if (empty($_POST['lastname'])) notices::add('errors', language::translate('error_missing_lastname_EC', 'Debe ingresar un apellido'));
    if (empty($_POST['address1'])) notices::add('errors', language::translate('error_missing_address1_EC', 'Debe ingresar una direccion'));
    if (empty($_POST['city'])) notices::add('errors', language::translate('error_missing_city_EC', 'Debe seleccionar una ciudad'));
    if (empty($_POST['postcode']) && !empty($_POST['country_code']) && reference::country($_POST['country_code'])->postcode_format) notices::add('errors', language::translate('error_missing_postcode_EC', 'Debe ingresar un codigo postal'));
    if (empty($_POST['country_code'])) notices::add('errors', language::translate('error_missing_city_EC', 'Debe seleccionar una ciudad'));
    if (empty($_POST['zone_code']) && !empty($_POST['country_code']) && reference::country($_POST['country_code'])->zones) notices::add('errors', language::translate('error_missing_zone_EC', 'Debe seleccionar una zona'));

    if (!empty($_POST['different_shipping_address'])) {
      if (empty($_POST['shipping_address']['firstname'])) notices::add('errors', language::translate('error_missing_firstname_EC', 'Debe ingresar un nombre'));
      if (empty($_POST['shipping_address']['lastname'])) notices::add('errors', language::translate('error_missing_lastname_EC', 'Debe ingresar un apellido'));
      if (empty($_POST['shipping_address']['address1'])) notices::add('errors', language::translate('error_missing_address1_EC', 'Debe ingresar una direccion'));
      if (empty($_POST['shipping_address']['city'])) notices::add('errors', language::translate('error_missing_city_EC', 'Debe seleccionar una ciudad'));
      if (empty($_POST['shipping_address']['postcode']) && !empty($_POST['shipping_address']['country_code']) && reference::country($_POST['shipping_address']['country_code'])->postcode_format) notices::add('errors', language::translate('error_missing_postcode_EC', 'Debe ingresar un codigo postal'));
      if (empty($_POST['shipping_address']['country_code'])) notices::add('errors', language::translate('error_missing_country_EC', 'Debe seleccionar un pais'));
      if (empty($_POST['shipping_address']['zone_code']) && !empty($_POST['shipping_address']['country_code']) && reference::country($_POST['shipping_address']['country_code'])->zones) notices::add('errors', language::translate('error_missing_zone_EC', 'Debe seleccionar una zona'));
    }

    if (empty(notices::$data['errors'])) {

      if (!isset($_POST['different_shipping_address'])) $_POST['different_shipping_address'] = 0;
      if (!isset($_POST['newsletter'])) $_POST['newsletter'] = 0;

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
        'different_shipping_address',
        'newsletter',
      );

      foreach ($fields as $field) {
        if (isset($_POST[$field])) $customer->data[$field] = $_POST[$field];
      }

      $fields = array(
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
      );
      foreach ($fields as $field) {
        if (isset($_POST['shipping_address'][$field])) $customer->data['shipping_address'][$field] = $_POST['shipping_address'][$field];
      }

      if (empty($_POST['different_shipping_address'])) {
        $fields = array(
          'company',
          'firstname',
          'lastname',
          'address1',
          'address2',
          'postcode',
          'city',
          'country_code',
          'zone_code',
        );
        foreach ($fields as $key) {
          $customer->data['shipping_address'][$key] = $customer->data[$key];
        }
      }

      if (!empty($_POST['new_password'])) $customer->set_password($_POST['new_password']);

      $customer->save();
      customer::$data = $customer->data;

      notices::add('success', language::translate('success_changes_saved_EC', 'CCambios guardados correctamente'));

      header('Location: '. document::ilink());
      exit;
    }
  }

  $_page = new view();
  echo $_page->stitch('pages/edit_account');
