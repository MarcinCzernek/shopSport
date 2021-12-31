<a href="index.php"><b>Sport-Shop</b></a>

<ul class="nav navbar-nav navbar-right">
    <?php
    if(isset($_SESSION['email'])) {
        ?>
        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span><b> Koszyk</b></a></li>
        <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span><b> Ustawienia</b></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span><b> Wyloguj się</b></a></li>

        <?php
    }else {
        ?>
        <li><a href="register_form.php" target="_blank"><span class="glyphicon glyphicon-user"></span><b> Zarejestruj się</b></a></li>
        <li><a href="login_form.php" target="_blank"><span class="glyphicon glyphicon-log-in"></span><b> Zaloguj się</b></a></li>
        <?php
    }
    ?>
</ul>