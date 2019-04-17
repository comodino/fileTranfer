<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use FOS\UserBundle\Model\UserManagerInterface;
use FOS\UserBundle\Util\UserManipulator;

class AppFixtures extends Fixture
{

    /**
     * @var UserManagerInterface
     */
    private $userManager;

    /**
     * AppFixtures constructor.
     * @param UserManagerInterface $userManager
     */
    public function __construct(UserManagerInterface $userManager)
    {
        $this->userManager = $userManager;
    }


    public function load(ObjectManager $manager)
    {
        $user = $this->userManager->createUser();
        $user->setUsername('admin');
        $user->setEmail('admin@yocabe.it');
        $user->setPlainPassword('admin');
        $user->setEnabled(true);
        $user->setSuperAdmin(true);
        $this->userManager->updateUser($user);



        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
