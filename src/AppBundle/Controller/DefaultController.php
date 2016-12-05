<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Other;
use AppBundle\Entity\Stuff;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $allStuff = $this->get('em.stuff')->allStuff();

        dump($allStuff);
        return new Response('ok');
    }

    /**
     * @Route("/add_other")
     */
    public function addAction(Request $request)
    {
        $other = new Other();

        $this->get('em.other')->saveOther($other);
        return new Response($other->getId());
    }

    /**
     * @Route("/get_others")
     */
    public function getOthersAction(Request $request)
    {
        $allOther = $this->get('em.other')->all();

        dump($allOther);
        return new Response('ok');
    }
}
