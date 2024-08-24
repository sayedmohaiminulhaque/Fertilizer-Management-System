<?php
class crud
{
    private $conn;

    public function __construct()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "fertilizer_monitoring_system";

        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if (!$this->conn) {
            die("Database Connectioin Error!");
        }
    }

    public function add_data($data)
    {
        $fo_email = $data['fo_email'];
        $fo_password = $data['fo_password'];
        $fo_name = $data['fo_name'];
        $fo_id = $data['fo_id'];
        $fo_phone = $data['fo_phone'];
        $fo_img = $_FILES['fo_img']['name'];
        $fo_img_name = $_FILES['fo_img']['tmp_name'];

        $query = "INSERT INTO field_officer_data(email,password,name,office_id,phone,image) VALUE ('$fo_email','$fo_password','$fo_name','$fo_id',$fo_phone,'$fo_img')";

        if (mysqli_query($this->conn, $query)) {
            move_uploaded_file($fo_img_name, 'field_officer_img/' . $fo_img);
            return "Sign-up Successful.";
        }
    }

    public function fo_login($data1)
    {
        $fo_email = $data1['fo_l_email'];
        $fo_password = $data1['fo_l_password'];
        $query = "SELECT * FROM field_officer_data WHERE email='$fo_email' AND password='$fo_password'";
        if(mysqli_query($this->conn, $query)){
            $returndata = mysqli_query($this ->conn, $query);

            if($returndata->num_rows == 1)
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }

      
    }
}
