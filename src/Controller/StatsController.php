<?php

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StatsController
{
    /**
     * @Route ("/stats/{id}", methods={"GET"})
     * @return Response
     */
    public function aggregate(): Response
    {

    }

    /**
     * @Route ("/stats", methods={"GET"})
     * @return Response
     */
    public function total(): Response
    {

    }
}