<?php

namespace app\controller;

class User extends Base
{

    public function lista($request, $response)
    {
            $dadosTemplate = [
                'titulo' => 'Lista de usuario'
            ];
        return $this->getTwig()
            ->render($response, $this->setView('listuser'), $dadosTemplate)
            ->withHeader('Content-Type', 'text/html')
            ->withStatus(200);

    }
    public function cadastro($request, $response)
    {
         $dadosTemplate = [
                'titulo' => 'Cadastro'
            ];
        return $this->getTwig()
            ->render($response, $this->setView('cadastro'), $dadosTemplate)
            ->withHeader('Content-Type', 'text/html')
            ->withStatus(200);


    }
}