<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">BanManagement</a>
        </div>
        <?php session_start(); if (!isset($_SESSION["username"])) { ?>
            <form method="post" action="login.php" class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" name="username" placeholder="Username" class="form-control">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Log In</button>
            </form>
        <?php } else { ?>
            <div class="navbar-right">
                <p class="navbar-text">Welcome, <?php echo $_SESSION["username"]; ?></p>
            </div>
        <?php } ?>
    </div><!-- /.container-fluid -->
</nav>