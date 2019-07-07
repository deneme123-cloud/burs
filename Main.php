<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT tc, isim FROM records.basvurular";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "tc: " . $row["tc"]. " - isim: " . $row["isim"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();

//    if(isset($_POST['gonder'])){
//        $_isim=$_POST['isim'];
//        $_soyisim=$_POST['soyisim'];
//        echo "Hoşgeldin $_isim $_soyisim";
//        echo "<style type='text/css'>
//                    #form_kutusu{
//                        display:none;
//                    }
//                   </style>";
//    }
