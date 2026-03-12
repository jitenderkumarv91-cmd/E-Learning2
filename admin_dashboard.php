<?php
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="user_dashbord.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <div class="container">
        <nav class="sidebar">
            <h2>
                <?php
                    include "connected.php";
                    $b = $_SESSION['name'];
                    $a="SELECT fname FROM `admin` where email = '$b' ";
                    $query = mysqli_query($con, $a);
                    if( $row = mysqli_fetch_assoc($query)){
                        echo $row['fname'];
                    }
                ?>
            </h2>
            <ul>
                <li><a href="#" class="active"><i class="fas fa-home"></i> Dashboard</a></li>
                <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fas fa-chart-line"></i> Analytics</a></li>
                <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
                <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </nav>

        <main class="main-content">
            <header>
                <h1>
                    <?php
                            include "connected.php";
                            $b = $_SESSION['name'];
                            $a="SELECT fname FROM `admin` where email = '$b' ";
                            $query = mysqli_query($con, $a);
                            if( $row = mysqli_fetch_assoc($query)){
                                echo "Welcome back ",$row['fname'];
                            }
                        ?>
                </h1>
                <div class="user-wrapper">
                    <img id="img" src="user.jpg" alt="User" style="height:10vh;, width:10ch;" >
                    <span>
                        <?php
                            include "connected.php";
                            $b = $_SESSION['name'];
                            $a="SELECT fname FROM `admin` where email = '$b' ";
                            $query = mysqli_query($con, $a);
                            if( $row = mysqli_fetch_assoc($query)){
                                echo $row['fname'];
                            }
                        ?>
                    </span>
                </div>
            </header>

            <section class="cards">
                <div class="card" style="border-left:4px solid #ef44e2">
                    <h3>Total Students</h3>
                    <p>Input</p>
                </div>
                <div class="card" style="border-left:4px solid #ef4444">
                    <h3>Actibe Students</h3>
                    <p>Input</p>
                </div>
                <div class="card" style="border-left:4px solid #2c5495">
                    <h3>Completed</h3>
                    <p>Iput</p>
                </div>
            </section>

    
        </main>
    </div>

</body>
</html>