<?php
include 'connect.php';

//Make a SQL Connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Make a SQL query
$username=$_POST["username"];
$password = $_POST["password"];
$sql = 'SELECT * FROM userinfo WHERE username ="'.$username.'" AND password ="'.$password.'";';
// echo $sql;
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<br><h1>Aqui esta su informacion personal, no la comparta con nadie</h1><br>
    <center><a href ='index.html'>Regresar al Inicio de sesion</a></center><br>";
    $bank_info ="";
    $row_check =array();
    while($row = $result->fetch_assoc()) {
        
        if (!in_array($row["username"], $row_check)){
        $bank_info = "<div id='bankinfo'><br><p id='name'>Username: ". $row["username"]. " </p><br><p id='password'> Password: ". $row["password"]. "  </p><br><p id='money'> Balance: $" . $row["amount"] . "</p><br></div><br>".$bank_info;
        array_push($row_check, $row["username"]);
        }
        else{
            echo "<br>";
        }
    }
} else {
    $bank_info = "    <style>
    body{
width: 100%;
height: -webkit-fill-available;
min-height: 100%;
background-image: url('https://i.giphy.com/media/9SJ0zZnGVQSajeSMZ2/giphy.webp');
background-size: cover;
background-position-x: center;
color: #f0f0f0;
font-family: 'Fira Sans', sans-serif;
box-shadow: 0 20000px rgba(15, 15, 15, .96)  inset;

}
    </style><br><p>Disculpe esa cuenta no existe<br><a href ='index.html'>Haga click aqui para regresar al Inicio</a></p>";
}


?>
<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
    Informacion Segura
    </title>
</head>
<body>

<?php



echo $bank_info;

?>
<br>
<br>
<br>
</body>
</html>