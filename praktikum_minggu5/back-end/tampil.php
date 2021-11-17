<?php
    include 'data.php';

    $sql = "SELECT * FROM gabut";
    $hasil = mysqli_query($connect, $sql);

    echo "<tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomor WA</th>
        </tr>";

    if (mysqli_num_rows($hasil) > 0) {
        while($row = mysqli_fetch_assoc($hasil)) {
            echo "<tr>";
            echo "<td>".$row["ID"]."</td>";
            echo "<td>".$row["nama_mhs"]."</td>";
            echo "<td>".$row["alamat"]."</td>";
            echo "<td>".$row["no_wa"]."</td>";
            echo "</tr>";
        }
      }

    mysqli_close($connect);
?>