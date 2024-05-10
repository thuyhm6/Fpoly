<?php 
    //Tạo lớp sinh viên
    class sinhVien{
        //Khai báo thuộc tính
        public $ten;
        public $tuoi;
        public $lop;
        public $thongTin;
        //setter
        public function setTen($avbbb){
            $this->ten = $avbbb;
        }
        //getter
        public function getTen(){
            return $this->ten;
        }

        public function setThongTin($thongTin) {
            $this->thongTin = $thongTin;
        }

        function getThongTin(){
            $result  ="";
            foreach ($this->thongTin as $tt) {
                $result = $result . $tt;
            }
            return $result;
        }
        //Khai báo phương thức
        public function __construct($name="Trang", $age = 12, $class="WD19301")
        {
           $this->ten = $name;
           $this->tuoi = $age;
           $this->lop = $class;
        }
        public function copySinhVien($sv) {
            $this->ten = $sv->ten;
            $this->tuoi = $sv->tuoi;
            $this->lop = $sv->lop;
        }
        public function getInfo() {
            return "Tên: ".$this->ten."<br/>
            Tuổi: ".$this->tuoi."<br/>
            Lớp: ".$this->lop;
        }
        public function __destruct()
        {
            //echo "destruct được gọi ra";
        }
    }

    //Tạo đối tượng
    $sinhVienA = new sinhVien(18,"WD19301");
    $sinhVienB = new sinhVien();
    // $sinhVienB = $sinhVienA;
    //$sinhVienB->copySinhVien($sinhVienA);
    $arr = ['Tôi','Là','Ai'];
    $sinhVienA->setThongTin($arr);
    echo $sinhVienA->getThongTin();
    echo $sinhVienA->getTen();

    echo $sinhVienA->getInfo();
    echo "<br/>";
    echo $sinhVienB->getInfo();

    

?>