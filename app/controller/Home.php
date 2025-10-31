<?php

namespace app\controller;

class Home extends Base
{
    public function home($request, $response)
    {
        
        $dadosTemplate = [
            'titulo' => 'Pagina Inicial'
        ];
        return $this->getTwig()
        ->render($response, $this->setView('home'), $dadosTemplate)
        ->withHeader('Content-Type', 'text/html')
        ->withStatus(200);
    }
}
