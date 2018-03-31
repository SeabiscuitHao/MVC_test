<?php
class BlogController{
	public function add(){
		include "./view/blog/add.html";
	}
	public function doAdd(){
        $name 	 = $_POST['title'];
        $content = $_POST['content'];
        $cate 	 = $_POST['cate'];
        if (empty($name) || empty($content) || empty($cate)) {
            die('no data');
        }
        $data = array(
        	'name' => $name,
        	'content' => $content,
        	'category' => $cate,
        	'createtime' => date('Y-m-d H:i:s'),
        );
        $status = D('blog')->addBlog($data);
        var_dump($status);
	}
	public function lists(){

        $lists = D('blog')->getBlog();
        var_dump($lists);die();
        include "./view/blog/lists.html";
	}
}