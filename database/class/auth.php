<?php

class auth
{

    private $db;

    private $error;

    public function __construct($db_conn)
    {
        $this->db = $db_conn;
        @session_start();
    }

    public function register($nama, $username, $password, $role)
    {
        try {


            $hashPw = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $this->db->prepare("INSERT INTO user VALUES (NULL, :nama, :username, :hashPw, :role )");
            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":hashPw", $hashPw);
            $stmt->bindParam(":role", $role);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function login($username, $password)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM user WHERE username = :username");
            $stmt->bindParam(":username", $username);
            $stmt->execute();
            $data = $stmt->fetch();
            if ($stmt->rowCount()  > 0) {
                if (password_verify($password, $data["password"])) {
                    $_SESSION['user_session'] = $data['id_user'];
                    return true;
                } else {
                    echo 'Username Atau Password Salah';
                    return false;
                }
            } else {
                echo 'Salah';
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function isLogin()
    {
        if (isset($_SESSION['user_session'])) {
            return true;
        }
    }

    public function logout()
    {
        //hapus Session
        unset($_SESSION['user_session']);
        session_destroy();


        return true;
    }
}
