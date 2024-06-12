<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminview.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>My Work</h1>
        </div>
        <ul>
            <li><img src="decorationImg\dashboard.png" alt="">&nbsp; <span>Dashboard</span> </li>
            <li><img src="decorationImg\reading-book (1).png" alt="">&nbsp;<span>Customer</span> </li>
            <li><img src="decorationImg\payment.png" alt="">&nbsp;<span>Income</span> </li>
            <li><img src="decorationImg\help-web-button.png" alt="">&nbsp; <span>Help</span></li>
            <li><img src="decorationImg\settings.png" alt="">&nbsp;<span>Settings</span> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="decorationImg\search.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="CustomerRegData.php" class="btn">New Customer Registration</a>
                    <img src="notifications.png" alt="">
                    <div class="img-case">
                        <img src="decorationImg\user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
         
            <div class="cards">
                <div class="card">
                    <div  class="box">
                    
                    </div>
                    <div class="icon-case">
                        <img src="decorationImg\students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>53</h1>
                        <h3>Viewers</h3>
                    </div>
                    <div class="icon-case">
                        <img src="decorationImg\teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Contact</h3>
                    </div>
                    <div class="icon-case">
                        <img src="decorationImg\schools.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>350000</h1>
                        <h3>Income</h3>
                    </div>
                    <div class="icon-case">
                        <img src="decorationImg\income.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Customer Contact</h2>
                        <a href="contactcustomer.php" class="btn">View Customer Contact</a>
                    </div>
                   
                </div>

                <div class="new-students">
                    <div class="title">
                        <h2>Customer Requriments</h2>
                        <a href="CustomerReq.php" class="btn">Show Customer Requriments Data</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>

</html>