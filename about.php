<?php

$title = 'About';

?>

<?php require __DIR__ . '/php/header.php'; ?>
<?php require __DIR__ . '/php/functions.php'; ?>

<h1>Players</h1>
<div class="wrapper">
    <div class="player_pictures">
        <img src="images/alexandra-lazic 1.png" alt="Picture of Alexandra Lasic">

        <?php foreach ($playersInfo as $name => $details) : ?>
            <table>
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



            <?php endforeach ?>
            </table>
            <!-- <tr>
                <th>Position: </th>

            </tr> -->

            <!-- </div>
    <div class="player_pictures">
        <img src="images/anna-haak 1.png" alt="Picture of Anna Haak">
    </div>
    <div class="player_pictures">
        <img src="images/isabelle-haak 1.png" alt="Picture of Isabelle Haak">
    </div>
    <div class="player_pictures">
        <img src="images/lilly-topic 1.png" alt="Picture of Lilly Topic">
    </div>
    <div class="player_pictures">
        <img src="images/linda-andersson 1.png" alt="Picture of Linda Andersson">
    </div>
    <div class="player_pictures">
        <img src="images/sofie-sjoberg 1.png" alt="Picture of Sofie Sjöberg">
    </div> -->
    </div>


    <?php require __DIR__ . '/php/footer.php'; ?>
