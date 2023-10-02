<?php
class vehicule
{
    public string $couleur;

    //ou protected, a ce moment la getter setter pr recup
    public string $marque;

    public function __construct(string $couleur, string $marque)
    {
        $this->couleur = $couleur;
        $this->marque = $marque;
    }


    public function roule()
    {
        echo "Mon vehicule roule";
    }
}

class voiture extends vehicule
{
    public string $typevehicule;

    public function __construct(string $typevehicule)
    {
       parent::__construct( $couleur, $marque)
    }
}