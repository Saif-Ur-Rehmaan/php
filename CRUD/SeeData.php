<?php include "includes/head.php"; ?>
<?php include "includes/header.php"; ?>
<h3>This is the see data page. Your data is shown below:</h3>
<?php
include 'includes/configs.php';
$SelectQuery = "SELECT * FROM `students`";
$ResponceAfterRunningQuery = mysqli_query($DataBaseConnection, $SelectQuery);
// print_r($row);


?>
<table border=>
    <tr>

        <?php
        $a = mysqli_query($DataBaseConnection, $SelectQuery);
        $ARRyForKeyLoop = mysqli_fetch_assoc($a);
        if ($ARRyForKeyLoop!= 0||null||false) {
        foreach ($ARRyForKeyLoop as $key => $value) {
            echo '<th style="border: 2px solid black;">';
            echo  $key;
            echo  '</th>';
        };
        ?>
        <th style="border: 2px solid black;"> Delete</th>
        <th style="border: 2px solid black;">update </th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($ResponceAfterRunningQuery)) { ?>
        <tr>
            <?php
            foreach ($row as $key => $value) {
                $id = $row['stdId'];
                if ($key == 'fileName') {
                    echo "<td><img src='ServerImgFolder/$value' style='width=10px;height=10px'/></td>";
                } else {
                    echo "<td style='border: 2px solid black;'>" . $value . "</td>";
                
                }
            }
            echo "<td>" . "<a href='delete.php?id=$id' class='btn btn-danger'> delete </a>" . "</td>";
            echo "<td>" . "<a href='update.php?id=$id' class='btn btn-success'> update </a>" . "</td>";
            ?>

        </tr>
    <?php }}else{
        echo '<a href="form.php" class="btn btn-primary">You have No Data Present In database enter some first </a>'
   ; }
     ?>
</table>















<!--<br>
<br>
<br>
<h4>Enter the ID of the student to be found:</h4>
<input type="number" id="input">
<a  onclick="getValue()" class="btn btn-danger">Button</a>

<script>
    function getValue() {
        var input = document.getElementById('input').value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert(this.responseText);
            }
        };
        xhttp.open("GET", "process.php?input=" + input, true);
        xhttp.send();
    }
</script> -->

<!-- <?php
        // include 'includes/configs.php';
        // if (isset($_GET['input'])) {
        // print_r($_GET['input']);
        // }
        // if ($DataBaseConnection)
        ?> -->

<?php include "includes/footer.php"; ?>