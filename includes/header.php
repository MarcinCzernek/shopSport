<a href="index.php"><b>Sport-Shop</b></a>

<ul>
<li><a href="register_form.php" target="_blank"><b> Zarejestruj się</b></a></li>
<li><a href="login_form.php" target="_blank"><b>Zaloguj się</b></a></li>
</ul>

<ul class="nav navbar-nav navbar-right">
    <?php
    if(isset($_SESSION['email'])) {
        ?>
        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span><b> Cart</b></a></li>
        <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span><b> Settings</b></a></li>
        <li><a href="logout_script.php"><span class="glyphicon glyphicon-log-in"></span><b> Logout</b></a></li>

        <?php
    }else {
        ?>
        <li><a href="signup.php" target="_blank"><span class="glyphicon glyphicon-user"></span><b> Sign Up</b></a></li>
        <li><a href="login.php" target="_blank"><span class="glyphicon glyphicon-log-in"></span><b> Login</b></a></li>
        <?php
    }
    ?>
</ul>