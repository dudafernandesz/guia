<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\User;
use Source\Models\Faq;
use Source\Models\Category;
use Source\Models\Product;

class App
{
    private $view;
    private $categories;

    public function __construct()
    {
        $this->view = new Engine(__DIR__ . "/../../themes/app","php");
        $category = new Category();
        $this -> categories = $category->selectAll();
    }

    public function home()
    {
        echo $this->view->render("home",["categories" => $this->categories]);
    }

    public function profile()
    {
        echo $this->view->render("profile",["categories" => $this->categories]); 
    }

    public function messages ()
    {
        echo $this->view->render("messages",["categories" => $this->categories]);
    }
    public function books ()
    {
        echo $this->view->render("books",["categories" => $this->categories]);
    }
    public function configs ()
    {
        echo $this->view->render("configs",["categories" => $this->categories]);
    }
    public function news ()
    {
        echo $this->view->render("news",["categories" => $this->categories]);
    }
}