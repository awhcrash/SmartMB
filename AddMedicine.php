<?php 

include ('header.php');
include ('User.php');

include ('connect-to-db.php');


if (isset($_POST['save'])){

    $medicine_name = $_POST['input-medicine_name'];
    $medicine_time = $_POST['input-medicine_time'];
    
    $save = $_POST['save'];

    $query = "INSERT INTO medicine (medicine_name, medicine_time) VALUES ('$medicine_name','$medicine_time')";
    mysqli_query($conn, $query);
    echo "The Medicine Has Been Added Successfully";
}

?>


<!--Add Medicine-->
<div class="add-medicine">
    <div class="container">
        <h4>Add User</h4>
        <form action='AddMedicine.php' method="POST">
        <label>Enter Medicine Name</label>
        <input type="text" placeholder="Enter Medicine Name" name='input-medicine_name'><br>

        <label>Enter Medicine Time</label>
        <input type="time" placeholder="Enter Medicine Time" name='input-medicine_time'><br>

        

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
