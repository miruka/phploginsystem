<?php
require "header.php";
?>

<main>
    <div>
        <section>
            <h1 class="display">Signup</h1>
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<p class="alert alert-warning alert-dismissible fade show" role="alert">Fill in All the Fields!</P>';
                    # code...
                } elseif ($_GET['error'] == "invaliduidmail") {
                    # code...
                    echo '<p class="alert alert-warning alert-dismissible fade show" role="alert">Invalid Username and Email</P>';
                } elseif ($_GET['error'] == "invaliduid") {
                    # code...
                    echo '<p class="alert alert-warning alert-dismissible fade show" role="alert">Invalid Username</P>';
                } elseif ($_GET['error'] == "invalidmail") {
                    # code...
                    echo '<p class="alert alert-warning alert-dismissible fade show" role="alert">Invalid Email</P>';
                } elseif ($_GET['error'] == "passwordcheck") {
                    # code...
                    echo '<p class="alert alert-warning alert-dismissible fade show" role="alert">Your Passwords DO NOT MATCH</P>';
                } elseif ($_GET['error'] == "usertaken") {
                    # code...\
                    echo '<p class="alert alert-warning alert-dismissible fade show" role="alert">Username is Already Taken</P>';
                }
            } else if ($_GET['signup'] == "success") {
                echo '<p class="alert alert-success">Sign up Successful<p>';
            }
            ?>
            <form class="form-group col-md-3" action="includes/signup.inc.php" method="post">
                <input class="form-control" type="text" name="uid" placeholder="Username"><br>
                <input class="form-control" type="email" name="mail" placeholder="E-mail"><br>
                <input class="form-control" type="password" name="pwd" placeholder="Password"><br>
                <input class="form-control" type="password" name="pwd-repeat" placeholder="Repeat-password"><br>
                <button class="btn btn-success  btn-lg float-right" type="submit" name="signup-submit" pull-right>Signup</button>
            </form>

        </section>
    </div>

</main>


<?php
require "footer.php"
?>