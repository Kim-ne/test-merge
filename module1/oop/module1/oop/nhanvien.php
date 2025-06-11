<?php
 abstract class nhanvien
{
    // privite: chỉ sử dụng nội bộ lớp
    // protected: chỉ đc dùng khi có kế thừa
    // public: sử dụng đc cho tất cả mọi nơi
    protected $ma,$ten,$gioitinh,$ngaysinh,$ngayvaolam;
    // thuộc tính property
    function __construct($ma,$ten,$gioitinh,$ngaysinh,$ngayvaolam)
    {
        $this->ma = $ma;
        $this->ten = $ten;
        $this->gioitinh = $gioitinh;
        $this->ngaysinh = $ngaysinh;
        $this->ngayvaolam = $ngayvaolam;
    }
// xây dựng phương thức lơp
// các phương thức ở dưới đóng vai trò áp đặt cấu trúc cho con phải khai cụ thể ra
    abstract function trocap();

    abstract function thuongphat();


    abstract function luong();

    function thucnhan()
    {
       return ($this->luong()+$this->trocap()+$this->thuongphat());
    }

    function xem()
    {
        var_dump($this);
        echo '<br>Lương:' .$this->luong();
        echo '<br>Trợ cấp:' .$this->trocap();
        echo '<br>Thưởng/phạt:' .$this->thuongphat();
        echo '<br>Thực nhận:' .$this->thucnhan();
        
    }

}