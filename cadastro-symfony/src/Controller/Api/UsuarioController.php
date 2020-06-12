<?php

namespace App\Controller\Api;

use App\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/v1", name="api_v1_usuario_")
 */
class UsuarioController extends AbstractController
{

    /**
     * @Route("/lista", methods={"GET"}, name="lista")
     */
    public function lista(): JsonResponse
    {
        $doctrine = $this->getDoctrine()->getRepository(Usuario::class);
        dum($doctrine->pegarAtivos());
        return new JsonResponse(["implementar lista na API"], 404);
    }

    /**
     * @Route("/cadastra", methods={"POST"}, name="cadastra")
     */
    public function  cadastra(): JsonResponse
    {
        return new JsonResponse(["implementar cadastro API"], 404);
    }
}