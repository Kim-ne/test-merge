<?php
class nhanviensanxuat extends nhanvien //kế thừa
{
    // phạm vi sử dụng và thuộc tính thành viên
    // var <=> public, private, protected
    private $soluongsp,$tangca;
    private $dinhmucsp = 1000;
    private $dongia = 12000;

    function __construct($ma,$ten,$gioitinh,$ngaysinh,$ngayvaolam,$soluongsp,$tangca,$null=null) // thêm 1 giá trị null cho đồng bộ các pt với nhau
    {
        parent ::__construct($ma,$ten,$gioitinh,$ngaysinh,$ngayvaolam); //khởi tạo lớp cha để có tt sử dụng chung
        $this->soluongsp = $soluongsp;
        $this->tangca = $tangca;
    }
// xây dựng phương thức lơp
    function trocap()
    {
       if ($this->tangca == '1' ) 
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
    // phương thức get/set cho thành viên (thuộc tính)
    function get_dongia()
    {
        return $this->dongia/10;
    }

    function set_dongia($dongia)
    {
        // xử lý kiểm tra hợp lệ trước khi ghi vào thành viên
        $this->dongia = $dongia;
        return $this;
    }
    // static: biến phương của lớp thành dạng đc phép truy cập không cần new đối tượng ra, truy xuất nhanh
    static function testkhongnew()
    {
        return 'ok';
    }
    // nếu là static phải là static hết 
    // static function luongtinh()
    // {
    //     return self::luong();
    // }
}

?>


