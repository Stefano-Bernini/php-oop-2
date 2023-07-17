<?php
    class Utilities extends Product{
        public $materials;
        public $size;

        public function __construct(String $_name, String $_image, Float $_price, String $_category, Float $_size, String $_materials){
            parent::__construct($_name, $_image, $_price, $_category);
            $this->size = $_size;
            $this->materials = $_materials;
        }
    }
?>