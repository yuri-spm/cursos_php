<?php


namespace Source\App;

use League\Plates\Engine;
use Source\Models\User;


class Web
{
    private $view;
    public function __construct()
    {
        $this->view = Engine::create(__DIR__."/../../theme", "php");
    }

    /**
     * home
     */
    public function  home() : void //ok
    {
        $users = (new User())->find()->fetch(true);
        echo $this->view->render("home",[
            "title"=> "Home |" .SITE,
            "users" => $users
        ]);
    }

    public function contact(): void //nao redireciona
    {
        echo $this->view->render("contact", [
            "title" => "Contato |" . SITE,
        ]);
    }

    /**
     * @param array $data
     */
    public function error(array $data): void //nao redireciona
    {
        echo $this->view->render("error", [
            "title" => "Error {$data['errcode']} |" . SITE,
            "error" => $data['errcode']
        ]);
    }

}