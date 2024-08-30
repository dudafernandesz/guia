<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\Category;
use Source\Models\User;
use Source\Models\Faq;
use Source\Models\Product;

class Admin
{
    private $view;
    private $categories;

    public function __construct()
    {
        $this->view = new Engine(__DIR__ . "/../../themes/adm","php");
        $category = new Category();
        $this -> categories = $category->selectAll();
    }

    public function home ()
    {
        //echo "<h1>Eu sou a Home...</h1>";
        echo $this->view->render("home",["categories" => $this->categories]);
    }

    public function books () {
        echo $this->view->render("books",[]);
    }
    

    public function dash ()
    {
       echo $this->view->render("dash",[]);
    }


    public function login (array $data) : void 
    {
       echo $this->view->render("login",["categories" => $this->categories]); 
    }


    public function newProduct (array $data) : void 
    {
        $products = new Product();
        echo $this->view->render("newProduct",[
            "products" => $products->selectAll(),
            "categories" => $this->categories
        ]);
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
}