<?php
    class Utilities extends Product{
        public $materials;
        public $size;

        public function __construct(String $_name, String $_image, Float $_price, String $_category, String $_materials, String $_size){
            parent::__construct($_name, $_image, $_price, $_category);
            $this->materials = $_materials;
            $this->size = $_size;
        }
    }
?>