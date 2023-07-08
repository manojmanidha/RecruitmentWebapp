<!-- <?php
$username = $_POST['username'];
$password = $_POST['password'];
$Role = $_POST['Role'];
&email = $_POST['email']
$location = $_POST['location']
?>

if (!empty($username) || !empty($password)  || !empty($Role) || !empty($email) || !empty($location)  ){
    <!-- #code... -->
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = " ";
    $dbname = "MySql";

    <!-- create connection -->
    $conn new mysqli($host ,$dbUsername,  $dbPassword , $dbname)

    if (mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_error().')' . mysqli_connect_error())
    }else{
        $SELECT = "SELECT email From user-register where email = ? Limit 1 ";
        $INSERT = "$INSERT Into user-register (username , password , Role ,email , location) 
        values(? , ? , ? , ?) ";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s" ,$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum =  $stmt->num_rows;

        if ($rnum==0) {
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssii" ,$username , $password , $Role ,$email , $location);
            $stmt->execute();
            echo "New record inserted sucessfully";   
        }else{
            echo "Someone already registered using this email"
        }
        $stmt->close();
        $conn->close();

    }

}else{
    echo "All field are required";
    die();
} -->