<?php
    class Game extends Product{
        public $size;
        public $features;

        public function __construct(String $_name, String $_image, Float $_price, String $_category, String $_size, String $_features){
            parent::__construct($_name, $_image, $_price, $_category);
            $this->size = $_size;
            $this->features = $_features;
        }
    }
?>