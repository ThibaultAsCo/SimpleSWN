<?php
class PokerPage {

    public $momo;
    public $plop;
    public $outMomo;

    public function pokerFoo(){

        $this->momo = simplexml_load_file('app/poker.xml');

        $this->outMomo = '<section class="outerMask"><div class="row innerMask">';
        foreach($this->momo->link as $this->plop){

            $this->outMomo .= '<a href="'.$this->plop.'">'.trim($this->plop, '.php').'</a> ';
        }
        $this->outMomo .= '</div></section>';

        return $this->outMomo;
    }

    public function plop(){
        echo'lol';
    }
}