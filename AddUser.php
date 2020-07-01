<?php 

include ('header.php');
include ('connect-to-db.php');



if (isset($_POST['save'])){

    $fname = $_POST['input-fname'];
    $lname = $_POST['input-lname'];
    $email = $_POST['input-email'];
    $address = $_POST['input-address'];
    $save = $_POST['save'];

    $query = "INSERT INTO users (email,fname,lname,address) VALUES ('$email','$fname','$lname','$address')";
    mysqli_query($conn, $query);
    echo "The User Has Been Added Successfully";
}



?>

<!--Add User-->
<div class="add-user">
    <div class="container">
        <h4>Add User</h4>
        <form action='AddUser.php' method="POST">
        <label>First Name</label>
        <input type="text" placeholder="Enter First Name" name='input-fname'><br>

        <label>Last Name</label>
        <input type="text" placeholder="Enter Last Name" name='input-lname'><br>

        <label>E-mail</label>
        <input type="email" placeholder="Enter E-mail" name='input-email'><br>

        <label>Address</label>
        <input type="address" placeholder="Enter Address" name='input-address'><br>

        <a><button class="btn bg-dark" name="save">Save</button></a>
        </form>
    </div>
</div>








    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')

    </script>
    <script src="assets/dist/js/bootstrap.bundle.js"></script>
</body>

</html>
