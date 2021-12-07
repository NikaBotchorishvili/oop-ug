<?php

use config\Controller;

class ContactController extends Controller{

    public function index(){

        //  Contact Class Is Accessible Because We Call Page.php-s getModel() Method In index.php Which Loads 
        //  Particular Model For Particular Controller.
        $contact = new Contact();
        
        $this->data['menu'] = $contact->getMenu();
        $this->tpl = 'contact';
    }
}