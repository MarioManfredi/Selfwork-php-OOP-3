<?php

class Vertebrate{
    
    public function __construct(){
        $this->printVertebrate();
    }

    protected function printVertebrate(){
        echo "Sono un animale Vertebrato.\n";
    }
}

class WarmBlooded extends Vertebrate{

    public function __construct(){
        parent::__construct();
        $this->printWarmBlooded();
    }

    protected function printWarmBlooded(){
        echo "Sono un animale a sangue caldo.\n";
    }
}

class ColdBlooded extends Vertebrate{

    public function __construct(){
        parent::__construct();
        $this->printColdBlooded();
    }

    protected function printColdBlooded(){
        echo "Sono un animale a sangue freddo.\n";
    }
}

class Mammal extends WarmBlooded{

    public function __construct(){
        parent::__construct();
        $this->printMammal();
    }

    protected function printMammal(){
        echo "Ruggito!\n";
    }
}

class Bird extends WarmBlooded{

    public function __construct(){
        parent::__construct();
        $this->printBird();
    }

    protected function printBird(){
        echo "Cipp!\n";
    }
}

class Fish extends ColdBlooded{

    public function __construct(){
        parent::__construct();
        $this->printFish();
    }

    protected function printFish(){
        echo "Splash!\n";
    }
}

class Reptile extends ColdBlooded{

    public function __construct(){
        parent::__construct();
        $this->printReptile();
    }

    protected function printReptile(){
        echo "ssssss!\n";
    }
}

class Amphibian extends ColdBlooded{

    public function __construct(){
        parent::__construct();
        $this->printAmphibian();
    }

    protected function printAmphibian(){
        echo "glll!\n";
    }
}

$fish = new Fish();
$frog = new Amphibian();
$bird = new Bird();