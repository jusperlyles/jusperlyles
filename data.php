<php?
    include(index.html)
    $servername="localHost" ;
    $database="FormData" ;
    $username="" ;
    $password="" ;

    $conn=new mysqli($servername, $username, $password, $database);

    if($conn -> connect_error){
    die("Connection lost: " . $conn->connect_error);
    }
    
    ?>