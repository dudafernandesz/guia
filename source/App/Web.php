<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\User;
use Source\Models\Faq;
use Source\Models\Category;
use Source\Models\Product;

class Web
{
    private $view;
    private $categories;

public function __construct()
    {
        $this->view = new Engine(__DIR__ . "/../../themes/web","php");
        $category = new Category();
        $this -> categories = $category->selectAll();
    }

    public function home ()
    {
        //echo "<h1>Eu sou a Home</h1>";
        echo $this->view->render("home",["categories" => $this->categories]);
    }

    public function about ()
    {
        echo $this->view->render("about",["categories" => $this->categories]);
    }

    public function register() : void
    {
        echo $this->view->render("register",["categories" => $this->categories]);
    }

    public function login() : void
    {
        echo $this->view->render("login",["categories" => $this->categories]);
    }

    public function books() : void
    {
        echo $this->view->render("books",["categories" => $this->categories]);
    }

    public function profile() : void
    {
        echo $this->view->render("profile",["categories" => $this->categories]);
    }

    public function comunity() : void
    {
        echo $this->view->render("comunity",["categories" => $this->categories]);
    }

    public function contact() : void
    {
        echo $this->view->render("contact",["categories" => $this->categories]);
    }

    public function faqs() : void
    {
        echo $this->view->render("faqs",["categories" => $this->categories]);
    }
    public function product (array $data) : void
    {
      
        $products = new Product();

        
        if(!empty($data["categoryName"])){
            
            echo $this -> view->render("product",[
                "products" => $products->selectByCategory($data["categoryName"]),
               "categories" => $this -> categories
            ]);
            
            return;
        }

        echo $this -> view->render("product",[
            "products" => $products->selectAll(),
           "categories" => $this -> categories
        ]);
    }
    public function error(array $data)
    {
        var_dump($data);
    }
}