<?php

use config\Controller;

class ContactController extends Controller{

    public function index(){
        $this->tpl = 'contact';
    }
}