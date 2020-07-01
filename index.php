<?php 

include ('header.php');
include ('User.php');

include ('connect-to-db.php');


$The_Users = User::all();

?>

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
            <?php foreach ($The_Users as $u) : ?>
            <tr>
                <th><?php echo $u->userid; ?></th>
                <td><?php echo $u->fname; ?></td>
                <td><?php echo $u->lname; ?></td>
                <td><?php echo $u->email; ?></td>
                <td><?php echo $u->address; ?></td>
                <td><a href="Edit_User.php?id=<?php print $u->userid ?>"><button class="btn bg-primary" name="save">Edit</button></a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>


            



            


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
Skriv ett meddelande ...
