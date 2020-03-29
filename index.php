<?php
require "header.php";
?>

<main>
    <div>
        <section>
            <?php
            if (isset($_SESSION['userId'])) {
                echo '<p class="alert-success">You are Logged In</p>';
            } else {
                echo '<p class="alert-danger">You are Logged Out</p>';
            }
            ?>


        </section>
    </div>
</main>


<?php
require "footer.php"
?>