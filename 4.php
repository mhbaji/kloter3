<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kloter3";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    switch($_GET["pilihan"]){
        case "insertAll":  
            $name = $_GET["name"];
            $skill = $_GET["skill"];
            $sql_user = "INSERT INTO users_tb(name) VALUES($name)";
            $sql_skill = "INSERT INTO skill_tb(name,skill) VALUES($name)";
            
            if ($conn->query($sql_user) === TRUE && $conn->query($sql_skill)) {
                echo "Upload Masukan Berhasil <br>";
                echo "<a href='baru.php'> Kembali Ke Home</a>";
            } else {
                echo "Error: " . $sql_user . "-" . $sql_skill ."<br>" . $conn->error;
                echo "<a href='baru.php'> Kembali Ke Home</a>";
            }
            $conn->close();
        break;

        case "tampilSemua":
            $sql_user = "SELECT * FROM users_tb";
            $sql_skill = "SELECT * FROM skill_tb";
            
            if ($conn->query($sql_user) === TRUE ) {
                echo "<tr> <td> ".$row["id"]."</td> <td> ".$row["name"]."</td> <td> ".$row["photo"]."</td></tr> <br>";
            } else if($conn->query($sql_skill) === TRUE ){
                echo "<tr> <td> ".$row["id"]."</td> <td> ".$row["name"]."</td> <td> ".$row["skill"]."</td></tr> <br>";
            }
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                echo "<a href='baru.php'> Kembali Ke Home</a>";
            }
            $conn->close();
        break;

        case "tampilSesuaiSkill":
            $skill = $_GET["skill"];
            $sql_skill = "SELECT id,name FROM skill_tb WHERE skill='$skill'";
            $id = "";
            if ($conn->query($sql_skill) === TRUE ) {
                $id= ".$row["id"].";
            }
            $sql_user = "SELECT photo FROM users_tb WHERE id='$id'";
            
            if ($conn->query($sql_user) === TRUE ) {
                echo "<tr> <td> ".$row["id"]."</td> <td> ".$row["name"]."</td> <td> ".$row["photo"]."</td></tr>";
            } else if($conn->query($sql_skill) === TRUE ){
                echo "<tr> <td> ".$row["skill"]."</td></tr> <br>";
            }
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                echo "<a href='baru.php'> Kembali Ke Home</a>";
            }
            $conn->close();
        break;

        case "tampilSpesifikUser":
            $nama = $_GET["nama"];
            $sql_skill = "SELECT * FROM skill_tb WHERE nama='$nama'";
            
            if($conn->query($sql_skill) === TRUE ){
                echo "<tr> <td> ".$row["id"]."</td> <td> ".$row["name"]."</td> <td> ".$row["skill"]."</td></tr> <br>";
            }
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                echo "<a href='baru.php'> Kembali Ke Home</a>";
            }
            $conn->close();
        break;
    }
?>
