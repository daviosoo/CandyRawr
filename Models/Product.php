<?php

    class Product{

        public $name;
        public $brand;
        public $price;
        Public $description;
        Public $photo;

        public function __construct($nameform,$branform,$priceform,$descriptionform,$photoform)
        {
            $this->name=$nameform;
            $this->brand=$branform;
            $this->price=$priceform;
            $this->description=$descriptionform;
            $this->photo=$photoform;

        }

        public function register(){

            $consultaSQL="INSERT INTO products(name,brand,price,description,photo)
            VALUES ('$this->name','$this->brand','$this->price','$this->description','$this->photo')";

            return $consultaSQL;
        }

        public function search(){

            $consultaSQL="SELECT * FROM products";
            return $consultaSQL;
        }

        public function remove($id){
            $consultaSQL="DELETE FROM products WHERE id='$id'";
            return $consultaSQL;
        }

        public function edit($id){

            $consultaSQL="UPDATE products SET name='$this->name',description='$this->description',photo='$this->photo' WHERE id='$id'";

            return $consultaSQL;

        }

    }

?>