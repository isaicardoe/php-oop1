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
  
    class Boss
  {
      public $gun;
      public $clicks;
      public $burners;

      function __construct($gun, $clicks, $burners)
       {
            $this->gun = $gun;
            $this->clicks = $clicks;
            $this->burners = $burners;

        }
        function getName()
        {
            return "gun: " . $this->gun . "<br />" .
                   "clicks: " . $this->clicks . "<br />" .
                   "burners: " . $this->burners;
        }     
}
    $GreenLights = new Boss("glock", "45mag", "ghost gun");
    echo $GreenLights->getName();
 