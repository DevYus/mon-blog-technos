<?php

namespace My\TechnosBlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;
use My\TechnosBlogBundle\Validator\Constraints as BlogAssert;


/**
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="My\TechnosBlogBundle\Repository\UsersRepository")
 * @UniqueEntity(fields="email", message="Cet email est déjà utilisé", groups={"registration"})
 * @UniqueEntity(fields="pseudo", message="Cet utilisateur existe déjà", groups={"registration"})
 */

class Users implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=255)
     * @Assert\NotBlank(groups={"registration"})
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\NotBlank(groups={"registration","profile","forgot"})
     * @BlogAssert\NotAMember(groups={"forgot"})
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="reset_token", type="string", length=32)
     */
    private $resetToken;

    /**
     * @var integer
     *
     * @ORM\Column(name="reset_expires", type="integer")
     */
    private $resetExpires;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="json_array")
     */
    private $roles = [];


    /**
     * Users constructor.
     */
    public function __construct()
    {
        $this->date = new \DateTime();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return Users
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }


    /**
     * Set username
     *
     * @param string $username
     *
     * @return Users
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Users
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set resetToken
     *
     * @param string $resetToken
     *
     * @return Users
     */
    public function setResetToken($resetToken)
    {
        $this->resetToken = $resetToken;
        return $this;
    }
    /**
     * Get resetToken
     *
     * @return string
     */
    public function getResetToken()
    {
        return $this->resetToken;
    }

    /**
     * Set resetExpires
     *
     * @param integer $resetExpires
     *
     * @return Users
     */
    public function setResetExpires($resetExpires)
    {
        $this->resetExpires = $resetExpires;
        return $this;
    }
    /**
     * Get resetExpires
     *
     * @return integer
     */
    public function getResetExpires()
    {
        return $this->resetExpires;
    }


    /**
     * Set roles
     *
     * @param array $roles
     *
     * @return Users
     */
    public function setRoles(array $roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return array
     */
    public function getRoles()
    {
        $roles = $this->roles;

        if(empty($roles))
        {
            $roles[] = 'ROLE_USER';
        }

        return array_unique($roles);
    }


    /**
     * Get salt of password
     *
     * {@inheritdoc}
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Removes sensitive data from the user.
     *
     * {@inheritdoc}
     */
    public function eraseCredentials()
    {
        // $this->plainPassword = null;
    }

    /**
     * {@inheritdoc}
     */
    public function serialize()
    {
        return serialize([$this->id, $this->fullname, $this->password]);
    }

    /**
     * {@inheritdoc}
     */
    public function unserialize($serialized)
    {
        [$this->id, $this->username, $this->password] = unserialize($serialized, ['allowed_classes' => false]);
    }


}

