<?php
    class Cleardata
    {
        public $cleared_id;
        public $cleared_pw;
        public $cleared_email;
        public $cleared_addr;
        public $cleared_sex;

        //variable setting
        function __construct(){
            $this->cleared_id = $this->cleardata($_POST['id']);
            $this->cleared_pw = $this->cleardata($_POST['id']);
            $this->cleared_email = $this->email_filter($_POST['email']);
            $this->cleard_addr = $this->cleardata($_POST['addr']);
            $this->cleared_sex = $this->cleardata($_POST['sex']); //수정바람
        }

        //data cleaning
        function cleardata($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        //email format cleaning
        function email_filter($input_email) {
            return filter_var($input_email, FILTER_SANITIZE_EMAIL);
        }

        //password encrypt
        function pw_encrypt($input_password) {
            return password_hash($input_password, PASSWORD_BCRYPT);
        }
    }
?>