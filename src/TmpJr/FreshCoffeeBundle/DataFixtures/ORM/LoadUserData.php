<?php

namespace Acme\HelloBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TmpJr\FreshCoffeeBundle\Entity\Coffee;
use TmpJr\FreshCoffeeBundle\Entity\CoffeeEntry;

class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $coffee_kona = new Coffee();
        $coffee_kona->setName('Kona');
        $manager->persist($coffee_kona);
        $manager->flush();

        $coffee_colombian = new Coffee();
        $coffee_colombian->setName('Colombian');
        $manager->persist($coffee_colombian);
        $manager->flush();

        $coffee_fv = new Coffee();
        $coffee_fv->setName('French Vanilla');
        $manager->persist($coffee_fv);
        $manager->flush();

        $start = (int) strtotime('2013-12-02 07:34:32');
        $end = (int) time();
        while ($start < $end) {
            $date_time = new \DateTime();
            $date_time->setTimestamp($start);

            $coffee_entry = new CoffeeEntry();
            $coffee_entry->setCoffee($coffee_kona);
            $coffee_entry->setComment('Made Kona bitches!');
            $coffee_entry->setCreatedAt($date_time);
            $manager->persist($coffee_entry);

            $coffee_entry = new CoffeeEntry();
            $coffee_entry->setCoffee($coffee_colombian);
            $coffee_entry->setComment('Made Colombian bitches!');
            $coffee_entry->setCreatedAt($date_time);
            $manager->persist($coffee_entry);

            $coffee_entry = new CoffeeEntry();
            $coffee_entry->setCoffee($coffee_fv);
            $coffee_entry->setComment('Made French Vanilla bitches!');
            $coffee_entry->setCreatedAt($date_time);
            $manager->persist($coffee_entry);


            $manager->flush();

            $start += 20533;
        }
    }
}