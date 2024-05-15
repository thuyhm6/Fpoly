<?php
    class Order {
   

    public function __construct(public  $maHoaDon,
    public  $ngayDatHang,
    public  $tenKhachHang,
    public $cacSanPham = []) {}

    //Thêm sản phẩm
    public function addProduct($tenSanPham,  $giaSanPham) {
        $this->cacSanPham[] = [ 
                        'ten_san_pham'=>$tenSanPham,
                        'gia_san_pham'=>$giaSanPham
                     ];
             }

    //Sửa sản phẩm
    public function updateProductByTen($tenSanPham) {
        foreach ($this->cacSanPham as $key=>$value) {
            if ($value['ten_san_pham'] == $tenSanPham) {
                $this->cacSanPham[$key] = [
                    'ten_san_pham' => 'Wave RSX',
                    'gia_san_pham' => 23000000
                ];
            };
        }
    }

    //Xóa sản phẩm
    public function deleteProductByTen($tenSanPham) {
        foreach ($this->cacSanPham as $key=>$value) {
            if ($value['ten_san_pham'] == $tenSanPham) {
                unset($this->cacSanPham[$key]);
            };
        }
    }

    //Tính tổng tiền đơn hàng
    public function getTotalPrice() {
        $totalPrice = 0;
        foreach ($this->cacSanPham as $sanPham) {
            $totalPrice += $sanPham['gia_san_pham'];
        }
        return $totalPrice;
    }

    //Lấy thông tin đơn hàng
    public function getOrderInfo() {
        $orderInfo = "Mã đơn hàng: " .$this->maHoaDon. "<br/>".
                     "Ngày đặt hàng: ".$this->ngayDatHang."<br/>".
                     "Tên khách hàng: ".$this->tenKhachHang."<br/>".
                     "Danh sách phẩm: <br/>";
        
        foreach ($this->cacSanPham as $sanPham) {
            $orderInfo = $orderInfo ."Tên sản phẩm: {$sanPham['ten_san_pham']}<br/> Giá sản phẩm: {$sanPham['gia_san_pham']}<br/>";
        }
        return $orderInfo;
    }
}

    //Tạo mảng các sản phẩm
    $cacSanPham1 = [
        ['ten_san_pham' => 'SH', 'gia_san_pham' => 110000000],
        ['ten_san_pham' => 'Wave', 'gia_san_pham' => 22000000],
        ['ten_san_pham' => 'Cup', 'gia_san_pham' => 20000000]
    ];
    


    $order = new Order("1", "2024/05/03", "Lê Hiểu Phước", $cacSanPham1);
    //$order = new Order("2", "2024/05/10", "Lê Hiểu Phước", $cacSanPham2);
    //$order->addProduct("Dream", 20000000);
    echo "<pre>";
    
    $order->updateProductByTen("Wave"); //Sửa sản phẩm
    $order->deleteProductByTen('SH'); //Xóa sản phẩm
    print_r($cacSanPham1);
    echo $order->getOrderInfo();
    echo "Tổng: " . $order->getTotalPrice()." VND";

    //Thêm phương thức sửa thông tin sản phẩm với tên sản phẩm là Wave thành Wave RSX và giá là 23000000
?>