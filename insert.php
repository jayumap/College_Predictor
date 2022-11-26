<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['Name']) && isset($_POST['username']) && isset($_POST['Email']) && isset($_POST['Number']) && isset($_POST['gender']) && isset($_POST['Password']) && isset($_POST['Password2'])){
        
        $Name = $_POST['Name'];
        $username = $_POST['username'];
        $gender = $_POST['gender'];
        $Email = $_POST['Email'];
        $Number = $_POST['Number'];
        $Password = $_POST['Password'];
        $Password2 = $_POST['Password2']; 

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "test";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT Email FROM register WHERE Email = ? LIMIT 1";
            $Insert = "INSERT INTO register(Name ,username, Password, gender, Email, Number, Password2 , ) values(?, ?,? , ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $Email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssii",$username, $Password  , $Password2, $gender, $Email, $Name, $Number);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>
