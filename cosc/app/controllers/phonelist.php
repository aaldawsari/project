<?php
/**
 * Created by PhpStorm.
 * User: hamad
 * Date: 2017-12-04
 * Time: 3:16 AM
 */

class phonelist extends Controller
{
    public function index($id = '') {
        $r = $this->model('Reminders');
        $list = $r->phonelist();
        $this->view('home/phonelist', [
            'list' => $list
        ] );
    }

}