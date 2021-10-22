<?php

$title = 'About';

?>

<?php require __DIR__ . '/php/header.php'; ?>
<?php require __DIR__ . '/php/functions.php'; ?>
<?php require __DIR__ . '/php/data.php'; ?>

<div class="about_header">
    <h1>Players</h1>
    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-left" class="svg-inline--fa fa-long-arrow-alt-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <path fill="currentColor" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path>
    </svg>
</div>
<div class="players_wrapper">
    <?php foreach ($playersInfo as $name => $details) : ?>
        <table>
            <img src="<?php echo $details['img'] ?>" alt="">
            <h2><?php echo $name; ?></h2>

            <tr>
                <th>Position</th>
                <th>Ålder</th>
                <th>Längd</th>
                <th>Spikehöjd</th>
            </tr>
            <tr>
                <td><?php echo $details['position']; ?></td>
                <td><?php echo $details['ålder']; ?></td>
                <td><?php echo $details['längd']; ?></td>
                <td><?php echo $details['spikehöjd']; ?></td>
            </tr>
        </table>
    <?php endforeach ?>
</div>


<?php require __DIR__ . '/php/footer.php'; ?>
