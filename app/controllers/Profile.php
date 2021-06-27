<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Profile
 *
 * @author viljoenc@viljoentechnologies.com
 */
class Profile extends Controller{
    //put your code here
    public static function profileFetch() {
        /*
         * This was the original method used for fetchin the profile
         * if(isset($_SESSION['userId'])){
          $id = $_SESSION['userId'];

          $sqlQuery = "SELECT * FROM users WHERE userId =:id";
          $statement = $conn->prepare($sqlQuery);
          $statement->execute(array(':id' => $id));

          while($rs = $statement->fetch()){
          $firstName = $rs['firstName'];
          $lastName = $rs['lastName'];
          $username = $rs['emailAddress'];
          $dateJoined = strftime("%b %d, %Y", strtotime($rs["dateCreated"]));
          }

          $encode_id = base64_encode("encodeuserid{$id}");
          } */
        /*
         * this is the update method to include the profile update
         */
        if ((isset($_SESSION['userId'])) || isset($_GET['user_identity']) && !isset($_POST['updateProfile'])) {
            if (isset($_GET['user_identity'])) {
                $url_encode_id = $_GET['user_identity'];
                $decode_id = base64_decode($url_encode_id);
                $user_id_array = explode("encodeuserid", $decode_id);
                $id = $user_id_array[1];
            } else {
                $id = $_SESSION['userId'];
            }

            $conn =new Profile();
            $host1 = self::$host;
            $db1 = self::$db;
            $pass1 = self::$pass;
            $user1 = self::$user;
            $charset = 'UTF8';

            $dsn ="mysql:host=$host1;dbname=$db1;charset=$charset";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];


            try {

                $conn = new PDO($dsn, $user1, $pass1, $options);

                if ($conn) {
                    $sqlQuery  = "SELECT * FROM users WHERE userId =:id";
                    $statement = $conn->prepare($sqlQuery);
                    $statement->execute(array(':id' => $id,));
                    $statement->bindColumn (2, $firstName);
                    $statement->bindColumn (3, $lastName);
                    $statement->bindColumn (4, $username);
                    $statement->bindColumn (11, $dateJoined);
                }while ($rs = $statement->fetchAll(PDO::FETCH_ASSOC)) {

                    $firstName  = $rs['firstName'];
                    $lastName  = $rs['lastName'];
                    $username  = $rs['emailAddress'];
                    $dateJoined = strftime ( "%b %d, %Y" , strtotime ( $rs[ "dateCreated" ] ) );

                    print_r ($rs) ;
                 }



            } catch (PDOException $e) {
                echo "SQL query not executed:" . $e->getMessage()/*, (int) $e->getCode()*/;
            }




            $user_pic = "../uploads/" . $_SESSION['userId'] . ".jpg";
            $default = "../uploads/UserProfileDefault.jpg";

            if (file_exists($user_pic)) {
                $profile_picture = $user_pic;
            } else {
                $profile_picture = $default;
            }

            $encode_id = base64_encode("encodeuserid{$id}");
        } elseif (isset($_POST['updateProfile'])) {
            //initialize an array to store any error messages
            $form_errors = array();

            //form validation
            $required_fields = array('username', 'firstName');

            //call the function to check empty field and merge the returned data into form_error array
            $form_errors = array_merge($form_errors, check_empty_fields($required_fields));

            //collect form data and store as variables
            $username = $_POST['emailAddress'];
            $firstName = $_POST['firstName'];
            $hidden_id = $_POST['hidden_id'];

            if (empty($form_errors)) {
                try {
                    //create SQL statement
                    $sqlUpdate = "UPDATE users SET emailAddress =: emailAddress, firstName =:firstName WHERE userId =:id";

                    //use PDO prepared to sanitize data
                    $statement = $conn->prepare($sqlUpdate);

                    //update the record in the database
                    $statement->execute(array(':emailAddress' => $username, ':firstname' => $firstName, ':id' => $hidden_id));

                    //check if one new row was created
                    if ($statement->rowCount() == 1) {
                        $result = "<script type=\"text/Javascript\">
                    swal(\"Updated!\",\"Profile Update Successfully.\"success\");</script>";
                    } else {
                        $result = "<script type=\"text/Javascript\">
                    swal(\"Nothing Happened!\",\"You have not made any changes.\");</script>";
                    }
                } catch (PDOException $ex) {
                    $result = userMessage("An error occured:" . $ex->getMessage());
                }
            } else {
                $result = userMessage("There were" . count($form_errors)) . " errors inthe form<br>";
            }
        }
    }

}
