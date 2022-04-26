<html>

<head>
    <title>D-Lemas</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampilan Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td>
                    <?= $nis; ?>
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <?= $kls; ?>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <?= $tgl; ?>
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>
                    <?= $tmp; ?>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <?= $alm; ?>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <?= $jk; ?>
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <?= $agm; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('dlemas');
                                ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>