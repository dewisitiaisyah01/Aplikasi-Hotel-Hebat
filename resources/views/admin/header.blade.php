<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dark Admin Header</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    .header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background-color: #343a40;
      color: #fff;
      z-index: 9999;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    body {
      padding-top: 70px;
    }

    .navbar .nav-link {
      color: #fff;
    }

    .navbar .nav-link:hover {
      color: #ffc107;
    }

    .dropdown-menu {
      background-color: #343a40;
      color: #fff;
    }

    .dropdown-menu a {
      color: #fff;
    }

    .dropdown-menu a:hover {
      background-color: #495057;
    }

    .search-panel {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      background: rgba(0, 0, 0, 0.9);
      display: none;
      z-index: 10000;
    }

    .search-panel.active {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .search-panel .form-group input {
      width: 400px;
    }

    .brand-big {
      font-size: 1.5rem;
      font-weight: bold;
    }

    .brand-sm {
      font-size: 1.2rem;
      display: none;
    }

    @media (max-width: 768px) {
      .brand-big {
        display: none;
      }

      .brand-sm {
        display: inline;
      }
    }
  </style>
</head>
<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <div class="navbar-header">
          <a href="index.html" class="navbar-brand">
            <span class="brand-text brand-big text-uppercase">
              <strong class="text-primary">Dark</strong>Admin
            </span>
            <span class="brand-text brand-sm text-uppercase">
              <strong class="text-primary">D</strong>A
            </span>
          </a>
        </div>

        <!-- Right Menu -->
        <div class="right-menu list-inline no-margin-bottom">
          <!-- Search -->
          <div class="list-inline-item">
            <a href="#" class="search-open nav-link"><i class="fas fa-search"></i></a>
          </div>

          <!-- Messages -->
          <div class="list-inline-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown">
              <i class="fas fa-envelope"></i><span class="badge badge-primary">5</span>
            </a>
            <div class="dropdown-menu messages">
              <a href="#" class="dropdown-item d-flex align-items-center">
                <div class="profile"><img src="img/avatar-3.jpg" alt="..." class="img-fluid">
                  <div class="status online"></div>
                </div>
                <div class="content">   
                  <strong class="d-block">Nadia Halsey</strong>
                  <span class="d-block">Lorem ipsum dolor sit amet</span>
                  <small class="date d-block">9:30am</small>
                </div>
              </a>
              <a href="#" class="dropdown-item d-flex align-items-center">
                <div class="profile"><img src="img/avatar-2.jpg" alt="..." class="img-fluid">
                  <div class="status away"></div>
                </div>
                <div class="content">   
                  <strong class="d-block">Peter Ramsy</strong>
                  <span class="d-block">Lorem ipsum dolor sit amet</span>
                  <small class="date d-block">7:40am</small>
                </div>
              </a>
              <a href="#" class="dropdown-item text-center">
                <strong>See All Messages <i class="fa fa-angle-right"></i></strong>
              </a>
            </div>
          </div>

          <!-- Tasks -->
          <div class="list-inline-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown">
              <i class="fas fa-tasks"></i><span class="badge badge-success">9</span>
            </a>
            <div class="dropdown-menu tasks-list">
              <a href="#" class="dropdown-item">
                <div class="text d-flex justify-content-between">
                  <strong>Task 1</strong><span>40% Complete</span>
                </div>
                <div class="progress">
                  <div class="progress-bar bg-primary" style="width: 40%"></div>
                </div>
              </a>
              <a href="#" class="dropdown-item text-center">
                <strong>See All Tasks <i class="fa fa-angle-right"></i></strong>
              </a>
            </div>
          </div>

          <!-- Admin Dropdown with Logout -->
          <div class="list-inline-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown">
              <i class="fas fa-user-shield"></i> Admin
            </a>
            <div class="dropdown-menu">
              <a href="#" class="dropdown-item">Profile</a>
              <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- Search Panel -->
  <div class="search-panel">
    <div class="close-btn">Close <i class="fa fa-times"></i></div>
    <form id="searchForm">
      <div class="form-group">
        <input type="text" name="search" class="form-control" placeholder="What are you searching for?">
        <button type="submit" class="btn btn-primary mt-3">Search</button>
      </div>
    </form>
  </div>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Search Panel Toggle
    document.querySelector('.search-open').addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelector('.search-panel').classList.add('active');
    });

    document.querySelector('.close-btn').addEventListener('click', function () {
      document.querySelector('.search-panel').classList.remove('active');
    });
  </script>
</body>
</html>
