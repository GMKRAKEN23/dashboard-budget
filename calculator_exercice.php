<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <!-- Principal_Container_Dashboard -->

    <div class="container">

        <!-- Side_bar -->
        <section class="side_bar">
            <h1>Logo</h1>
            <nav class="nav_bar">
                <ul>
                    <li><i class='bx bxs-dashboard'></i><a href="#">Dashboard</a></li>
                    <li><i class='bx bxs-bell'></i><a href="#">Notifications</a></li>
                    <li><i class='bx bxs-calculator'></i><a href="#">Calculator</a></li>
                    <li><i class='bx bxs-category'></i><a href="#">Categories</a></li>
                    <li><i class='bx bx-transfer-alt'></i><a href="#">Transactions</a></li>
                    <li><i class='bx bx-credit-card'></i><a href="#">Cards</a></li>                    
                    <li><i class='bx bxs-notepad'></i><a href="#">Notes</a></li>
                    <li><i class='bx bx-calendar'></i><a href="#">Calendar</a></li>
                    <li><i class='bx bxs-bulb'></i><a href="#">Advice</a></li>
                    <li><i class='bx bxs-book'></i><a href="#">Books</a></li>
                    <li><i class='bx bxs-report'></i><a href="#">Report</a></li>
                    <li><i class='bx bxs-star'></i><a href="#">Favorites</a></li>
                    <li><i class='bx bxs-help-circle'></i><a href="#">Help</a></li>
                    <li><i class='bx bxs-cog'></i><a href="#">Settings</a></li>
                    <li><i class='bx bxs-log-out'></i><a href="#">Logout</a></li>
                </ul>
            </nav>
        </section>
        <!-- Side_bar_End -->

        <!-- Main_container -->
        <main class="main">
            <div class="card_one">
                Charges : 50%
                <?php $salary = isset($_GET['number']) ? ($_GET['number']) / 2 : 0; ?>

            <p class="salary"><?= $salary ?></p>
            </div>
            <div class="card_two">
                Health Care : 10%
                <?php $salary = isset($_GET['number']) ? $_GET['number'] / 10 : 0; ?> 
                <p class="salary"><?= $salary ?></p>
            </div>
            <div class="card_three">
                Debts : 5%
                <?php $salary = isset($_GET['number']) ? $_GET['number'] / 20 : 0; ?>
                <p class="salary"><?= $salary ?></p>
            </div>
            <div class="card_four">
                Saving : 10%
                <?php $salary = isset($_GET['number']) ? $_GET['number'] / 10 : 0 ?>
                <p class="salary"><?= $salary ?></p>
            </div>
            <div class="card_five">
                Investments : 10%
                <?php $salary = isset($_GET['number']) ? $_GET['number'] / 10 : 0 ?>
                <p class="salary"><?= $salary ?></p>
            </div>
            <div class="card_six">
                Hobbies : 5%
                <?php $salary = isset($_GET['number']) ? $_GET['number'] / 20 : 0 ?>
                <p class="salary"><?= $salary ?></p>
            </div>
            <div class="card_seven">
                Education : 5%
                <?php $salary = isset($_GET['number']) ? $_GET['number'] /20 : 0 ?>
                <p class="salary"><?= $salary ?></p>
            </div>
            <div class="card_eight">
                Excess : 5%
                <?php $salary = isset($_GET['number']) ? $_GET['number'] / 20 : 0 ?>
                <p class="salary"><?= $salary ?></p>
            </div>
            <!-- Container_input_Push_calculator -->
            <div class="container_input">
                <span class="autor">By GMKRAKEN23</span>
                <form action="" method="get">
                    <input type="number" name="number" placeholder="Put Your Salary">
                    <button type="submit" name="submit">Push</button>
                </form>

            </div>
            <!-- Container_input_Push_calculator_End -->
        </main>
         <!-- Main_container_End -->
    </div>

     <!-- Principal_Container_Dashboard_End -->
</body>
</html>