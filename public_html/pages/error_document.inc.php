<?php
  if (!isset($_GET['code'])) $_GET['code'] = 404;

  switch ((int)$_GET['code']) {
    case 403:
      notices::add('errors', language::translate('error_403_forbidden_EC', 'El acceso a este archivo esta prohibido'));
      break;
    case 404:
      notices::add('errors', language::translate('error_404_not_found_EC', 'No se encontro el archivo'));
      break;
    case 410:
      notices::add('errors', language::translate('error_410_gone_EC', 'TEl archivo no se encuentra disponible'));
      break;
    default:
      notices::add('errors', language::translate('error_400_bad_request_EC', 'El servidor no puede o no procesará la solicitud debido a un error del cliente'));
      break;
  }

  if (preg_match('#\.(jpg|png|gif)$#', route::$request)) {
    echo file_get_contents(WS_DIR_IMAGES . 'no_image.png');
    exit;
  }

  http_response_code($_GET['code']);
  header('Refresh: 0; url='. document::ilink(''));
  exit;
