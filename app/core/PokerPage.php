<?php
class PokerPage {

    public $momo;
    public $plop;
    public $outMomo;

    /*
     * @return string
     *
     * ex :
     *      <?php $pp = new PokerPage(); ?>
     *      <?= $pp->pokerFoo(); ?>
     *
     */


    public function pokerFoo(){

        $this->momo = simplexml_load_file('app/poker.xml');

        $this->outMomo = '<section class="outerMask"><div class="row innerMask">';
        foreach($this->momo->link as $this->plop){

            $this->outMomo .= '<a href="'.$this->plop.'">'.trim($this->plop, '.html').'</a> ';
        }
        $this->outMomo .= '</div></section>';

        return $this->outMomo;
    }
}