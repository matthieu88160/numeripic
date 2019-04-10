<?php

namespace App\Controller;

use App\Repository\PictureRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     * @param Environment $twig
     * @return Response
     */
    public function homepageAction(
        Request $request,
        Environment $twig,
        PictureRepository $repository,
        PaginatorInterface $paginator
    ) {
        return new Response(
            $twig->render(
                'Default/homepage.html.twig',
                [
                    'pictures' => $repository->findPaginated(
                        $request,
                        $paginator
                    )
                ]
            )
        );
    }

    /**
     * @Route("/terms", name="term_of_service")
     * @return Response
     */
    public function termOfServiceAction()
    {
        return new Response('<!DOCTYPE><html>
            <body>This is the terms ...</body>
        </html>');
    }
}
