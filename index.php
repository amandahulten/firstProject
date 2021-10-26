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
    <div class="top_section">
        <div class="volleyball_image1">
            <img src="images/volleyball-right.png" alt="volleyball" width="80px" heigth="80px">
        </div>
        <div class="volleyball_image2">
            <img src="images/volleyball-left.png" alt="volleyball" width="80px" heigth="80px">
        </div>
        <div class=" days_generator">
            <h1 class="box top"> Dagar till Volleyboll-EM:</h1>
            <div class="box center"><?php getGenerator(); ?></div>
        </div>
        <div class="random_quotes">
            <h2>Quote från volleybollproffs:</h2>
            <div class="quotes"><?php echo getRandomQuote(); ?></div>
        </div>
    </div>
    <div class="bottom_section">
        <div class="navigation" role="navigation">
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
