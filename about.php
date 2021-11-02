<?php

$title = 'About';

?>

<?php require __DIR__ . '/php/header.php'; ?>
<?php require __DIR__ . '/php/functions.php'; ?>
<?php require __DIR__ . '/php/data.php'; ?>

<div class="about_container">

    <header>
        <div class="about_svg">
            <a href="index.php"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-left" class="svg-inline--fa fa-long-arrow-alt-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path>
                </svg></a>
        </div>
        <div class="about_h1">
            <h1>Spelare</h1>
        </div>
    </header>


    <div class="players_wrapper">

        <?php foreach ($playersInfo as $name => $details) : ?>
            <div class="single_player">
                <img src="<?php echo $details['img'] ?>" alt="<?php echo $name ?> i sin volleyboll-landslagsklädsel">
                <h2><?php echo $name; ?></h2>
                <table>
                    <tr>
                        <th>Position</th>
                        <th>Ålder</th>
                        <th>Längd</th>
                        <th>Spikehöjd</th>
                    </tr>
                    <tr>
                        <td><?php echo $details['position']; ?></td>
                        <td><?php echo $details['age']; ?></td>
                        <td><?php echo $details['length']; ?></td>
                        <td><?php echo $details['spikeheight'] . ' cm'; ?></td>
                    </tr>
                </table>
            </div>
        <?php endforeach ?>

    </div>

</div>


<?php require __DIR__ . '/php/footer.php'; ?>
