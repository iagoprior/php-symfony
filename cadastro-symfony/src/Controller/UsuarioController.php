<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class UsuarioController
{
     /**
     * @Route("/", methods={"GET"})
     */
    public function index(): Response
    {
        return new Response("implementar formulário de cadastro");
    }

    /**
     * @Route("/salvar", methods={"POST"})
     */
    public function salvar(): Response
    {
        return new Response("implementar gravação ao banco de dados");
    }
}