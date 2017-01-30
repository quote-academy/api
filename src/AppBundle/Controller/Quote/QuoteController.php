<?php

namespace AppBundle\Controller\Quote;

use AppBundle\Component\API\Payload;
use AppBundle\Controller\ApiController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


/**
 * @Rest\NamePrefix("quotes_")
 * @Rest\Prefix("/quotes")
 */
class QuoteController extends ApiController
{
    /**
     * @Rest\Get("/{quoteId}")
     *
     * @param string $quoteId
     *
     * @return Response
     */
    public function getAction($quoteId)
    {
//        if (null === $quoteIO = $this->getHandler()->handleGetLot($quoteId)) {
//            throw $this->createNotFoundException('Quote not found.');
//        }
//
//        $payload = new Payload();
//        $payload->data = $quoteIO;
//
//        return $this->createResponse($payload, ['full_quote'], Response::HTTP_OK);

        $payload = json_encode('data');

        return $this->createResponse($payload, ['full_quote'], Response::HTTP_OK);
    }
}
