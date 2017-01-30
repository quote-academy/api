<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Response;

abstract class ApiController extends FOSRestController
{
    /**
     * @param mixed|null $data
     * @param array      $groups
     * @param int|null   $statusCode
     * @param array      $header
     *
     * @return Response
     */
    protected function createResponse($data = null, $groups = [], $statusCode = Response::HTTP_OK, array $header = [])
    {
        $view = $this->view($data, $statusCode, $header);
        $groups[] = 'default';
        $view->getContext()->setGroups($groups);

        return $this->handleView($view);
    }
}
