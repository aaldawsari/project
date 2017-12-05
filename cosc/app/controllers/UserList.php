<?php
/**
 * Created by PhpStorm.
 * User: hamad
 * Date: 2017-12-04
 * Time: 3:16 AM
 */

class UserList extends Controller
{
    public function index($id = '') {
        $r = $this->model('Reminders');
        $list = $r->staff();
        $this->view('home/UserList', [
            'list' => $list
        ] );
    }

    public function manager($id = '') {
        $r = $this->model('Reminders');
        $list = $r->manager();
        $this->view('home/UserList', [
            'list' => $list
        ] );
    }

}