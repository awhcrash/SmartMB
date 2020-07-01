<?php

class User {
    
    // Properties
    public $userid;
    public $email;
    public $fname;
    public $lname;
    public $address;
    
    private $table_name = 'users';
    
    // Methods
    
    public function find ($value) {
        $obj = new User; // الاستماره الفاضيه
        if ($value != null) {
            include ('connect-to-db.php');
            $sql_query = $conn->query("select * from ".$obj->table_name." where userid='" . $value. "'");
            if ($sql_query->num_rows > 0) {
                $user = $sql_query->fetch_assoc();
                $obj->userid = $user['userid'];
                $obj->email = $user['email'];
                $obj->fname = $user['fname'];
                $obj->lname = $user['lname'];
                $obj->address = $user['address'];
                

            }
        }
        return $obj;
    }



 
 public function all ($where = '') {
    $user = new User;
    include ('connect-to-db.php');
    $sql_query = $conn->query("select * from ".$user->table_name.' '.$where);
    $all_rows = [];
    while ($user = $sql_query->fetch_assoc()) {
        $user_obj = new User;
        $user_obj->userid = $user['userid'];
        $user_obj->email = $user['email'];
        $user_obj->fname = $user['fname'];
        $user_obj->lname = $user['lname'];
        $user_obj->address = $user['address'];
        

        

        $all_rows[] = $user_obj;
    }
    return $all_rows;
}


 public function save () {
    include ('connect-to-db.php');
    if (empty($this->userid)) {
        $sql_query = $conn->query("insert into ".$this->table_name." (userid, email, fname, lname, address) values ('".$this->userid."', '".$this->email."', '".$this->fname."', '".$this->lname."', '".$this->address."')");
        $this->userid = $conn->insert_id;
    } else {
        $sql_query = $conn->query("update ".$this->table_name." set email='".$this->email."' , fname='".$this->fname."' , lname='".$this->lname."' , address='".$this->address."' WHERE userid='".$this->userid."' ");
    }
}
}



    ?>