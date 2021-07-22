<?php
  include 'connection.php';
  if(isset($_POST['submit'])){
    $Name = $_POST['name'];
    $Gender = $_POST['gender'];
    $Age = $_POST['age'];
    $Email = $_POST['email'];
    $Contact = $_POST['contact'];
    $Balance = $_POST['balance'];
    $sql = "INSERT INTO `sbank`.`users` (`name`, `gender`, `age`, `email`, `contact`, `balance`, `datetime`) VALUES ('$Name','$Gender', '$Age', '$Email', '$Contact', '$Balance', current_timestamp());";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script> alert('Yay! Your Account was Created.');
             </script>";
                    
    }

  }
?>

<?php
  //define variables and set to empty values
  $Name = $Email = $Gender = $Age = $Phone = $Balance ="";
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Name = test_input($_POST["name"]);
    $Gender = test_input($_POST["gender"]);
    $Age = test_input($_POST["age"]);
    $Email = test_input($_POST["email"]);
    $Contact = test_input($_POST["contact"]);
    $Balance = test_input($_POST["balance"]);
  }

  function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="css\styles.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e157f41776.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  margin: 0;
  padding: 0;
  background: #f3f3f3;
  height: 100vh;
  overflow: hidden;
}

button{
    position:relative;
    display: inline-block;
    padding: 15px 30px;
    color: #2196f3;
    text-transform: uppercase;
    letter-spacing: 4px;
    text-decoration: none;
    font-size:24px;
    overflow: hidden;
    transition: 0.1s;
  
}

button:hover{
  color: #255784;
  background: #2196f3;
  box-shadow: 0 0 5px #2196f3, 0 0 15px #2196f3, 0 0 28px #2196f3;

}

.btn{
  margin-bottom: 20px;
  padding: 0;
  display:flex;
  width: 100%;;
  justify-content: center;
  align-items: center;
  min-height: 8vh;
  background: linear-gradient(to bottom, rgba( 0, 0, 0, 0.05), transparent);
  
}

.center{
  position: absolute;
  top: 50%;
  left: 35%;
  transform: translate(-50%, -50%);
  width: 400px;
  background: #0C2340;
  border-radius: 10px;
  margin-top:40px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
}
.center h1{
  text-align: center;
  padding: 20px 0;
  color:#eee;
  border-bottom: 1px solid silver;
}
.center form{
  padding: 0 40px;
  box-sizing: border-box;
  
}

form .txt_field{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 30px 0;
}
.txt_field input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
  color: #eee;
  
}
.txt_field label{
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}
.txt_field span::before{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 0%;
  height: 2px;
  background: #2691d9;
  transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
  top: -5px;
  color: #2691d9;
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
  width: 100%;
}
.pass{
  margin: -5px 0 20px 5px;
  color: #a6a6a6;
  cursor: pointer;
}
.pass:hover{
  text-decoration: underline;
}

.signup_link{
  margin: 30px 0;
  text-align: center;
  font-size: 16px;
  color: #666666;
}
.signup_link a{
  color: #2691d9;
  text-decoration: none;
}
.signup_link a:hover{
  text-decoration: underline;
}

</style>

<body>
  <div id="nav"></div>
    <div class="center">
     
          <h1>Create User</h1>
        <form method="post" autocomplete="off">

          <div class="txt_field">
            <input type="text" name="name" id="name" required>
            <span></span>
            <label>Username</label>
          </div>
          
          <div class="txt_field">
              <input type="text" name="gender" id="gender" required>
              <span></span>
              <label>Gender</label>
            </div>
          <div class="txt_field">
              <input type="number" name="age" id="age" required>
              <span></span>
              <label>Age</label>
          </div>
          <div class="txt_field">
            <input type="email" name="email" id="email" required>
            <span></span>
            <label>Email</label>
          </div>
          <div class="txt_field">
              <input type="text"  name="contact" id="contact" required>
              <span></span>
              <label>Contact No</label>
          </div>
          <div class="txt_field">
              <input type="number" name="balance" id="balance" required>
              <span></span>
              <label>Balance(₹)</label>
          </div>
          <button class = "btn" name="submit" type="submit">Submit</button>
        </form>
      </div>
    </div>

    <script>
        $.get("nav.html", function(data){
            $("#nav").replaceWith(data);
        });


    </script>
  </body>
</html>