<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./style.css">
  <title>Document</title>
</head>
<body>
<div class="container">
<div class="imgBackground1">
  <img class = "imgBack" src="/bild//zoo2.png" alt="">
</div>


</div>

<?php
//session_start();

    if (!empty($_POST)) {    
      $nrOfApes = $_POST['ape'];  
      $nrOfGiraffes = $_POST['giraffe'] ;
      $nrOfTigers = $_POST['tiger'];
      $nrOfCoconuts = $_POST['coconut'];      
    }
    
       
    abstract class Zoo {
      
      public $name;      
      protected $sound;
      protected $img;


      public function draw() {
        echo "<img src='/bild/".$this->img."' class='imgBackground1' onclick='alert(\"".$this->makeSound()."\");' >";        

    }
    
      abstract public function makeSound() :string;
    }
  

    abstract class Animals extends Zoo {
      protected $img;
      public $name;  
      public function draw() {
          if ($this->name = "ape" ) {
            
            $height = rand(100,200).'px';
            $width = rand(50,200).'px';
            $top = rand(300,500).'px';
            $left = rand(10,1200).'px';

            echo "<img src='/bild/".$this->img."' class ='ape' style= 'height: $height; width: $width; top: $top; left: $left;' onclick='alert(\"".$this->makeSound()."\");' >";            
          } elseif ($this->name = "tiger" ) {
            echo "<img src='/bild/".$this->img."' class ='tiger' style= 'height: $height; width: $width; top: $top; left: $left;' onclick='alert(\"".$this->makeSound()."\");' >";            
          } elseif ($this->name = "giraffe" ) {
            echo "<img src='/bild/".$this->img."' class ='giraffe' style= 'height: $height; width: $width; top: $top; left: $left;' onclick='alert(\"".$this->makeSound()."\");' >";            
          } elseif ($this->name = "coconut" ) {
            echo "<img src='/bild/".$this->img."' class ='coconut' style= 'height: $height; width: $width; top: $top; left: $left;' onclick='alert(\"".$this->makeSound()."\");' >";            
          }           
      }  
      abstract public function makeSound() :string;      
  }

  abstract class Plants extends Zoo {
    protected $img;
    public $name; 
    
    public function draw() {
      $height = rand(30,60).'px';
      $width = rand(30,60).'px';
      $top = rand(500,600).'px';
      $left = rand(10,1200).'px';
        echo "<img src='/bild/".$this->img."' class ='coconut' style= 'height: $height; width: $width; top: $top; left: $left;' onclick='alert(\"".$this->makeSound()."\");' >";            
    }   
    
}

    class Ape extends Animals {
      protected $img = "ape.png";            
      public function __construct($name) {
        $this->name = "ape";
        $this->sound = "Wohoohooha";
      }
           
      public function makeSound() : string{
        return $this->sound;
      }
    }
    
    class Tiger extends Animals {
      protected $img = "tiger.png";
      public function __construct($name) {
        $this->name = "tiger";
        $this->sound = "Wawooooooo";
      }

        
      public function makeSound() : string{
        return $this->sound;
      }
    }

    class Giraffe extends Animals {
      protected $img = "giraffe.png";
      public function __construct($name) {
        $this->name = "giraffe";
        $this->sound = "Wiwiwiwiwi";
      }

      public function makeSound() : string {
        return $this->sound;
      }
    }
    class Coconut extends Plants {
      protected $img = "coconut.png";
      public function __construct($name) {
        $this->name = "coconut";        
        $this->sound = "";
      }

          
      public function makeSound() : string {
        return $this-> sound;
      }    
    }

    $animalList = array();
    for ($i=0; $i < $nrOfApes; $i++) { 
      $ape = new Ape("Staffed");
      $ape -> makeSound();
      $ape -> draw();
      array_push($animalList,$ape);
    }
        
    for ($i=0; $i < $nrOfGiraffes; $i++) { 
      $giraffe = new Giraffe("Stefan");
      $giraffe -> makeSound();
      $giraffe -> draw();
      array_push($animalList,$giraffe);
    }

    for ($i=0; $i < $nrOfTigers; $i++) { 
      $tiger = new Tiger("Olla");
      $tiger -> makeSound();
      $tiger -> draw();
      array_push($animalList,$tiger);
    }

    for ($i=0; $i < $nrOfCoconuts; $i++) { 
      $Coconut = new Coconut("Stefanie");
      $Coconut-> makeSound();
      $Coconut -> draw();
      array_push($animalList,$Coconut);
    }


    /* for ($i=0; $i < count($animalList) ; $i++) {
      $animal = $animalList[$i];
      $ape-> makeSound();
      $ape -> draw();
      echo $animal->name."</br>";
    } */
        
 ?>
</body>
</html>


