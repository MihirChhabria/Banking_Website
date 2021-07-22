<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Users</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e157f41776.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css\styles.css">
    <link rel="stylesheet" href="css\userstable.css">
</head>
<body>
    
    
        <div class="navigation" onclick="toggleMenu();">
            <ul>
                <li>
                    <a href="">
                        <span class= "icon"><i class="fas fa-university" aria-hidden="true" ></i></span>
                        <span class="title"><h2>Sparks Bank</h2></span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class= "icon"><i class="fas fa-home" aria-hidden="true" ></i></span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li>
                    <a href="createuser.php">
                        <span class= "icon"><i class="fas fa-user-edit" aria-hidden="true" ></i></span>
                        <span class="title">Create User </span>
                    </a>
                </li>
                <li>
                   <a href="users.php">
                    <span class= "icon"><i class="fas fa-users" aria-hidden="true" ></i></span>
                    <span class="title">Our Users</span>
                   </a>
                </li>
                <li>
                    <a href="">
                        <span class= "icon"><i class="fas fa-money-check-alt" aria-hidden="true" ></i></span>
                        <span class="title">Transactions</span>
                    </a>
                </li>
                <li>
                    <a href="TransferMoney.php">
                        <span class= "icon"><i class="fas fa-envelope" aria-hidden="true" ></i></span>
                        <span class="title">Net Banking</span>
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        <span class= "icon"><i class="fas fa-clipboard-list" aria-hidden="true" ></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class= "icon"><i class="fas fa-newspaper" aria-hidden="true" ></i></span>
                        <span class="title">News</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <span class= "icon"><i class="fas fa-robot"></i></span>
                        <span class="title">Chatbot</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class= "icon"><i class="fas fa-question-circle"></i></span>
                        <span class="title">FAQS</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle" onclick = "toggleMenu();"></div>
                <div class="user">
                    <img src="img\naruto.jpg" alt="">
                </div>
            </div>
        
<?php
    include 'connection.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
?>

    <div class="container">
        <h1 class="text-center pt-4">Our Users</h1>
        <br>
        <div class="row">
            <div class="col">
                <div class="table-responsive-md">
                <table class="table table-striped  table-hover">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col" class="text-center">Sr.No.</th>
                    <th scope="col" class="text-center">Name</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="text-center">Balance</th>
                    <th scope="col" class="text-center">Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($rows = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr class="text-center">
                        
                            <td class="py-2"><?php echo $rows['id']?></td>
                            <td class="py-2"><?php echo $rows['name']?></td>
                            <td class="py-2"><?php echo $rows['email']?></td>
                            <td class="py-2"><?php echo $rows['balance']?></td>
                            <td class="py-2"><?php echo $rows['datetime']?></td>
                        
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
        function toggleMenu(){
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');
            toggle.classList.toggle('active');
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }
    </script>
</body>
</html>