<?php

$title = 'Homepage';

?>

<?php require __DIR__ . '/php/header.php'; ?>
<?php require __DIR__ . '/php/functions.php'; ?>
<?php require __DIR__ . '/php/data.php'; ?>

<!-- <header>
    <nav>
        <a href="/about.php" class="players_link">Spelare</a>
    </nav>
</header> -->

<main>
    <div class="volleyball_image1">
        <img src="images/volleyball-right.png" alt="volleyball" width="80px" heigth="80px">
    </div>
    <div class="volleyball_image2">
        <img src="images/volleyball-left.png" alt="volleyball" width="80px" heigth="80px">
    </div>
    <div class=" days_generator">
        <div class="box center"><?php echo "$countdown dagar"; ?></div>
        <div class="box bottom">TILL VOLLEYBALL-EM</div>
    </div>
    <div class="bottom_section">
        <div class="navigation">
            <a href="/about.php" class="players_link">Spelare</a>
        </div>
        <div class="highlights">
            <h2>Kolla highlights</h2>
            <?php foreach ($highlights as $country => $match) : ?>
                <a href="<?php echo $match; ?>" class="highlights_link"><?php echo "$country vs Sverige"; ?></a>
            <?php endforeach; ?>
        </div>
        <div class="full_match">
            <h2>Kolla hela matcher</h2>
            <?php foreach ($fullmatch as $country => $match) : ?>
                <a href="<?php echo $match; ?>" class="full_match_link"><?php echo "$country vs Sverige"; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</main>


<?php require __DIR__ . '/php/footer.php'; ?>
