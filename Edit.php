<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body style="background-color: #ed97f4">
        <p style="font-size: 30px; color: white; margin-top: 50px; font-family: Calibri; text-align: center;">Form Pendataan Mahasiswa <br> Sistem Informasi</p>

 <?php 

include "connect.php";

$idedit = $_GET['id'];

$sql = "SELECT id, nama, email, telepon, umur FROM phonebook";
$result = mysqli_query($link, $sql);

while($baris = mysqli_fetch_array($result)) {
$id = $baris['id'];
    if($id == $idedit){
    echo "<div style='color: white; margin-left: 650px; margin-top: 50px;'>";
        echo '<form action="updates.php?id='.$id.'" method="POST">

            Nama: <br><input type="text" 
                    name="namabaru" value='.$baris['nama'].'><br><br>
            Email: <br><input type="email" 
                    name="emailbaru" value='.$baris['email'].'><br><br>
            Phone: <br><input type="tel" 
                    name="phonebaru" value='.$baris['telepon'].'><br><br>
            Umur:<br><input type="number" 
                    name="umurbaru" value='.$baris['umur'].'><br><br>
            <input type="submit" value="Update!" onclick="msg()">
        </form>';
        echo "</div>";
}
}
 ?>

</body>
</html>