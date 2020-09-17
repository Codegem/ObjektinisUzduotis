<?php 
namespace userApp;

    class User{
        public $AsmensKodas;
        public $Vardas;
        public $Pavarde;
        public $Pareigos;
        public $El_Pastas;
        public $Darbo_Uzmokestis;
        public $Busena;
// metodas kuris privalomai kvieciamas kuriant objekta
    public function __construct($AsmensKodas, $Vardas, $Pavarde, $Pareigos, $El_Pastas, $Darbo_Uzmokestis, $Busena)
    {
        $this->AsmensKodas = $AsmensKodas;
        $this->Vardas = $Vardas;
        $this->Pavarde = $Pavarde;
        $this->Pareigos = $Pareigos;
        $this->ElPastas = $El_Pastas;
        $this->DarboUzmokestis = $Darbo_Uzmokestis;
        $this->Busena = $Busena;
    }
        
    public function showProfile(){
    $data[] = $this->AsmensKodas;
    $data[] = $this->Vardas;
    $data[] = $this->Pavarde;
    $data[] = $this->Pareigos;
    $data[] = $this->ElPastas;
    $data[] = $this->DarboUzmokestis;
    $data[] = $this->Busena;

    return $data;
    }
}