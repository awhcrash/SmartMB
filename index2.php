<?php 

include ('header.php');
include ('User.php');

include ('connect-to-db.php');


$query = 'SELECT * FROM users';
$result = mysqli_query($conn, $query);

if (isset($result)) : ?>

<div class="container">
    
    <table class="table" color="white">

        <thead>
            <tr>
                <th scope="col" >userID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Location</th>
            </tr>
        </thead>

        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)) :
                $the_user = User::find($row['userid']); ?>
            <tr>
                <th><?php echo $row['userid']; ?></th>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['lname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><a href="Edit_User.php?user=<?php  '$the_user' ?>"><button class="btn bg-primary" name="save">Edit</button></a></td>
            </tr>
            <?php endwhile; ?>
        </tbody>

    </table>
</div>


            <?php endif; ?>



            <?php 
            $the_u = User::find(2);
            print $the_u->fname; ?>


    <main role="main" class="container">
        <div class="jumbotron">
            <h1>Welcome</h1>
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
