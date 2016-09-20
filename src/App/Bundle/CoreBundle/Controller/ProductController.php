<?php

namespace App\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\HttpFoundation\Request;

use App\Bundle\CoreBundle\Entity\User;
use App\Bundle\CoreBundle\Entity\OrderProduct;
use App\Bundle\CoreBundle\Document\Product;
use App\Bundle\CoreBundle\Listener\ProductSubscriber;

use App\Bundle\CoreBundle\Document\UnnamedEntity2;
use App\Bundle\CoreBundle\Document\UnnamedEntity;
use App\Bundle\CoreBundle\Document\Sample;
use App\Bundle\CoreBundle\Document\Restaurants;
use App\Bundle\CoreBundle\Document\Address;
use App\Bundle\CoreBundle\Document\Grades;

class ProductController extends Controller
{
    public function indexAction()
    {

        $dm = $this->get('doctrine_mongodb')->getManager();

        dump('hi');

        $em = $this->getDoctrine()->getManager();
        $eventManager = $em->getEventManager();

        $product = new Product();
        $product->setName('Test Product');
        $dm->persist($product);
        $dm->flush();

        $order = new OrderProduct();
        $order->setProduct($product);
        
        dump($product);
        $em->persist($order);
        $em->flush();
        
        dump($product->getId());
        exit;
    }

    public function getProductAction()
    {
        $dm = $this->get('doctrine_mongodb')->getManager();
        $em = $this->getDoctrine()->getManager();
        $eventManager = $em->getEventManager();
        
        $eventManager->addEventListener(
            array(\Doctrine\ORM\Events::postLoad), new ProductSubscriber($dm)
        );

        $em = $this->getDoctrine()->getManager();

        $order = $em->getRepository('AppCoreBundle:OrderProduct')->find(10);

        // Instance of an uninitialized product proxy
        $product = $order->getProduct();

        // Initializes proxy and queries the database
        echo "Order Title: " . $product->getName();

        exit;
    }


    /**
     * mongo db example
     */
    public function getEntityAction()
    {
        $dm = $this->get('doctrine_mongodb')->getManager();

        $address = new UnnamedEntity2();
        $address->setTitle('title');
        $address->setLocation('location');
        $dm->persist($address);

        $address2 = new UnnamedEntity2();
        $address2->setTitle('title 2');
        $address2->setLocation('location2');
        $address2->setTags(array(2323.213,32.23,342.324));
        //$address2->setTags(array('first'=>'jonathan', 'lastname'=> 'antivo'));
        $dm->persist($address2);

        $entity2 = new UnnamedEntity();
        $entity2->setCountryid('asdf');
        $entity2->setStartDate(date('Y-m-d h:i:s'));   
        $entity2->setProduct(2);
        $entity2->addAddress($address);
        $entity2->addAddress($address2);
        $dm->persist($entity2);

        $entity3 = new UnnamedEntity();
        $entity3->setCountryid('asdf');
        $entity3->setStartDate(date('Y-m-d h:i:s'));   
        $entity3->setProduct(2);
        $dm->persist($entity3);

        $entity4 = new UnnamedEntity();
        $entity4->addOrder($entity3);
        $entity4->addOrder($entity2);
        $dm->persist($entity4);

        $dm->flush();
        dump('ok');
        

        $sample = new Sample();
        $sample->setImage(fopen("/home/jonathan/Pictures/0fees.png", "r"));
        $sample->setScore(rand());
        $sample->setType(true);
        $sample->setFunct('func');
        $sample->setIncrement(1);
        $sample->setKey(array('id'=> 'hi'));
        $sample->setToday(null);
        $sample->setData('hiasd');
        $sample->setPassword('h');
        $sample->setName('hi');
        $sample->setPassword(array('password'));

        $dm->persist($sample);

        $dm->flush();
        dump('boom');

        exit;
    }

    /**
     * Query with connection to different database
     *
     * Cross join upon multiple database is not allow unless you use same entity manageer
     * 
     * @return [type] [description]
     */
    public function withBrandAction()
    {
        $em = $this->get('doctrine')->getManager();

        $product = $em->getRepository('AppCoreBundle:Product')->find(1);

        dump($product);
        exit;
        $products = $em->getRepository('AppCoreBundle:Product')->retrievedWithBrand();
        dump($products);
        exit;
    }

   

}
