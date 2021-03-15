<?php
include ROOT . '/views/layouts/header.php';
?>

<!-- LOGIN -->
<section id="login" class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card">
          <div class="card-header">
            <h4>Account Login</h4>
          </div>
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
                <label for="eamail">Email</label>
                <input type="text" name="email" class="form-control" required/>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" required/>
              </div>
              <input
                type="submit"
                name="submit"
                value="Login"
                class="btn btn-primary btn-block mb-4"
              />
              <a href="/user/register" class="login"
              >You don't have account</a
              >
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include ROOT . '/views/layouts/footer.php';
?>

