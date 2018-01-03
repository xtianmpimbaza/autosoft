<?php
error_reporting(0);

class database_config
{

    public $_server_name;
    public $_user_name;
    public $_password;
    public $_database_name;

    public function __construct()
    {
        $this->_server_name = "localhost";
        $this->_user_name = "root";
        $this->_password = "";
        $this->_database_name = "report";
        ini_set('max_execution_time', 300); //300 seconds = 5 minutes
        ini_set("auto_detect_line_endings", "1");
    }
}

?>