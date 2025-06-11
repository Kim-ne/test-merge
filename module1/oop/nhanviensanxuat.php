<?php
class nhanviensanxuat extends nhanvien //kế thừa
{
    // phạm vi sử dụng và thuộc tính thành viên
    // var <=> public, privite, protected
    var $soluongsp,$tangca;
    var $dinhmucsp = 1000;
    var $dongia = 12000;

    function __construct($ma,$ten,$gioitinh,$ngaysinh,$ngayvaolam,$soluongsp,$tangca,$null=null) // thêm 1 giá trị null cho đồng bộ các pt với nhau
    {
        parent ::__construct($ma,$ten,$gioitinh,$ngaysinh,$ngayvaolam); //khởi tạo lớp cha để có tt sử dụng chung
        $this->soluongsp = $soluongsp;
        $this->tangca = $tangca;
    }
// xây dựng phương thức lơp
    function trocap()
    {
       if ($this->tangca == 'co' ) 
       {
            return  0.05 * $this->luong();
       }
             return 0;
       
    }

    function thuongphat()
    {
        return ($this->soluongsp - $this->dinhmucsp)*10000;
    }

    function luong()
    {
        return  $this->soluongsp * $this->dongia ; // đa hình: cùng 1 phương thức nhưng nhiều cách xử lý khác cho từng đối tượng con
    }

    // public, privite, protected
    function xemten()
    {
        echo $this->ten;
    }

}

// $nvM = new nhanviensanxuat('2','M','nu','08/08/1994','05/10/2022', '1100', 'co');
// $nvM->xem();
?>


