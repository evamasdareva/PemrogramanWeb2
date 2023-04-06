<?php
class Balok
{
    public $panjang;
    public $lebar;
    public $tinggi;

    public function __construct($p, $l, $t)
    {
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }

    public function hitungLuasPermukaan()
    {
        $luas_permukaan = 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
        return $luas_permukaan;
    }

    public function hitungVolume()
    {
        $volume = $this->panjang * $this->lebar * $this->tinggi;
        return $volume;
    }
}

$balok1 = new Balok(18, 6, 11);
echo "Luas permukaan balok = " . $balok1->hitungLuasPermukaan();
echo "<br>";
echo "Volume balok = " . $balok1->hitungVolume();
?>