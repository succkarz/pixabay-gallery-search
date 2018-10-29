<?php
class con{
    private $link;
    function db_connect(){
        $this->link=mysqli_connect('localhost','root','','gallery');
        return $this->link;
    }
    function db_close(){
        return $this->link=mysqli_close();
    }
}