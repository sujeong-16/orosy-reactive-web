<?
    session_start();
?>
<meta charset="utf-8">
<?

/* 추가한곳*/
$userid=$_POST['id'];
   $pass = $_POST['pass'];  
   $name = $_POST['name'];
   $hp = $_POST['hp'];
   $email = $_POST['email'];
/* 추가한곳 끝*/

    
   include "dbconn.php";      
   	     mysqli_query($connect,'set names utf8');  

    $sql = "update join_mem set pass='$pass', name='$name' , ";
    $sql .= "hp='$hp', email='$email' where id='$_SESSION[userid]'";


 $result = mysqli_query( $connect,$sql) ;

   mysqli_close($connect);                
   echo "
	   <script>
	    location.href = 'main.html';
	   </script>
	";
?>
