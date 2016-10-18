<?php

namespace App\Bundle\CoreBundle\Controller;


use App\Bundle\CoreBundle\Entity\InventoryRoom;
use App\Bundle\CoreBundle\Entity\InventoryRoomAttribute;
use App\Bundle\CoreBundle\Entity\InventoryTable;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class InventoryController
 * @package App\Bundle\CoreBundle\Entity
 *
 * Class Inheritance
 */
class InventoryController extends Controller
{

    /**
     *  LabLogItem Blog
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $roomObj = $em->getRepository('AppCoreBundle:Inventory')->find(20);
        dump($roomObj);
        exit;

        $room = new InventoryRoom();
        $room->setPartNumber('partnumber');
        $room->setRackLimit('racklimit');
        $room->setRoomType('room type');
        $room->setCategory('cagtegory');


        $em->persist($room);

        $table = new InventoryTable();
        $table->setCategory('category');
        $table->setQuantity('1');
        $table->setName('name');
        $table->setPartNumber('2243');
        $em->persist($table);


        $roomAttribute = new InventoryRoomAttribute();
        $roomAttribute->setAttribute('color');
        $roomAttribute->setValue('red');
        $roomAttribute->setRoomType('room type');
        $roomAttribute->setRackLimit('rack');

        $em->persist($roomAttribute);

        $em->flush();

        exit;
    }

}