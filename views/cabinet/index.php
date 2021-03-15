<?php include ROOT . '/views/layouts/header.php'; ?>


<!-- ACTIONS -->
<section id="actions" class="py-4 mb-4 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <a href="/" class="btn btn-light btn-block">
          <i class="fas fa-arrow-left"></i> Back To Dashboard
        </a>
      </div>
      <div class="col-md-3">
        <a href="/cabinet/edit" class="btn btn-success btn-block">
          <i class="fas fa-lock"></i> Change Password
        </a>
      </div>
      <div class="col-md-3">
        <a href="index.html" class="btn btn-danger btn-block">
          <i class="fas fa-trash"></i> Delete Account
        </a>
      </div>
    </div>
  </div>
</section>

<!-- PROFILE -->
<section id="profile">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">
            <h4>Edit Profile</h4>
          </div>
          <h1 class="ml-4 mt-5">Кабинет пользователя</h1>
          <div class="container">
            <div class="row">
              <h4 class="ml-4">Привет, <?php echo $user['name']; ?>!</h4>
              <br>
              <ul>
                <li><a href="/cabinet/edit">Редактировать данные </a></li>
              </ul>
            </div>
          </div>

          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="name">Name </label>
                <input
                  type="text"
                  class="form-control"
                  value="Alex Vlasov"
                />
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="email"
                  class="form-control"
                  value="test@test.com"
                />
              </div>
              <div class="form-group">
                <label for="bio">Bio</label>
                <textarea class="form-control" name="editor1">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel veniam a eligendi ullam at similique aliquid eaque. Quod, magnam iure! Eveniet assumenda ducimus possimus! Numquam atque cupiditate, at perspiciatis, perferendis dignissimos facilis quis labore obcaecati hic dolores laboriosam sit eius.</textarea
                >
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <h3>Your Avatar </h3>
        <img
          src="assets/img/images.jpeg"
          alt=""
          class="d-block img-fluid mb-3"
        />
        <button class="btn btn-primary btn-block">Edit Image</button>
        <button class="btn btn-danger btn-block">Delete Image</button>
      </div>
    </div>
  </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>