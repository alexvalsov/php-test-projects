<?php

class User
{
  public static function register($name, $email, $password)
  {
    // Соединение с БД
    $db = Db::getConnection();

    // Текст запроса к БД
    $sql = 'INSERT INTO user (name, email, password) '
      . 'VALUES (:name, :email, :password)';

    // Получение и возврат результатов. Используется подготовленный запрос
    $result = $db->prepare($sql);
    $result->bindParam(':name', $name, PDO::PARAM_STR);
    $result->bindParam(':email', $email, PDO::PARAM_STR);
    $result->bindParam(':password', $password, PDO::PARAM_STR);
    return $result->execute();
  }

  // Проверять имя: не меньше, чем 2 символа
  public static function checkName($name)
  {
    if (strlen($name) >= 2) {
      return true;
    }
    return false;
  }

  // Проверять пароль: не меньше, чем 6 символа
  public static function checkPassword($password)
  {
    if (strlen($password) >= 6) {
      return true;
    }
    return false;
  }

  // Проверка email
  public static function checkEmail($email)
  {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return true;
    }
    return false;
  }

  public static function checkEmailExists($email)
  {
    // Соединение с БД
    $db = Db::getConnection();

    // Текст запроса к БД
    $sql = 'SELECT * FROM user WHERE email = :email';

    // Получение результатов. Используется подготовленный запрос
    $result = $db->prepare($sql);
    $result->bindParam(':email', $email, PDO::PARAM_STR);
    $result->execute();

    if ($result->fetchColumn())
      return true;
    return false;
  }

  public static function checkUserData($email, $password)
  {
    // Соединение с БД
    $db = Db::getConnection();

    // Текст запроса к БД
    $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';

    // Получение результатов. Используется подготовленный запрос
    $result = $db->prepare($sql);
    $result->bindParam(':email', $email, PDO::PARAM_STR);
    $result->bindParam(':password', $password, PDO::PARAM_INT);
    $result->execute();

    $user = $result->fetch();
    if ($user) {
      return $user['id'];
    }

    return false;
  }

  public static function auth($userId)
  {

    $_SESSION['user'] = $userId;
  }

  public static function checkLogged()
  {

    // Если ссесия есть, вернем идентификатор пользователя
    if (isset($_SESSION['user'])) {
      return $_SESSION['user'];
    }
    header("Location: /user/login/");
  }

  public static function isGuest()
  {

    if (isset($_SESSION['user'])) {
      return false;
    }
    return true;
  }

  public static function getUserById($id)
  {

    if ($id) {
      $db = Db::getConnection();

      // Текст запроса к БД
      $sql = 'SELECT * FROM user WHERE id = :id';

      // Получение результатов. Используется подготовленный запрос
      $result = $db->prepare($sql);
      $result->bindParam(':id', $id, PDO::PARAM_INT);

      $result->setFetchMode(PDO::FETCH_ASSOC);
      $result->execute();

      return $result->fetch();
    }

  }

  public static function edit($id, $name, $password)
  {
    $db = Db::getConnection();

    // Текст запроса к БД
    $sql = 'UPDATE user SET name = :name, password = :password WHERE id = :id ';

    // Получение результатов. Используется подготовленный запрос
    $result = $db->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->bindParam(':name', $name, PDO::PARAM_STR);
    $result->bindParam(':password', $password, PDO::PARAM_STR);
    return $result->execute();
  }
}