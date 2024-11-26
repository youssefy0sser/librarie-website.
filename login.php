<?php 
session_start();

 $email=$_POST["email"];
 $password=$_POST['password'];



$conn = new mysqli('localhost', 'root','', 'library');


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

else{

    $st= $conn->prepare("SELECT * FROM signup WHERE email=?");
    $st->bind_param("s",$email);
    $st->execute();

    $res=$st->get_result();
    if($res->num_rows>0){
      
        $data=$res->fetch_assoc();
        if($data['password']===$password){

          header("location:index.html");
        
          $_SESSION['email'] = $email;

        
    
        }

        

        else{


          header("location:login.html");
          
         

           

        }
    }

    else{

      header("location:login.html");
     

    }

   


}




?>


