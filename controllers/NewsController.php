<?php

use config\Controller;

class NewsController extends Controller{

    public function index(){
        $news = new News();

        $this->data['menu'] = $news->getMenu();
        $this->data['news'] = $news->getAllNewsItems();
        $this->tpl = "news";

    }

}