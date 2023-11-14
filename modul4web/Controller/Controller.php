<?php
namespace Controller;
include_once "Traits/ResponseFormatter.php";

class Controller
{
    // VARIABEL ATRIBUT
    public $controllerName; // Menggunakan "public" untuk mendeklarasikan variabel
    public $controllerMethod; // Menggunakan "public" untuk mendeklarasikan variabel

    // METHOD UNTUK MENGAMBIL SEMUA ATRIBUT
    public function getControllerAttribute() // Menggunakan "public function" untuk mendefinisikan method
    {
        return [
            "ControllerName" => $this->controllerName, // Menggunakan "ControllerName" yang benar
            "Method" => $this->controllerMethod
        ];
    }
}
