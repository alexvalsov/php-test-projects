<?php

class SiteController
{
  public static function actionIndex()
  {
    $userId = User::checkLogged();

    $user = User::getUserById($userId);

    require_once(ROOT . '/views/site/index.php');
    require_once(ROOT . '/views/layouts/header.php');
    return true;
  }
}