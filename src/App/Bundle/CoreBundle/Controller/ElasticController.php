<?php

namespace App\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Bundle\CoreBundle\Document\Product;
use App\Bundle\CoreBundle\Model\UserSearch;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Request;
use App\Bundle\CoreBundle\Entity\User;

class ElasticController extends Controller
{
    public function indexAction()
    {
        dump('hi e ee ee xxx');
        $finder = $this->container->get('fos_elastica.finder.app.user');
    
        dump($finder->find('2'));
        
        exit;

    }

    public function finderAction(Request $request)
    {
        $search = $request->query->get('search','jon');
        $finder = $this->get('fos_elastica.index.app.user');
        $results = $finder->search($search);//->getResults();

        dump($results);
        exit;
        
    }


    public function searchAction(Request $request)
    {
        $firstname = $request->get('query','firstname');
        $date = new Carbon();
        $userSearch = new UserSearch();
        $userSearch->setFirstName($firstname);
        $userSearch->setIsActive(true);
        $userSearch->setDateFrom($date->createFromDate('2013','01','01'));
        $userSearch->setDateTo($date->createFromDate('2017','01','01'));

        $repositoryManager = $this->container->get('fos_elastica.manager');

        $results = $repositoryManager->getRepository('AppCoreBundle:User')->filterSearch($userSearch);
        
        dump('s');
        dump($results);
        exit;
        //dump($results[0]->getPassword());

        return $this->render('AppCoreBundle:User:default.html.twig', array('results' => $results));
        
    }


    public function insertAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        dump('insert 2');
        $user = new User();
        $user->setContactNumber('123');
        $user->setFirstName('alvin 3');
        $user->setLastName('coritico 3');
        $user->setEmail('email');

        $plainPassword = 'password123';
        $encoder = $this->container->get('security.password_encoder');
        $encoded = $encoder->encodePassword($user, $plainPassword);

        $user->setPassword($encoded);
        dump($encoded);
        exit;        

        /*$userValid = $encoder->isPasswordValid($user, $plainPassword);
        dump($userValid);
        exit;*/

        $em->persist($user);

        //$this->get('fos_elastica.object_persister.app.user')->insertOne($user);
        $em->flush();
        exit;
    }
    
    //listeners
    public function postLoadAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $userRepo = $em->getRepository('AppCoreBundle:User');
        dump($userRepo->find($request->get('id',2)));

        dump('hi exxx');
        exit;
    }

}
