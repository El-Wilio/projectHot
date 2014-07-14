<?php

class PokemonCard extends Card {
	//attributes

    private $ability; 

    private $type;
    private $hp;
    private $weakness = SplFixedArray(2); //first value is type, second is modifier
    private $resistance = SplFixedArray(2); //first value is type, second is modifier
    private $attacks = array(); 
	//Missing retreat, IsEX, IsMega, customModifier (like Plasma, Rocket, owner, etc),  Evolves from, Evolution stage, height, weight, and attachedCards
	

    //constructor

	function __construct(string $id, string $name, int $type, int $hp, array $weakness = null, array $resistance = null, ...$attacks) {
        parent::__construct($id, $name);
        $this->$type = $type;
        $this->$hp = $hp;
        setWeakness($weakness);
        setResistance($resistance);
        foreach($attacks as $attack) {
            setAttack($attack);
        }  	
	}

    //getter

    //setter

    public function setWeakness(array $weakness) {
        if(is_null($weakness)) return 0;

        if(!EnergyType.isValid($weakness[0])) {
            //out of the energy bound defined in EnergyType.php, should throw error here
        }

        if(!preg_match('/^*{1}[2]{1}$/', $weakness[1])) {
            //doesn't match a valid modifier, should throw error here
        }

	    $this->$weakness = $weakness;
    }

    public function setResistance(array $resistance) {
        if(is_null($resistance)) return 0;

        if(!EnergyType.isValid($weakness[0])) {
            //out of the energy bound defined in EnergyType.php, should throw error here
        }

        if(!preg_match('/^-{1}[1-9]{1}0{1}$/', $resistance[1])) {
            //doesn't match a valid modifier, should throw error here
        }

	    $this->$resistance = $wresistance;
    }

    public function setAttack(Attack $attack) {
        $this->$attack.push($attack); //That's not how you array push :P array_push($array, $item)
    }

}

?>
