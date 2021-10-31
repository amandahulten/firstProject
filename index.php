<?php

$title = 'Homepage';

?>

<?php require __DIR__ . '/php/header.php'; ?>
<?php require __DIR__ . '/php/functions.php'; ?>
<?php require __DIR__ . '/php/data.php'; ?>

<main>

    <div class="volleyball_image1">
        <img src="images/volleyball-right.png" alt="Gul, rosa och blå volleyboll som studsar vid omladdning av hemsidan">
    </div>

    <div class="volleyball_image2">
        <img src="images/volleyball-left.png" alt="Gul, rosa och blå volleyboll som studsar vid omladdnings av sidan">
    </div>

    <div class=" days_generator">
        <h1 class="box top"> Dagar till Volleyboll-EM:</h1>
        <div class="box center"><?php echo countdown(); ?></div>
    </div>


    <div class="top_section">
        <div class="random_quotes">
            <h2>Quote från volleybollproffs:</h2>
            <div class="quotes"><?php echo getRandomQuote(); ?></div>
            <button onclick="confirmation()">Tryck här!</button>
            <p id="output"></p>
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

    <div class="videos">
        <div class="video_rules">
            <h2>Vill du lära dig volleybollreglerna? <br />Kolla videon nedan:</h2>
            <iframe src="https://www.youtube.com/embed/9g7nYQv-kPM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="video_tips">
            <h2>Vill du bli en volleybollspelare? <br />Kolla videon nedan för bra tips:</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/puxDrjFI0oc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <script>
        function confirmation() {
            var txt = "Tråkmåns...";
            var question = confirm("Är du säker på att du vill gå vidare?");
            if (question === true) {
                isExited();
            } else {
                txt;
                document.getElementById("output").innerHTML = txt;
            }
        }

        function isExited() {
            var question = prompt("Är du taggad inför Volleyboll-EM?", "JAA!!");
            if (question === "JAA!!") {
                document.getElementById("output").innerHTML =
                    "Tjohoo, då har du kommit rätt!";
            } else {
                document.getElementById("output").innerHTML =
                    "Äh, ryck upp dig!!";
            }
        }
    </script>
</main>


<?php require __DIR__ . '/php/footer.php'; ?>
