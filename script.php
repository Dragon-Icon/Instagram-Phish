<?php 
    if(isset($_POST["password"])) {

        $new_login = array(
            "username" => $_POST["username"],
            "password"=> $_POST["password"],
        );

        if(filesize("data.json") == 0) {
            $first_record = array($new_login);

            $data_to_save = $first_record;
        }else{
            $old_records = json_decode(file_get_contents("data.json"));
            array_push($old_records, $new_login);
            $data_to_save = $old_records;
        }

        if(!file_put_contents("data.json", json_encode($data_to_save, JSON_PRETTY_PRINT), LOCK_EX)) {
            $error = "Error Logging In";
        }else{
            $success = "Successfull Login";
        }
    }