<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    
    <link rel="stylesheet" href="css\styles.css">
    <script src="https://kit.fontawesome.com/e157f41776.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600&display=swap');



    * {
        font-family: 'Work Sans', sans-serif;  
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    button{
        transition: 0.2s;
        color:#fff;
        background-color:#162252;
    }
    button:hover{
        background-color: #0C2340;
        color: white;
    }
    </style>
</head>
<body>

    
        <div class="main">
            <div class="topbar">
                <div class="toggle" onclick = "toggleMenu();"></div>
                <div class="user">
                    <img src="img\naruto.jpg" alt="">
                </div>
            </div>
        </div>
    
       

<?php
    include 'connection.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
?>
    
    <div class="container">
        
        <h1 class="text-center pt-4">Transfer Money</h1>
        <br>
        <div class="row">
            <div class="col">
                <div class="table-responsive-md">
                <table class="table table-striped  table-hover">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col" class="text-center">Account Number</th>
                    <th scope="col" class="text-center">Holder's Name</th>
                    <th scope="col" class="text-center">E-Mail</th>
                    <th scope="col" class="text-center">Balance</th>
                    <th scope="col" class="text-center">Operation</th>
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
                        <td><a href="TransferDetails.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Transact</button></a></td> 
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