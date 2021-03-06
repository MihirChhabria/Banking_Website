<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e157f41776.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css\styles.css">
    
</head>
<body>

    <div class="container">
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

            <div class="charts">
                <div class="charts__left">
                    <div class="charts__left__title">
                        <div>
                            <h1>Daily Reports</h1>
                            <p>India</p>
                        </div>
                        <i class="fa fa-usd" aria-hidden="true"></i>
                    </div>
                    <div class="container">
                        <div id="chart"></div>
                        <button>Horizontal</button>
                    </div>
                </div>

            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">???1,104</div>
                        <div class="cardName">Stock price</div>
                    </div>
                    <div class="iconBox"><i class="fas fa-money-bill-alt"></i></div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">3.5%</div>
                        <div class="cardName">Savings Interest</div>
                    </div>
                    <div class="iconBox"><i class="fas fa-piggy-bank"></i></div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">7.5%</div>
                        <div class="cardName">Loan Interest</div>
                    </div>
                    <div class="iconBox"><i class="fas fa-dollar-sign"></i></div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">26</div>
                        <div class="cardName">Branches</div>
                    </div>
                    <div class="iconBox"><i class="fas fa-building"></i></div>
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
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="Js\script.js"></script>
</body>
   
</html>