<?php
$kategori = $_GET['kategori'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reporting form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins">
    <link rel="stylesheet" href="css/report.css">
</head>
<body>
    <div class="container">
        <div class="con">
        <div class="content">
            <div class="form">
                <p class="title">Problem Reporting</p>
                <form action="insert.php" method="post" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td> <?php echo ucfirst($kategori); ?></td>
                            <td>
                                <?php
                            if ($kategori == 'machine') {
                                    echo '<input type="text" name="perihal"  placeholder="examp Mesin - oliver 72">';
                                } elseif ($kategori ==   'it') {
                                    echo '<input type="text" name="perihal"  placeholder="examp IT - laptop-rifky">';
                                } elseif ($kategori == 'electric') {
                                    echo '<input type="text" name="perihal" placeholder="examp Listrik- listrik it mati">';
                                } elseif ($kategori == 'building') {
                                    echo '<input type="text" name="perihal" placeholder="examp pagar depan rusak">';
                                } elseif ($kategori == 'other') {
                                    echo '<input type="text" name="perihal"  placeholder="">';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>requested by </td>
                            <td><input type="text" name="pelapor" required placeholder="your name"></td>
                        </tr>
                        <tr> 
                            <td>Departement</td>
                            <td> <select id="departemen" name="departemen" style="width:95%">
                                <option value="Produksi">Produksi </option>
                                <option value="SDM">SDM</option>
                                <option value="IT">IT</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Desain">Desain</option>
                                <option value="Keuangan">Keuangan</option>
                                <option value="PPIC">PPIC</option>
                                <option value="Logistik">Logistik</option>
                                <option value="Biro Direksi">Biro direksi</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td >Head of Departement</td>
                            <td> <select id="kadep" name="kadep" style="width:95%">
                                <option value="Yoyok">Yoyok </option>
                                <option value="Ambarsari">Ambarsari</option>
                                <option value="Hari Iswanto">Hari Iswanto</option>
                                <option value="Utami">Utami</option>
                                <option value="Boy">Boy</option>
                                <option value="Yayuk">Yayuk</option>
                                <option value="Firman">Firman</option>
                                <option value="Firdaus">Firdaus</option>
                                <option value="Wendy">Wendy</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td><input type="hidden" name="waktu" id="waktu" readonly></td>
                        </tr>
                        <tr>
                            <td>complain / breakdown</td>
                            <td><input type="text" name="keluhan" required placeholder="breakdown"></td>
                        </tr>
                        <tr>
                            <td>explanation</td>
                            <td><input type="text" name="ket" required placeholder="broken tool"></td>
                        </tr>
                    </table>
            </div>
        </div>
            <!-- ===================== Signature section ============================ -->

            <div class="signature">
                <p class="title">Sign the report</p>
                <div class="flex-row">
                    <div class="wrapper">
                        <canvas id="canvas-ttd" width="400" height="200"></canvas>
                        <button  id="clear"><span> Clear </span></button>
                        <input type="hidden" name="sig_staff" id="sig_staff" required>
                    </div>
                    <button type="submit" name="send" class="submit" onclick="setWaktu()">S <br> U <br> B <br> M <br> I <br> T</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<script src="js/report.js"></script>