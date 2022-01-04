<a href="index.php"><b>Sport-Shop</b></a>

<ul class="nav navbar-nav navbar-right">
    <?php
    if(isset($_SESSION['email'])) {
        ?>
        <li><a href="selected_items.php"></span><b> Koszyk</b></a></li>
        <li><a href="settings.php"><b> Ustawienia</b></a></li>
        <li><a href="logout.php"><b> Wyloguj się</b></a></li>

        <?php
    }else {
        ?>
        <li><a href="register_form.php" target="_blank"><b> Zarejestruj się</b></a></li>
        <li><a href="login_form.php" target="_blank"><b> Zaloguj się</b></a></li>
        <?php
    }
    ?>
</ul>