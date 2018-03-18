<?php
class person {
    private $mounth;
    public function __construct($newMounth){
        $this->mounth = $newMounth;
    }
    public function horoscope(){
        if(101<= $this->mounth && $this->mounth <=119){
            return "img/capricorn.png";

        }elseif(120<= $this->mounth && $this->mounth <=218){
            return "img/vattumannen.png";

        }elseif(219<=$this->mounth && $this->mounth <=320){
            return "img/fiskarna.png";

        }elseif(321<=$this->mounth && $this->mounth <=419){
            return "img/aries.png";

        }elseif(420<=$this->mounth && $this->mounth <=521){
            return "img/oxen.png";

        }elseif(522<=$this->mounth && $this->mounth <=621){
            return "img/gemini.png";

        }elseif(622<=$this->mounth && $this->mounth <=722){
            return "img/canser.png";

        }elseif(723<=$this->mounth && $this->mounth <=822){
            return "img/leo.png";

        }elseif(823<=$this->mounth && $this->mounth <=922){
            return "img/virgo.png";

        }elseif(923<=$this->mounth && $this->mounth <=1022){
            return "img/libra.png";

        }elseif(1023<=$this->mounth && $this->mounth <=1121){
            return "img/scorpio.png";

        }elseif(1122<=$this->mounth && $this->mounth <=1221){
            return "img/sagittarius.png";

        }else{
            return "img/capricorn.png";

        }

    }
    

}
?>