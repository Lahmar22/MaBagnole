<?php
class Reservation{
    private $idReservation;
    private $dateDebut;
    private $dateFin;
    private $lieuPrise;
    private $lieuRetour;
    private $statut;

    public function __construct($idReservation, $dateDebut, $dateFin, $lieuPrise, $lieuRetour, $statut) {
        $this->idReservation = $idReservation;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->lieuPrise = $lieuPrise;
        $this->lieuRetour = $lieuRetour;
        $this->statut = $statut;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function __set($property, $value) {
        $this->$property = $value;
    }
}