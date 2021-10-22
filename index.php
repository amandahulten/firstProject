<?php

$title = 'Homepage';

?>

<?php require __DIR__ . '/php/header.php'; ?>
<?php require __DIR__ . '/php/functions.php'; ?>

<header>
    <nav>
        <a href="/about.php" class="players_link">Players</a>
    </nav>
</header>

<main>
    <div class="days_generator">
        <div class="box top">BARA</div>
        <div class="box center"><?php echo "$countdown dagar"; ?></div>
        <div class="box bottom">TILL VOLLEYBALL-EM</div>
    </div>
    <div>
        <img src="images/volleyball.png" alt="volleyball">
        <img src="images/volleyball.png" alt="volleyball">
    </div>
</main>


<?php require __DIR__ . '/php/footer.php'; ?>
