<?php
 class BlogModel {
    public $mysqli;
    public function __construct() {
        $this->mysqli = new mysqli('localhost', 'root', 'root', 'zt_test');
    }


    public function addBlog($data) {
         $sql = "insert into zt_blog (title, content, category,createtime) value ('{$data['name']}', '{$data['content']}', {$data['category']}, '{$data['createtime']}') ";
       	 $query = $this->mysqli->query($sql);
       	 return $query;
    }

    public function getBlog(){
        $sql = "select * from zt_blog";
        $query = $this->mysqli->query($sql);
        $lists = $query->fetch_all(MYSQLI_ASSOC);
        return $lists;
    }
}