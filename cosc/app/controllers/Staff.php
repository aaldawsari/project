<?php
/**
 * Created by PhpStorm.
 * User: hamad
 * Date: 2017-12-03
 * Time: 7:57 PM
 */

class Staff extends Controller
{
    public function index(){
        $user=$this->model('User');
        $this->view('home/staff');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $FullMname = $_POST['FullMname'];
            $EmailM = $_POST['EmailM'];
            $DateofBirthM = $_POST['DateofBirthM'];
            $PhoneM = $_POST['PhoneM'];
            $user->addstaff($FullMname,$EmailM,$DateofBirthM,$PhoneM);

        }
    }

}