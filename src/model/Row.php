<?php
namespace App\model;


class Row
{
    protected $id;
    protected $tenhang;
    protected $loaihang;
    protected $gia;
    protected $soluong;
    protected $mota;

    public function __construct($tenhang, $loaihang, $gia, $soluong, $mota)
    {
        $this->tenhang = $tenhang;
        $this->loaihang = $loaihang;
        $this->gia = $gia;
        $this->soluong = $soluong;
        $this->mota = $mota;

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTenhang()
    {
        return $this->tenhang;
    }

    /**
     * @param mixed $tenhang
     */
    public function setTenhang($tenhang): void
    {
        $this->tenhang = $tenhang;
    }

    /**
     * @return mixed
     */
    public function getLoaihang()
    {
        return $this->loaihang;
    }

    /**
     * @param mixed $loaihang
     */
    public function setLoaihang($loaihang): void
    {
        $this->loaihang = $loaihang;
    }

    /**
     * @return mixed
     */
    public function getGia()
    {
        return $this->gia;
    }

    /**
     * @param mixed $gia
     */
    public function setGia($gia): void
    {
        $this->gia = $gia;
    }

    /**
     * @return mixed
     */
    public function getSoluong()
    {
        return $this->soluong;
    }

    /**
     * @param mixed $soluong
     */
    public function setSoluong($soluong): void
    {
        $this->soluong = $soluong;
    }

    /**
     * @return mixed
     */
    public function getMota()
    {
        return $this->mota;
    }

    /**
     * @param mixed $mota
     */
    public function setMota($mota): void
    {
        $this->mota = $mota;
    }

}
