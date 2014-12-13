<?php

class DB{
    public $host;
    public $user;
    public $password;
    public $dbname;
    public $table;
    public $id;
    public $title;
    public $text;
    public function __construct($host, $user, $password, $dbname){
        $this -> host = $host;
        $this -> user = $user;
        $this -> password = $password;
        $this -> dbname = $dbname;
        mysql_connect($host, $user, $password);
        mysql_select_db($dbname);
    }
    /*public function Add_news($table, $title, $text){

        mysql_query("INSERT INTO news(title, text)". VALUES($this-> title, $this -> text));
    }*/
    public function All_news($table){

        $res = mysql_query("SELECT * FROM news");
        if (!$res)
        {
            echo mysql_error();
            return [];
        }

        $ret = [];
        while ($row = mysql_fetch_assoc($res))
        {
            $ret[] = $row;
        }
        return $ret;
    }
}
