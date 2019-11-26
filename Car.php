<?php

// Car.php

class Car

{
    /**
     * @var integer
     */
    private $nbWheels;


    /**
     * @var integer
     */
    private $currentSpeed;


    /**
     * @var string
     */
    private $color;


    /**
     * @var integer
     */
    private $nbSeats;

    /**
     * @var string
     */
    private $energy;


    /**
     * @var integer
     */
    private $energyLevel;



    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }




    public function forward(): string
    {
        $this->currentSpeed += 5;

        return "Go RUN FOREST! RUN !";
    }




    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }




    public function start()
    {
        $this->currentSpeed = 10;
        return " You drive !";
    }





    /**
     * @return string
     */
    public function getNbWheeels(): string
    {
        return $this->getNbWheeels;
    }



    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     * @return void
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }

    }


    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }


    /**
     * @param string $color
     */
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getNbSeats(): string
    {
        return $this->nbSeats;
    }



    /**
     * @return string
     */
    public function getEnergie(): string
    {
        return $this->energy;
    }

    /**
     * @return string
     */
    public function getEnergieLevel(): string
    {
        return $this->energyLevel;
    }




}
