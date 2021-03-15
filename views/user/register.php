<?php
include ROOT . '/views/layouts/header.php';
?>

<!-- REGISTER -->
<section id="login" class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">

        <div class="card">
          <div class="card-header">
            <h4>Registration</h4>
          </div>
          <?php if ($result): ?>
            <p class="m-3 alert-success p-2 rounded">Вы зарегестрированы!</p>
          <?php else: ?>
            <?php if (isset($errors) && is_array($errors)): ?>
              <ul>
                <?php foreach ($errors as $error): ?>
                  <li class="m-3 alert-danger p-2 rounded">
                    <?php echo $error; ?>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
            <div class="card-body">
              <form action="#" method="post">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" required/>
                </div>

                <div class="form-group">
                  <label for="eamail">Email</label>
                  <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" required/>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" value="<?php echo $password; ?>"
                         required/>
                </div>

                <input
                  type="submit"
                  name="submit"
                  value="Registration"
                  class="btn btn-primary btn-block mb-4"
                />
                <a href="/user/login">You have account</a>
              </form>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
include ROOT . '/views/layouts/footer.php';
?>

