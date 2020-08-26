<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class PageController extends AbstractController
{
    public function index()
    {
        $hello = 'ok';
        return $this->render('front/home/index.html', compact('hello'));
    }
}
