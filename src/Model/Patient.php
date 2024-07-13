<?php

namespace Majid\TestSmartyPhp\Model;

class Patient
{
    private $id;
    private $first_name;
    private $last_name;
    private $phone;
    private $date;
    private $doctor;
    private $department;
    private $img_url;

    public function __construct($id, $first_name, $last_name, $phone, $date, $doctor, $department, $img_url)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->phone = $phone;
        $this->date = $date;
        $this->doctor = $doctor;
        $this->department = $department;
        $this->img_url = $img_url;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    function getFullName()
    {
        return $this->first_name . " " . $this->last_name;;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getDate()
    {
        return $this->date;
    }


    public function getDoctor()
    {
        return $this->doctor;
    }

    public function getDepartment()
    {
        return $this->department;
    }

    public function getImage()
    {
        return $this->img_url;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function setDoctor($doctor)
    {
        $this->doctor = $doctor;
    }

    public function setDepartment($department)
    {
        $this->department = $department;
    }

    public function setImage($img_url)
    {
        $this->img_url = $img_url;
    }
}
