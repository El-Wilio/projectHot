<?php

class Attack {

    //attributes
 
    private $types = array();
    private $effect; 
    private $name; 
    private $damage; 
    private $modifier; //a callback to set modifiers to the attack if any
    
    public __construct($name, $types, $damage, $modifier, $description) {
        setName($name);       
        setTypes($types);
        setDamage($damage);
        setModifier($modifier);
    }

    //getter
    
    public getName(){
        return $this->$name
    }
    public getTypes(){
        return $this->$types
    }
    public getDamage(){
        return $this->$damage
    }
    public getModifier(){
        return $this->$modifier
    }
    public getDescription(){
        return $this->$description
    }
    
    //setter

    public setName($name) {
        //insert validation if necessary
        $this->$name = $name;
    }

    public setTypes(array $types) {
        foreach($types as &$type){
            if (!EnumType.isValid($type)) {
                //throw error here
            }
        }
        $this->$types = $types;
    }

    public setDamage(int $damage) {
        (if $damage % 10 != 0 || $damage < 0) {
            //throw error
        }
        $this->$damage = $damage;
    }

    //todo
    public setModifier($modifier) {
        $this->$modifier = "place holder"; 
    }

    //todo
     setEffect($effect) {
        $this->$effect = $effect;
     }
}

