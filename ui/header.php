<!-- header.php -->
<header>
    <nav>
        <ul>
            <li><a href="index.php"><img src="./images/X_logo.png" alt="logo"></a></li>

            <!-- Add more navigation links as needed -->
            <?php
            session_start();
            // Example: Check if user is logged in, display appropriate links
            if(isset($_SESSION['loggedin'])) {
                echo '<li><a href="profile.php"><img src="./images/profile_logo.png" alt="profile_logo"></a></li>';
                echo '<li><a href="update_delete_profile.php"><img src="./images/settings_logo.png" alt="settings_logo"></a></li> ';
                echo '<li><a href="signout.php"><img src="./images/signout_logo.png" alt="signout_logo"></a></li>';
            }
            else { echo '<li><a href="signin.php"><img src="./images/signin_logo.png" alt="signin_logo"></a></li>'; }
            ?>
        </ul>
    </nav>
</header>
