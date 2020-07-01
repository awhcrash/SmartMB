<?php 

include ('header.php');
include ('connect-to-db.php');


?>
<div class="container">
   <div class="container">
       <h5?><a href=""> <?php echo $row['fname']; echo $row['lname']; ?></h5>
       <p> <?php echo $row['title']; ?><p> 

    <main role="main" class="container">
        <div class="jumbotron">
            <h1>Navbar example</h1>
            <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
            <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">View navbar docs &raquo;</a>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')

    </script>
    <script src="assets/dist/js/bootstrap.bundle.js"></script>
</body>

</html>
