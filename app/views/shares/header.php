<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Quản lý sản phẩm - Red Hood Theme</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        :root {
            --primary-red: #c1272d;
            --dark-red: #8a1c1c;
            --light-red: #f8d7da;
            --gold: #ffd700;
            --dark-gray: #2c2c2c;
            --light-gray: #f8f9fa;
        }
        
        body {
            background-color: var(--dark-gray);
            color: white;
            background-image: url('https://i.imgur.com/JQlES5m.png');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            min-height: 100vh;
        }
        
        .container {
            background-color: rgba(44, 44, 44, 0.9);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 15px var(--primary-red);
            margin-top: 20px;
            margin-bottom: 20px;
        }
        
        .navbar {
            background-color: var(--dark-red) !important;
            border-bottom: 3px solid var(--gold);
        }
        
        .navbar-brand, .nav-link {
            color: white !important;
            text-shadow: 1px 1px 2px black;
        }
        
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        
        .nav-link:hover {
            color: var(--gold) !important;
            transform: scale(1.05);
            transition: transform 0.3s;
        }
        
        .navbar-toggler {
            border-color: var(--gold);
        }
        
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,215,0, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }
        
        .table {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 5px;
        }
        
        .btn-primary {
            background-color: var(--primary-red);
            border-color: var(--dark-red);
        }
        
        .btn-primary:hover {
            background-color: var(--dark-red);
            border-color: var(--primary-red);
        }
        
        .btn-outline-primary {
            color: var(--gold);
            border-color: var(--gold);
        }
        
        .btn-outline-primary:hover {
            background-color: var(--gold);
            color: var(--dark-gray);
        }
        
        .card {
            background-color: rgba(44, 44, 44, 0.8);
            border: 1px solid var(--primary-red);
            box-shadow: 0 0 10px var(--primary-red);
        }
        
        .card-header {
            background-color: var(--primary-red);
            color: white;
            border-bottom: 1px solid var(--gold);
        }
        
        h1, h2, h3, h4, h5, h6 {
            color: var(--gold);
            text-shadow: 2px 2px 4px black;
        }
        
        .form-control {
            background-color: rgba(255, 255, 255, 0.9);
        }
        
        .logo {
            height: 40px;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img src="https://i.imgur.com/JQlES5m.png" class="logo d-none d-sm-inline" alt="Red Hood Logo">
            Quản lý sản phẩm
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Product menu -->
                <li class="nav-item">
                    <a class="nav-link" href="/webbanhang/Product/">
                        <i class="fas fa-list"></i> Danh sách sản phẩm
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/webbanhang/Product/add">
                        <i class="fas fa-plus"></i> Thêm sản phẩm
                    </a>
                </li>

                <!-- Category menu -->
                <li class="nav-item">
                    <a class="nav-link" href="/webbanhang/Category/">
                        <i class="fas fa-tags"></i> Danh sách danh mục
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/webbanhang/Category/add">
                        <i class="fas fa-folder-plus"></i> Thêm danh mục
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <!-- Your content goes here -->
    </div>

    <!-- Add Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>