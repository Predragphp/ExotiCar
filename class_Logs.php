<?php
class Logs
{
    public $tekst;
    public function __construct($a)
    {
        $this->tekst=$a;
    }
    public function dodajLog()
    {
        $f=fopen("logovanje.txt","a");
        fwrite($f, date("d.m.Y H:i:s", time())." - ".$this->tekst);
        fclose($f);
    }
    public function dodajVestLog()
    {
        $f=fopen("vest.txt","a");
        fwrite($f, date("d.m.Y H:i:s", time())." - ".$this->tekst);
        fclose($f);
    }
    public function dodajDolazak()
    {
        $f=fopen("dolasci.txt","a");
        fwrite($f, date("d.m.Y H:i:s", time())." - ".$this->tekst);
        fclose($f);
    }
}
?>