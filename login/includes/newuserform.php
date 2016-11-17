<?php
class NewUserForm extends DbConn
{
    public function createUser($name, $usr, $uid, $email, $pw, $entity)
    {
        try {

            $db = new DbConn;
            $tbl_members = $db->tbl_members;
            $true = 1;
            // prepare sql and bind parameters
            $stmt = $db->conn->prepare("INSERT INTO ".$tbl_members." (name, id, username, password, email,entity,verified)
            VALUES (:name, :id, :username, :password, :email, :entity, :verified)");
            $stmt->bindParam(':id', $uid);
            $stmt->bindParam(':username', $usr);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $pw);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':entity', $entity);
            $stmt->bindParam(':verified', $true);
            $stmt->execute();

            $err = '';

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }
        //Determines returned value ('true' or error code)
        if ($err == '') {

            $success = 'true';

        } else {

            $success = $err;

        };

        return $success;

    }
}
