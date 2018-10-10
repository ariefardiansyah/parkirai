<?php
session_start();
$basea = $_SESSION['basea'];
$baseb = $_SESSION['baseb'];
$basec = $_SESSION['basec'];
$based = $_SESSION['based'];
?>
<html>
<head>
    <title>PARKIR AI</title>
</head>
<body>
<a href="index.php">
    <button>
        ULANGI
    </button>
</a>

<center>

    <h1>PARKIR INTELLIGENT AGENT</h1><br>
    <table style="width:100px border:1px" cellpadding="20x">
        <tr>
            <td>D</td>
            <?php if ($based == 0) { ?>
                <td bgcolor="#7cfc00" style="border: double">KOSONG</td>
            <?php } ?>
            <?php if ($based == 1) { ?>
                <td bgcolor="red" style="border: double">TERISI</td>
            <?php } ?>
        </tr>
        <tr>
            <td>C</td>
            <?php if ($basec == 0) { ?>
                <td bgcolor="#7cfc00" style="border: double">KOSONG</td>
            <?php } ?>
            <?php if ($basec == 1) { ?>
                <td bgcolor="red" style="border: double">TERISI</td>
            <?php } ?>
        </tr>
        <tr>
            <td>B</td>
            <?php if ($baseb == 0) { ?>
                <td bgcolor="#7cfc00" style="border: double">KOSONG</td>
            <?php } ?>
            <?php if ($baseb == 1) { ?>
                <td bgcolor="red" style="border: double">TERISI</td>
            <?php } ?>
        </tr>
        <tr>
            <td>A</td>
            <?php if ($basea == 0) { ?>
                <td bgcolor="#7cfc00" style="border: double">KOSONG</td>
            <?php } ?>
            <?php if ($basea == 1) { ?>
                <td bgcolor="red" style="border: double">TERISI</td>
            <?php } ?>
        </tr>
    </table>
    <br><br><br>

    <form method="post" action="proses.php">
        <table>
            <tr>
                <input type="text" name="status" value="1" hidden>
                <input type="text" name="basea" value="<?php echo $basea ?>" hidden>
                <input type="text" name="baseb" value="<?php echo $baseb ?>" hidden>
                <input type="text" name="basec" value="<?php echo $basec ?>" hidden>
                <input type="text" name="based" value="<?php echo $based ?>" hidden>
                <input type="text" name="base" value="0" hidden>
                <td>Mobil Masuk :</td>
                <td>
                    <button type="submit" <?php if ($basea == 1 && $baseb == 1 && $basec == 1 && $based == 1) {
                        echo "disabled";
                    } ?>>
                        Masuk
                    </button>
                </td>
                <?php if ($basea == 1 && $baseb == 1 && $basec == 1 && $based == 1) { ?>
                    <td bgcolor="red">Parkir Penuh</td>
                <?php } ?>
            </tr>
        </table>
    </form>

    <form method="post" action="proses.php">
        <table>
            <tr>
                <input type="text" name="status" value="0" hidden>
                <input type="text" name="basea" value="<?php echo $basea ?>" hidden>
                <input type="text" name="baseb" value="<?php echo $baseb ?>" hidden>
                <input type="text" name="basec" value="<?php echo $basec ?>" hidden>
                <input type="text" name="based" value="<?php echo $based ?>" hidden>
                <td>Mobil Keluar :</td>
                <td>
                    <input type="radio" name="base" value="a" <?php if ($basea == 0) {
                        echo "disabled";
                    } ?>>A
                </td>
                <td>
                    <input type="radio" name="base" value="b" <?php if ($baseb == 0) {
                        echo "disabled";
                    } ?>>B
                </td>
                <td>
                    <input type="radio" name="base" value="c" <?php if ($basec == 0) {
                        echo "disabled";
                    } ?>>C
                </td>
                <td>
                    <input type="radio" name="base" value="d" <?php if ($based == 0) {
                        echo "disabled";
                    } ?>>D
                </td>
                <td>
                    <button type="submit" <?php if ($basea == 0 && $baseb == 0 && $basec == 0 && $based == 0) {
                        echo "disabled";
                    } ?>>
                        Keluar
                    </button>
                    </a>
                </td>
                <?php if ($basea == 0 && $baseb == 0 && $basec == 0 && $based == 0) { ?>
                    <td bgcolor="red">semua parkir kosong</td>
                <?php } ?>
            </tr>
        </table>
    </form>

</center>
</body>
</html>
