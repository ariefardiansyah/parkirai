<html>
<head>
    <title>PARKIR AI</title>
</head>
<body>
<center>

    <h1>PARKIR INTELLIGENT AGENT</h1><br>
    <table style="width:100px border:1px" cellpadding="20x">
        <tr>
            <td>D</td>
            <td bgcolor="#7cfc00" style="border: double">KOSONG</td>
        </tr>
        <tr>
            <td>C</td>
            <td bgcolor="#7cfc00" style="border: double">KOSONG</td>
        </tr>
        <tr>
            <td>B</td>
            <td bgcolor="#7cfc00" style="border: double">KOSONG</td>
        </tr>
        <tr>
            <td>A</td>
            <td bgcolor="#7cfc00" style="border: double">KOSONG</td>
        </tr>
    </table>
    <br><br><br>

    <form method="post" action="proses.php">
        <table>
            <tr>
                <td>Mobil Masuk :</td>
                <input type="text" name="status" value="1" hidden>
                <input type="text" name="basea" value="0" hidden>
                <input type="text" name="baseb" value="0" hidden>
                <input type="text" name="basec" value="0" hidden>
                <input type="text" name="based" value="0" hidden>
                <td>
                    <button type="submit">Masuk</button>
                </td>
            </tr>
        </table>
    </form>

    <form method="post" action="proses.php">
        <table>
            <tr>
                <td>Mobil Keluar :</td>
                <td>
                    <input type="radio" name="gender" id="base" value="0" disabled>A
                </td>
                <td>
                    <input type="radio" name="gender" id="base" value="0" disabled>B
                </td>
                <td>
                    <input type="radio" name="gender" id="base" value="0" disabled>C
                </td>
                <td>
                    <input type="radio" name="gender" id="base" value="0" disabled>D
                </td>
                <td>
                    <button type="submit" disabled>
                        Keluar
                    </button>
                </td>
                <td bgcolor="red">semua parkir kosong</td>
            </tr>
        </table>
    </form>

</center>
</body>
</html>
