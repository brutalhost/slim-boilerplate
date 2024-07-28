<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class HomeController
{
    public function index(ServerRequestInterface $request, ResponseInterface $response, ?string $name): ResponseInterface
    {
        $message = 'Hello, ' . ($name ?? 'World') . '!';
        $response->getBody()->write($message);

        return $response;
    }
}