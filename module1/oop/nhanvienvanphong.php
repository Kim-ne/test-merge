<?php
class nhanvienvanphong extends nhanvien //kế thừa
{
    // phạm vi sử dụng và thuộc tính thành viên
    private $socon,$songayvang,$hesoluong;
    private $luongcoban = 4000000 ;
    private $dinhmucvang = 12;

    function __construct($ma,$ten,$gioitinh,$ngaysinh,$ngayvaolam,$socon,$songayvang,$hesoluong)
    {
        parent ::__construct($ma,$ten,$gioitinh,$ngaysinh,$ngayvaolam); //khởi tạo lớp cha để có tt sử dụng chung
        $this->socon = $socon;
        $this->songayvang = $songayvang;
        $this->hesoluong = (float)$hesoluong;
    }
// xây dựng phương thức lơp
    function trocap()
    {
       if ($this->gioitinh == 0 && $this->socon > 2) 
       {
            return  1000000 * ($this->socon - 2);
       } else{
            return 0;
       }
    }

    function thuongphat()
    {
    
        return ($this->dinhmucvang - $this->songayvang)*100000;
    }

    function luong()
    {
        
        return  $this->hesoluong * $this->luongcoban ; // đa hình: cùng 1 phương thức nhưng nhiều cách xử lý khác cho từng đối tượng con
    }
    function xemten()
    {
        echo $this->ten;
    }

}

// $nvK = new nhanvienvanphong('1','Kim','nam','08/08/1994','05/10/2022',socon: '0',songayvang: '3',hesoluong: '3');
// $nvK->xem();

?>

