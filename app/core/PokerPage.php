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

        $this->outMomo = '<section class="outerMask col-md-12"><div class="row innerMask">';
        foreach($this->momo->linkablePokerPage as $this->plop){

            $this->outMomo .= '<a href="'.$this->plop->url.'">'.$this->plop->name.'</a> ';
        }


        $this->outMomo .= '</div></section>';


        return $this->outMomo;
    }


    public function pokerSiteMap(){

        $this->momo = simplexml_load_file('app/poker.xml');

        $this->outMomo = '<ul>';
        foreach($this->momo->linkablePokerPage as $this->plop){

            $this->outMomo .= '<li><a href="'.$this->plop->url.'">'.$this->plop->name.'</a></li>';
        }


        $this->outMomo .= '</ul>';


        return $this->outMomo;
    }
}
