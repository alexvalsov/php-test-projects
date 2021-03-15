<?php include ROOT . '/views/layouts/header.php'; ?>

  <section class="mt-5">
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h2>Редактирование данных</h2>
            </div>

            <?php if ($result): ?>
              <p class="m-3 alert-success p-2 rounded">Данные отредактированы!</p>
            <?php else: ?>
              <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                  <?php foreach ($errors as $error): ?>
                    <li> - <?php echo $error; ?></li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>

              <div class="card-body">

                <form action="#" method="post">
                  <div class="form-group">

                  </div>
                  <p>Имя:</p>
                  <input class="form-control" type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>

                  <p>Пароль:</p>
                  <input class="form-control" type="password" name="password" placeholder="Пароль"
                         value="<?php echo $password; ?>"/>
                  <br/>
                  <input type="submit" name="submit" class="btn btn-outline-primary" value="Сохранить"/>
                </form>
              </div>
            <?php endif; ?>
            <br/>
            <br/>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>