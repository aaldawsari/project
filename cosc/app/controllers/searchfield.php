<?php
/**
 * Created by PhpStorm.
 * User: hamad
 * Date: 2017-12-04
 * Time: 10:05 PM
 */

class searchfield extends controller
{
    public function index(){
        $user=$this->model(Reminders);
        if(isset($_POST[submit])){
            $list=$user->search($_POST['search']);
            $this->view('home/Userlist',['list'=>$list]);
        }

}

}