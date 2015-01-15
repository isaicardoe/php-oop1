<?php
   
  class Player
{
      public $cleats;
      public $shingards;
      public $hairstyle;
      public $shirtnum;
      public $position;
       
      function __construct($cleats, $shingards, $hairstyle, $shirtnum, $position)
       {
            $this->cleats = $cleats;
            $this->shingards = $shingards;
            $this->hairstyle = $hairstyle;
            $this->shirtnum = $shirtnum;
            $this->position = $position;
        }
        function getName()
        {
            return "cleats: " . $this->cleats . "<br />" .
                   "shingards: " . $this->shingards . "<br />" .
                   "hairstyle: " . $this->hairstyle . "<br />" .
                   "shirtnum: " . $this->shirtnum . "<br />" .
                   "position: " . $this->position;
        }     
}
    $messi = new Player("messif50", "addidas", "messy", "10", "center forward");
    echo $messi->getName();
 