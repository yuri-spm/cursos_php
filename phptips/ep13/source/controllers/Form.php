<?php


namespace Source\controllers;


use League\Plates\Engine;
use Source\models\User;

class Form
{
    private $view;
    public function __construct($route)
    {
        $this->view = Engine::create(
            dirname(__DIR__, 2)."/theme",
            "php"
        );

        $this->view->addData(["route" => $route]);
    }

    public function home()
    {
        echo $this->view->render("home",
            [
                "users" => (new User())->find()->order("first_name")->fetch(true)
            ]);
    }

    public function create(array $data): void
    {
        $userData = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
        if (in_array("", $userData)) {
            $callback["message"] = message("Oops! Por favor, preencha todos os campos!", "error");
            echo json_encode($callback);
            return;
        }

        $user = new User();
        $user->first_name = $userData["first_name"];
        $user->last_name = $userData["last_name"];
        $user->save();

        $callback["message"] = message("Usuário cadastrado com sucesso!", "success");
        $callback["user"] = $this->view->render("user", ["user" => $user]);
        echo json_encode($callback);
        return;
    }

    public function delete(array $data): void
    {
        if(empty($data["id"])){
            return;
        }

        $id = filter_var($data["id"], FILTER_VALIDATE_INT);
        $user =(new User())->findById($id);
        if($user){
            $user->destroy();
        }


       // $callback["data"] = $data;
        //echo json_encode($callback);

        $calback["remove"] = true;
        echo json_encode($calback);
    }
}