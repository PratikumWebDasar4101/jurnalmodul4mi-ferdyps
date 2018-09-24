<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table border="1">
    <tr>
        <td>
            <img src="<?php echo $_SESSION['gambar']; ?>">
        </td>
        <td>
            <?php
                $hobi = $_SESSION['hobi'];
                foreach ($hobi as $value) {
            ?>
            <tr>
                <td><?php echo $value;?></td>
            </tr>
                <?php } ?>
        </td>
        <td><a href="formawal.html">Hapus Hobi</a></td>
    </tr>
    </table>
</body>
</html>