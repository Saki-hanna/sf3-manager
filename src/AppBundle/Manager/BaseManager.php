<?php

namespace AppBundle\Manager;

abstract class BaseManager {

    protected function add( $entity )
    {
        $this->em->persist($entity);
        $this->em->flush();
    }

    protected function edit()
    {
        $this->em->flush();
    }

    protected function remove( $entity )
    {
        $this->em->remove($entity);
        $this->em->flush();
    }


}