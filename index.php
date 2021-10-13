<?php require __DIR__ . '/php/header.php'; ?>
<?php require __DIR__ . '/php/functions.php'; ?>

<header>
    <nav>
        <a href="/php/about.php" class="players">Get to know the players</a>
    </nav>
</header>

<main>
    <div class="days_generator">
        <div class="box top">ONLY</div>
        <div class="box center"><?php echo "$countdown days"; ?></div>
        <div class="box bottom">TO VOLLEYBALL-EM</div>
    </div>
</main>


<?php require __DIR__ . '/php/footer.php'; ?>
