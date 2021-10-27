<?php

$title = 'Homepage';

?>

<?php require __DIR__ . '/php/header.php'; ?>
<?php require __DIR__ . '/php/functions.php'; ?>
<?php require __DIR__ . '/php/data.php'; ?>

<main>

    <div class="volleyball_image1">
        <img src="images/volleyball-right.png" alt="volleyball">
    </div>

    <div class="volleyball_image2">
        <img src="images/volleyball-left.png" alt="volleyball">
    </div>

    <div class=" days_generator">
        <h1 class="box top"> Dagar till Volleyboll-EM:</h1>
        <div class="box center"><?php getGenerator(); ?></div>
    </div>

    <div class="top_section">
        <div class="random_quotes">
            <h2>Quote från volleybollproffs:</h2>
            <div class="quotes"><?php echo getRandomQuote(); ?></div>
        </div>

        <div class="navigation" role="navigation">
            <a href="/about.php" class="players_link">Spelarinformation</a>
        </div>
    </div>

    <div class="bottom_section">
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

    <div class="video_rules">
        <h2>Vill du lära dig volleybollreglerna? <br />Kolla video nedan:</h2>
        <iframe src="https://www.youtube.com/embed/9g7nYQv-kPM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="video_tips">
        <h2>Vill du bli en volleybollspelare? <br />Kolla video nedan för bra tips:</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ep7Hb15stPE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</main>


<?php require __DIR__ . '/php/footer.php'; ?>
