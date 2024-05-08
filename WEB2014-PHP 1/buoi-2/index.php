<?php 
    //Khai báo lớp
    class sinhVien{
        //Thuộc tính
        public $lop = "WD19301";
        public $ten;
        private $tuoi;

        //Phương thức
        public function setTuoi($age){
            if ($age >= 18) {
                $this->tuoi = $age;
            }
        }

        public function getTuoi() {
            return $this->tuoi;
        }
        
        public function yeu() {
            return "Yêu là love";
        }
    }
    class sinhVienHuongNoi extends sinhVien{
        public function yeu() {
            return "sinh viên ".$this->ten." thuộc lớp ".$this->lop." ".$this->getTuoi()." tuổi, đang yêu đơn phương";
        }
    }

    class sinhVienHuongNgoai extends sinhVien{
        public function yeu(){
            return "sinh viên ".$this->ten." thuộc lớp ".$this->lop." tỏ tình trực tiếp";
        }
    }
    //Khai báo đối tượng
    $sinhVienA = new sinhVienHuongNoi();
    $sinhVienA->ten = 'Quyền';
    $sinhVienA->setTuoi(15);
    echo $sinhVienA->yeu();
    

    $sinhVienB = new sinhVienHuongNgoai();
    echo "<br/>";
    $sinhVienB->ten = "Tuyên";
    $sinhVienB->lop = "DM19301";
    echo $sinhVienB->yeu();

    echo "<br/>";
    var_dump($sinhVienB instanceof sinhVien);
?>