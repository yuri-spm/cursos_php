<?php


namespace Source\Support;


use CoffeeCode\Optimizer\Optimizer;

class Seo
{
    protected $optmizer;

    public function __construct(string $schema  = "article")
    {
        $this->optmizer = new Optimizer();
        $this->optmizer->openGraph(
            SITE,
            "pt_BR",
            $schema,

        )->publisher(
            "yuri.spm",
            "yuri.spm",

        )->facebook(
            "yuri.spm"
        );
    }

    public function render(string $title, string $description, string $url, string $image, $follow = true): string
    {
       return $this->optmizer->optimize($title, $description, $url, $image, $follow)->render();
//        var_dump($seo->debug());
    }
}