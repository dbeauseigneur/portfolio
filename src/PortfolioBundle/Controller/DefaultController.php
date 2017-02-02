<?php

namespace PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //$myService = $this->get ('app.my_service');
        //$myService->getLogger()->debug('homePage',array());
        return $this->render(':default:index.html.twig');
    }

    public function whoIAmAction()
    {
        return $this->render(':default:whoiam.html.twig');
    }
}
