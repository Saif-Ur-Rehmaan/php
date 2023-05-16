<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $Array = $_POST;
    ?>
    <table border="2">
        <tr>
            <?php foreach ($Array as $key => $value) { ?>
                <th><?php echo $key ?></th>
            <?php
            }
            ?>
        </tr>
        <tr>
            <?php foreach ($Array as $key => $value) { ?>
                <td><?php echo $value ?></td>
            <?php
            }
            ?>
        </tr>
    </table>
</body>

</html>