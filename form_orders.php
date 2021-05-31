

<!-- FORM PEMESANAN KAMAR -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Orders Room Form !</title>
</head>
<body>
    
    <h1>Get Your Rooms!</h1>

    <form action="form_results.php" method="POST">

        <label >Tanggal Booking :</label>
        <input type="date" name="tgl_pemesanan" required> 
        <br>
        <br>
        <label> Nama Lengkap Anda :</label>
        <input type="text" name="nama_lgkp" required>
    <br>
    <br>
        <label> Nomor Identitas : </label>
        <input type="number" name="identitas" required>
    <br>
    <br>
        Tipe Kamar :
        <select name="tipe_kamar">Tipe Kamar
        <option name="deluxe" value="Deluxe">Deluxe</option>
        <option name="superior" value="Superior">Superior</option>
        </select>
        <br>
        <br>
        <label>Waktu Menginap :</label>
        <input type="number" name="wktu_menginap"> Malam

            <br>
            <br>
        <input type="submit" value="Get Orders!">

    </form>
</body>
</html>

