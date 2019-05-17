<?php

namespace My\TechnosBlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use My\TechnosBlogBundle\Entity\Users;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class MyTechnosBlogFixtures implements FixtureInterface
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    /**
     * MyTechnosBlogFixtures constructor.
     * @param UserPasswordEncoderInterface $encoder
     */
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $datas = [
            ['Ouldamri Youssef', 'ouldamri_youssef', 'ouldamri.youssef@gmail.com', '********', ['ROLE_ADMIN']],
            ['Ouldamri Youssef User', 'ouldamri_youssef_user', 'ouldamri.youssef@ymail.com', '********', ['ROLE_USER']],
        ];

        foreach ($datas as [$fullname, $username, $email, $password, $roles]) {
            $user = new Users();
            $user->setFullname($fullname);
            $user->setUsername($username);
            $user->setEmail($email);
            $user->setPassword($this->encoder->encodePassword($user, $password));
            $user->setRoles($roles);

            $manager->persist($user);
        }

        $manager->flush();
    }
}