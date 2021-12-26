<?php

use config\Controller;

class HomeController extends Controller{

    public function index(){
        
        //  Home Class Is Accessible Because We Call Page.php-s getModel() Method In index.php Which Loads 
        //  Particular Model For Particular Controller.
        $home = new Home();

        $this->data['menu'] = $home->getMenu();
        $this->data['services'] = $home->getAllServices();
        $this->tpl = "home";
    }
}