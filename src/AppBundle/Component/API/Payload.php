<?php

namespace AppBundle\Component\API;

use AppBundle\Component\IO\ModelIO;
use Symfony\Component\Serializer\Annotation as Serializer;
use Symfony\Component\Validator\Constraints as Assert;

class Payload
{
    /**
     * @var mixed
     *
     * @Assert\Valid()
     *
     * @Serializer\Groups({"default"})
     */
    public $data;

    /**
     * @var object
     *
     * @Serializer\Groups({"default"})
     */
    public $metadata;

    /**
     * @var object
     *
     * @Serializer\Groups({"default"})
     */
    public $errors;

    /**
     * @param  ModelIO $io
     *
     * @return this
     */
    public static function from(ModelIO $io)
    {
        $payload = new self;
        $payload->data = $io;

        return $payload;
    }

    /**
     * @param  mixed $errors
     * @return this
     */
    public static function error($errors)
    {
        $payload = new self;
        $payload->errors = $errors;

        return $payload;
    }
}
