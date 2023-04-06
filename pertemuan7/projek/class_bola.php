<?php
class Bola
{
    public $jari_jari;

    public function __construct($r)
    {
        $this->jari_jari = $r;
    }

    public function hitungLuasPermukaan()
    {
        $luas_permukaan = 4 * pi() * pow($this->jari_jari, 2);
        return $luas_permukaan;
    }

    public function hitungVolume()
    {
        $volume = (4/3) * pi() * pow($this->jari_jari, 3);
        return $volume;
    }
}
$bola1 = new Bola(14);
echo "Luas permukaan bola = " . $bola1->hitungLuasPermukaan();
echo "<br>";
echo "Volume bola = " . $bola1->hitungVolume();
?>