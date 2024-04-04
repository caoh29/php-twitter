<!-- header.php -->
<header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>

            <!-- Add more navigation links as needed -->
            <?php
            session_start();
            // Example: Check if user is logged in, display appropriate links
            if(isset($_SESSION['loggedin'])) {
                echo '<li><a href="profile.php">Profile</a></li>';
                echo '<li><a href="update_delete_profile.php">Update Profile</a></li> ';
                echo '<li><a href="signout.php">Sign Out</a></li>';
            }
            else { echo '<li><a href="signin.php">Sign In</a></li>'; }
            ?>
        </ul>
    </nav>
</header>
