<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BoissonController extends AbstractController
{

    public function __invoke(Request $request)
    {
        $boisson = $request->getContent();
        dd($boisson);
    }

}