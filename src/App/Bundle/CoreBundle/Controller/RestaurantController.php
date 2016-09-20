<?php

namespace App\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\HttpFoundation\Request;

use App\Bundle\CoreBundle\Document\Restaurants;
use App\Bundle\CoreBundle\Document\Address;
use App\Bundle\CoreBundle\Document\Grades;

class RestaurantController extends Controller
{
     /**
     * restaurant add
     * @return [type] [description]
     */
    public function addAction()
    {
        $dm = $this->get('doctrine_mongodb')->getManager();

        $address = new Address();
        $address->setBuilding('building 1');
        $address->setStreet('street 1');
        $address->setZipcode('zipcode 1');
        $address->setCoord(array(234234.3423423,324234.23423));
        $dm->persist($address);

        $address2 = new Address();
        $address2->setBuilding('building 2');
        $address2->setStreet('street 2');
        $address2->setZipcode('zipcode 2');
        $address2->setCoord(array(234234.3423423,324234.23423));
        $dm->persist($address2);

        $grade = new Grades();
        $grade->setDate(date('Y-m-d'));
        $grade->setGrade('B');
        $grade->setScore(342);
        $dm->persist($grade);

        $restaurant = new Restaurants();
        $restaurant->setBorough('borough');
        $restaurant->setCuisine('cusine');
        $restaurant->setName('name');
        $restaurant->setRestaurantId(2222);
        $restaurant->addAddress($address);
        $restaurant->addAddress($address2);
        $restaurant->addGrade($grade);
        $dm->persist($restaurant);

        $dm->flush();
        dump('boom');
        exit;
    }

    /**
     * retrieve
     */
    public function getAction()
    {
        $dm = $this->get('doctrine_mongodb')->getManager();

        $single = $dm->getRepository('AppCoreBundle:Restaurants')->find('577e20d70f95f61d7542ab32');
        $restaurant = $dm->getRepository('AppCoreBundle:Restaurants')->findOneByBorough('borough');
    
        $street = $dm->getRepository('AppCoreBundle:Restaurants')->getRestaurant();        
        
        dump($single);
        dump($restaurant);
        dump($street);
        exit;


        return $this->render('AppCoreBundle:Default:index.html.twig', array('name' => 'sdf'));
    }
}