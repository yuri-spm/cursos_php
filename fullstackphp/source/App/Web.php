<?php


namespace Source\App;


use Source\Core\Controller;
use Source\Support\Pager;

/**
 * Class Web
 * @package Source\App
 */
class Web extends Controller
{
    /**
     * Web constructor.
     */
    public function __construct()
    {
        parent::__construct(__DIR__."/../../themes/".CONF_VIEW_THEME."/");
    }

    /**
     * SITE HOME
     */
    public function home():void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.jpg")
        );
        echo $this->view->render("home",[
            "head" => $head,
            "video" => "lDZGl9Wdc7Y"
        ]);
    }

    /**
     * SITE ABOUT
     */
    public function about()
    {
        $head = $this->seo->render(
            "Descubra o " . CONF_SITE_NAME . " - " . CONF_SITE_DESC ,
            CONF_SITE_DESC,
            url("/sobre"),
            theme("/assets/images/share.jpg")
        );
        echo $this->view->render("about",[
            "head" => $head,
            "video" => "lDZGl9Wdc7Y"
        ]);
    }


    public function blog(?array $data):void
    {
        $head = $this->seo->render(
            "Blog " . CONF_SITE_NAME,
            "Configura em nosso blog dicas e sacadas de como controlar melhor suas contas. Vamos tomar um café",
            url("/blog"),
            theme("/assets/images/share.jpg")
        );

        $pager = new Pager(url("/blog/page"));
        $pager->pager(100, 10, ($data['page'] ?? 1));
        echo $this->view->render("blog",[
            "head" => $head,
            "paginator" => $pager->render()
        ]);
    }


    public function blogPost(array $data):void
    {
        $postName = $data['postName'];
        $head = $this->seo->render(
            "POST NAME " . CONF_SITE_NAME,
            "POST HEADLINE",
            url("/blog/{postName}"),
            theme("BLOG IMAGE")
        );
        echo $this->view->render("blog-post",[
            "head" => $head,
            "data" => $this->seo->data()
        ]);

    }

    /**
     * SITE TERMS
     */
    public function terms():void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME . " - Termos de uso" ,
            CONF_SITE_DESC,
            url("/sobre"),
            theme("/assets/images/share.jpg")
        );
        echo $this->view->render("terms",[
            "head" => $head,

        ]);
    }




    /**
     * SITE NAV ERROR
     * @param array $data
     */
    public function error(array $data):void
    {
        $error = new \stdClass();
        $error->code = $data['errcode'];
        $error->title = "Ooops Contéudo indispónivel :/";
        $error->message = "Sentimos muito, mas o contéudo que você tentou acessar não existe, não está dispónivel no momento ou foi removido";
        $error->linkTitle = "Continue navegando";
        $error->link = url_back();

        $head = $this->seo->render(
            "{$error->code} | {$error->title}",
            $error->message,
            url_back("/ops/{$error->code}"),
            theme("/assets/images/share.jpg"),
            false

        );

        echo $this->view->render("error", [
            "head" => $head,
            "error" =>$error
        ]);

    }
}