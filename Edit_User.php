<?php 

include ('header.php');
include ('User.php');

include ('connect-to-db.php');


if (isset($_POST['edit'])) {

    $user = User::find($_POST['userid']);
    
    if ($user != null) {
        $user->email = $_POST['edit-email'];
        $user->fname = $_POST['edit-fname'];
        $user->lname = $_POST['edit-lname'];
        $user->address = $_POST['edit-address'];
        
        $user->save();
        //$query = ("UPDATE users SET  email='".$user->email."' , fname='".$user->fname."' , lname='".$user->lname."' , address='".$user->address."' WHERE userid='".$user->userid."'");
        //mysqli_query($conn, $query);
        echo "The User Has Been Edited Successfully";
    }
    
} elseif (isset($_GET['id'])) {

    $user = User::find($_GET['id']);

    if ($user != null) { 

?>


<div class="container">
    
    <table class="table" color="white">

        <thead>
            <tr>
                <th scope="col">Email</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Address</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <form action='Edit_User.php' method="POST">
                    <input type="hidden" name="userid" value="<?php print $user->userid; ?>">
                    <td><input type="text" placeholder="Edit E-mail" value="<?php print $user->email; ?>" name='edit-email'></td>
                    <td><input type="text" placeholder="Edit First Name" value="<?php print $user->fname; ?>" name='edit-fname'></td>
                    <td><input type="text" placeholder="Edit Last Name" value="<?php print $user->lname; ?>" name='edit-lname'></td>
                    <td><input type="text" placeholder="Edit Address" value="<?php print $user->address; ?>" name='edit-address'></td>
                    <td><a><button class="btn bg-dark" name="edit">Edit</button></a></td>
                </form>
            </tr>
        </tbody>

    </table>
</div>



<?php 

}


}


?>