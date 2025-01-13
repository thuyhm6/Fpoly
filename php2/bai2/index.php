<?php 
    class Car {
        const BANHXE = 4;
        public $banhxe; // mọi nơi
        private $mauxe; // chỉ sử dụng được ở trong lớp
        protected $choNgoi; // sử dụng được ở trong lớp và lớp kế thừa

        public function getSoBanhXe() {
            return self::BANHXE;
        }

        /**
         * Get the value of mauxe
         */ 
        public function getMauxe()
        {
                return $this->mauxe;
        }

        /**
         * Set the value of mauxe
         *
         * @return  self
         */ 
        public function setMauxe($mauxe)
        {
                $this->mauxe = $mauxe;

                return $this;
        }

        public function setChoNgoi($choNgoiMoi) {
            if ($choNgoiMoi < 4) {
                return 'Chỗ ngồi phải từ 4 trở lên';
            } else {
                $this->choNgoi = $choNgoiMoi;
            }
        }

        public function getChoNgoi() {
            return 'Xe này có ' .$this->choNgoi . 'Chỗ ngồi';
        }
    }

    class electricCar extends Car {
         public function getMauXeDien() {
            return $this->getMauXe();
         }

         public function getChoNgoiXeDien() {
            return parent::$choNgoi;
         }

         public function getChoNgoi() {
            return 'Vì đây là xe điện nên sẽ có '. $this->choNgoi. 'Chỗ ngồi';
         }
        
    }

    //echo Car::BANHXE;
    $huyndai  = new Car();
    $huyndai->banhxe = 1;
    echo $huyndai->banhxe;
    // echo $huyndai->mauxe;
    $huyndai->setChoNgoi(3);
    //echo $huyndai->banhxe;
    //echo $huyndai->getChoNgoi();

    $vinfast = new electricCar();
    $vinfast->setChoNgoi(4);
    $vinfast->setMauxe('xanh');
    echo $vinfast->getMauXeDien();

    echo $vinfast->getChoNgoi();
?>