<?php
// src/Controller/AnnonceController.php

namespace src\Controller;

use Symfony\Component\HttpFoundation\Response;


class AnnonceController 
{
  public function index()
  {
    $content = "Notre propre Hello World !";

    return new Response($content);
  }
}