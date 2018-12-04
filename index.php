<?php
$dbc = mysqli_connect('localhost','root','root','presentie') or die ('Error 1');
$query = "SELECT * FROM studenten";
$result = mysqli_query($dbc, $query) or die ('Error 2');
?>
<style>
    table, tr, td {
        border: solid 1px black;
        border-collapse: collapse;
    }
    td {
        padding: 20px;
    }
</style>
<table>
<?php
while ($row = mysqli_fetch_array($result)) {
?>
<tr class="row">
    <td class="klas"><?php echo $row['klas']; ?></td>
    <td class="naam"><?php echo $row['naam']; ?></td>
</tr>
<?php } ?>

</table>

<script>
    let rows = document.getElementsByClassName('row');
    for (let i = 0; i < rows.length ; i++) {
        let row = rows[i];
        let klas = row.children[0].innerHTML;
        let naam = row.children[1];
        if (klas === '8B') {
            naam.style.background = 'red';
        }
    }
</script>
