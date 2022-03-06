<?php


class HomeController
{
    public function index()
    {
        view("Home");
    }

    public function hello($id)
    {
        echo $id;
    }
}
