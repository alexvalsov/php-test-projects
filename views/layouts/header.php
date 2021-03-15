<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <link
    rel="stylesheet"
    href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
    crossorigin="anonymous"
  />

  <title>Trainee Project</title>
  <link rel="stylesheet" href="/template/css/style.css">
  <link href="/template/css/vendors.abb4aec1268005b7beb3.css" rel="stylesheet">
  <link href="/template/css/app.db6c303a70d831656580.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
  <div class="container">
    <a href="/" class="navbar-brand">Blogen</a>
    <button
      class="navbar-toggler"
      data-toggle="collapse"
      data-target="#navbarCollapse"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav">
        <li class="nav-item px-2">
          <a href="index.html" class="nav-link active">Dashboard</a>
        </li>
        <li class="nav-item px-2">
          <a href="posts.html" class="nav-link">Posts</a>
        </li>
        <li class="nav-item px-2">
          <a href="categories.html" class="nav-link">Categories</a>
        </li>
        <li class="nav-item px-2">
          <a href="users.html" class="nav-link">Users</a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <?php if (User::isGuest()): ?>
          <li class="nav-item">
            <a href="/user/login/" class="nav-link">
              <i class="fas fa-user-circle"></i> Login
            </a>
          </li>

        <?php else: ?>
          <li class="nav-item dropdown mr-3">
            <a
              href=""
              class="nav-link dropdown-toggle"
              data-toggle="dropdown"
            >
              <i class="fas fa-user"></i> Welcome <?php echo $user['name']; ?>
            </a>
            <div class="dropdown-menu">
              <a href="/cabinet/index" class="dropdown-item">
                <i class="fas fa-user-circle"></i> Profile
              </a>
              <a href="settings.html" class="dropdown-item">
                <i class="fas fa-cog"></i> Settings
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a href="/user/logout/" class="nav-link">
              <i class="fas fa-user-times"></i> Logout
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
<!-- HEADER -->
<header id="main-header" class="py-2 bg-primary text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1><i class="fas fa-cog"></i> Dashboard</h1>
      </div>
    </div>
  </div>
</header>
