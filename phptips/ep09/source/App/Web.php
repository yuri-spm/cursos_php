<?php


namespace Source\App;

use League\Plates\Engine;
use Source\Models\User;
use Source\Support\Seo;


class Web
{
    private $view;
    /** @var $seo Seo  */
    private $seo;
    public function __construct()
    {
        $this->view = Engine::create(__DIR__."/../../theme", "php");
        $this->seo = new Seo();
    }

    /**
     * home
     */
    public function  home() : void //ok
    {
        $users = (new User())->find()->fetch(true);
        $head = $this->seo->render(
            "Home |" .SITE,
            "Lorem ipsum dolor sit amet.",
            url(),
            "https://via.placeholder.com/1200x628.png?text=Home+Cover"
        );
        echo $this->view->render("home",[
            "head"=> $head,
            "users" => $users
        ]);
    }

    public function contact(): void //nao redireciona
    {
        $head = $this->seo->render(
            "Contato |" .SITE,
            "Lorem ipsum dolor sit amet.",
            url("contato"),
            "https://via.placeholder.com/1200x628.png?text=Contato+Cover"
        );
        echo $this->view->render("contact", [
            "head"=> $head,
        ]);
    }

    /**
     * @param array $data
     */
    public function error(array $data): void //nao redireciona
    {
        $head = $this->seo->render(
            "Error {$data['errcode']}|" .SITE,
            "Lorem ipsum dolor sit amet.",
            url("ops/{$data['errcode']}"),
            "https://via.placeholder.com/1200x628.png?text=Error+{$data['errcode']}"
        );
        echo $this->view->render("error", [
            "head"=> $head,
            "error" => $data['errcode']
        ]);
    }

}


