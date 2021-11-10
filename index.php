<html>

<head>
    <meta charset="UTF-8">
    <title>Banking System</title>
    <meta name="viewport" content="width=device-width ,initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Gabriela&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        #header {
            height: 100vh;
            background-image: url(images/background1.png);
            background-position: center;
            background-size: cover;
        }

        .container {
            margin-right: 100px;
            margin-left: 100px;
        }

        .logo {
            margin-top: 30px;
            width: 100px;
        }

        .header-text {
            max-width: 350px;
            margin-top: 140px;
        }

        .h1 {
            font-size: 34px;
        }

        .square {
            height: 12px;
            width: 12px;
            display: inline-block;
            background: #1c2fdb;
            margin: 15px 0;
        }

        .button {
            padding: 18px 40px;
            background: transparent;
            outline: none;
            border: 2px solid #1e00a1;
            font-weight: bold;
            cursor: pointer;
        }

        p {
            font-size: 15px;
            line-height: 18px;
            color: #777;
        }

        .header-text button {
            margin-top: 20px;
            margin-bottom: 60px;
        }

        .line1 {
            width: 15px;
            height: 15px;
            background: #b493ff;
            display: inline-block;
        }

        .line2 {
            width: 80px;
            height: 1px;
            background: #967cf6;
            display: inline-block;
        }

        .line3 {
            width: 60px;
            height: 1px;
            background: #5c02ee;
            display: inline-block;
        }

        .line {
            line-height: 8px;
        }

        #sideNav {
            width: 250px;
            height: 100vh;
            position: fixed;
            right: -250px;
            top: 0;
            background: #8974ff;
            z-index: 2;
            transition: .5s;
        }

        nav ul li {
            list-style: none;
            margin: 50px 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
        }

        #menuBtn {
            width: 50px;
            position: fixed;
            right: 65px;
            top: 35px;
            z-index: 2;
            cursor: pointer;
        }

        .logoParent {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 200px;
        }

        .titlesss {
            margin-bottom: -5px;
            margin-left: 20px;
            font-family: 'Gabriela', serif;
            font-size: 27px;
        }

        /* FEATURES */

        #features {
            padding-top: 50px;
            padding-bottom: 50px;
            margin-top: 100px;
        }

        .feature-row {
            width: 80%;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .feature-col {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 300px;
        }

        .feature-col img {
            width: 200px;
        }

        .feature-col>a {
            display: inline-block;
        }


        @media(max-width:450px) {
            .container {
                margin-right: 20px;
                margin-left: 20px;
            }

            #header {
                min-height: 100vh;
                background-image: none;
                /* background-size: 100%;
        background-repeat: no-repeat; */
            }


            .header-text {
                margin-top: 20px;
            }

            #menuBtn {
                right: 20px;
            }

            #features {
                margin-top: -20px;
            }

            .button {
                margin-top: 10px;
                margin-bottom: 10px;
            }
        }


        @media(max-width:1000px) {
            #header {
                background-image: none;
                /* background-size: 100%;
        background-repeat: no-repeat; */
            }

        }
    </style>
</head>

<body>
    <section id="header">
        <div class="container">
            <div class="logoParent">
                <div><img src="images/icon2.png" class="logo"></div>
                <div class="titlesss">People's Bank</div>
            </div>
            <div class="header-text">
                <h1>Get the access of your account </br>now in the comfort of your home</h1>
                <span class="square"></span>
                <p>Check your account balance, trasnfer and receive money , all from the comfort of your home. Register
                    now if not already done. </p>
                <a href="register.html"><button class="button">Register Yourself</button></a>
                <div class="line">
                    <span class="line1"></span><br><br>
                    <span class="line2"></span><br><br>
                    <span class="line3"></span>
                </div>
            </div>
        </div>
    </section>
    <nav id="sideNav">
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="records.php">OUR CUSTOMERS</a></li>
            <li><a href="transactionhistory.php">TRANSACTION HISTORY</a></li>
            <li><a href="transact.php">TRANSFER MONEY</a></li>
            <li><a href="register.html">NEW USER</a></li>
        </ul>
    </nav>
    <img src="images/menu.png" id="menuBtn">


    <!---FEATURES--->
    <section id="features">
        <div class="feature-row">
            <div class="feature-col">
                <img src="images/customers.png">
                <a href="records.php"> <button class="button">Our Customers</button></a>
            </div>
            <div class="feature-col">
                <img src="images/history.png">
                <a href="transactionhistory.php"><button class="button">Transaction History</button></a>
            </div>
            <div class="feature-col">
                <img src="images/transferMoney.png">
                <a href="transact.php"><button class="button">Transfer Money</button></a>
            </div>
        </div>

    </section>
    <!-- FOOTER-->



    <script>
        var menuBtn = document.getElementById("menuBtn");
        var sideNav = document.getElementById("sideNav");
        sideNav.style.right = "-250px"
        menuBtn.onclick = function () {
            if (sideNav.style.right == "-250px") {
                sideNav.style.right = "0px";
            }
            else {
                sideNav.style.right = "-250px";
            }
        }
    </script>
</body>

</html>