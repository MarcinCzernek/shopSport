<header> 
    <div class="logo-bar">
<a href="index.php"><img src="images\logo.png"></a>
    </div>
</header>
<div class="navbar-header justify-content-end" style='width: 100%'>
<ul style='width: 100%; text-align: right; display: block; padding-top: 30px'>
    <?php
    if(isset($_SESSION['email'])) {
        ?>
        <li style='float: right'><a href="selected_items.php"></span><b> Koszyk</b></a></li>
        <li style='float: right'><a href="settings.php"><b> Ustawienia</b></a></li>
        <li style='float: right'><a href="logout.php"><b> Wyloguj się</b></a></li>

        <?php
    }else {
        ?>
        <li><a style='float: right' href="register_form.php" target="_blank"><b> Zarejestruj się</b></a></li>
        <li><a style='float: right' href="login_form.php" target="_blank"><b> Zaloguj się</b></a></li>
        <?php
    }
    ?>
</ul>
</div>
