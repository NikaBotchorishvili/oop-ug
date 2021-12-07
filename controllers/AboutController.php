<?php

use config\Controller;

class AboutController extends Controller{

    public function index(){
        
        //  About Class Is Accessible Because We Call Page.php-s getModel() Method In index.php Which Loads 
        //  Particular Model For Particular Controller.
        $about = new About();

        $this->data['menu'] = $about->getMenu();
        $this->tpl = "about";
    }
}