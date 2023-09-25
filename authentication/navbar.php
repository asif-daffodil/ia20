<?php  
    $pageName = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark z-1">
    <div class="container">
        <a class="navbar-brand" href="./">DIPTI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">All Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Add New Student</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= "User Name" ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Change Passs</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $pageName === "login.php" ? "active":null ?>" href="./login.php">Log in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $pageName === "signup.php" ? "active":null ?>" href="./signup.php">Sign up</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Student..." aria-label="Username" aria-describedby="basic-addon1">
                    <button class="input-group-text" id="basic-addon1" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</nav>