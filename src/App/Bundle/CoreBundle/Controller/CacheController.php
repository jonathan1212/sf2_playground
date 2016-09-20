<?php

namespace App\Bundle\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Bundle\CoreBundle\Entity\Product;
use Carbon\Carbon;
use Doctrine\Common\Cache\RedisCache;

class CacheController extends Controller
{

    public function indexAction()
    {
        /*$redis = $this->container->get('snc_redis.default');
        dump($redis);
        exit;*/

        /*$em = $this->getDoctrine()->getManager('yilinker');
        $brand = $em->getRepository('Yilinker:Brand')->findOne(4);

        dump($brand);
        exit;*/



        $em = $this->getDoctrine()->getManager();
        //$em->getConfiguration()->getResultCacheImpl()->delete('productId_11');
        //$em->getConfiguration()->getResultCacheImpl()->delete('productId_2');

        $product = $em->getRepository('AppCoreBundle:Product')->findOne(1);
        
        dump($product->getBrand());
        exit;
        $product2 = $em->getRepository('AppCoreBundle:Product')->findOne(2);
        

    
        $user = $em->getRepository('AppCoreBundle:User')->find(1);

        //dump($user->getFirstName());
        dump($product[0]->getUser()->getFirstName());
        dump($user->getFirstName());

        dump($product2);
        //exit;

        return $this->render('AppCoreBundle:Default:index.html.twig', array('name' => /*$product[0]->getUser()->getFirstName()*/ ' ~~' .$product[0]->getName()));

        exit;
    }

    public function updateAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $date = new Carbon();

        $productX = new Product;
        //$product = new Product();
        $productX->setName('hala ka');
        $productX->setDateCreated($date->now());
        $productX->setDateLastModified($date->now());
        $productX->setDateLastEmptied($date->now());
        $productX->setSlug('ww');
        $em->persist($productX);

        $product = $em->getRepository('AppCoreBundle:Product')->find(1);
        //$product = new Product();
        $product->setName('butaw');
        
        $product2 = $em->getRepository('AppCoreBundle:Product')->find(2);
        $product2->setName('kaw');


        $country = $em->getRepository('AppCoreBundle:Country')->find(1);
        $country->setName('ph 2');

        $em->flush();


        dump('ok');
        exit;

    }


    
}
