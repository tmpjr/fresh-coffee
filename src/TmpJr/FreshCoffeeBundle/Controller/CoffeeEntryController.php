<?php

namespace TmpJr\FreshCoffeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CoffeeEntryController extends Controller
{
    /**
     * @Route("/coffee/{id}/add")
     * @ParamConverter("coffee", class="FreshCoffeeBundle:Coffee")
     * @Template()
     */
    public function addAction(Coffee $coffee)
    {
        return array();
    }
}
