<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsersRepository")
 */
class Users implements UserInterface, \Serializable
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
     * @ORM\Column(name="user", type="string", length=255, unique=true)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=255)
     */
    private $pass;
    
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="zip", type="integer")
     */
    private $zip;
    
    /**
     * @var string
     *
     * @ORM\Column(name="hometown", type="string", length=255)
     */
    private $hometown;
    
    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255)
     */
    private $street;
    
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date")
     */
    private $birthday;
    
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="memberSince", type="date")
     */
    private $memberSince;
    
    /**
     * @var string
     *
     * @ORM\Column(name="skills", type="text")
     */
    private $skills;
    
    /**
     * @var string
     *
     * @ORM\Column(name="mission", type="text")
     */
    private $mission;

    /**
     * @var string
     *
     * @ORM\Column(name="hardware", type="text")
     */
    private $hardware;
    
    /**
     * @var string
     *
     * @ORM\Column(name="inet", type="string", length=255)
     */
    private $inet;
    
    /**
     * @ORM\ManyToOne(targetEntity="Groups", inversedBy="users")
     * @ORM\JoinColumn(name="groups_id", referencedColumnName="id")
     */
    private $groups;
    
    


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
     * Set user
     *
     * @param string $user
     *
     * @return Users
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set pass
     *
     * @param string $pass
     *
     * @return Users
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set groups
     *
     * @param \AppBundle\Entity\Groups $groups
     *
     * @return Users
     */
    public function setGroups(\AppBundle\Entity\Groups $groups = null)
    {
        $this->groups = $groups;

        return $this;
    }

    /**
     * Get groups
     *
     * @return \AppBundle\Entity\Groups
     */
    public function getGroups()
    {
        return $this->groups;
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
     * Get email
     *
     * @return string
     */
    public function getWebEmail()
    {
        $email = $this->getEmail();
        $email = str_replace($search='@', $replace=' aet ', $email);
        $email = str_replace($search='.', $replace=' dot ', $email);
        return $email;
    }

    /**
     * Set icq
     *
     * @param integer $icq
     *
     * @return Users
     */
    public function setIcq($icq)
    {
        $this->icq = $icq;

        return $this;
    }

    /**
     * Get icq
     *
     * @return integer
     */
    public function getIcq()
    {
        return $this->icq;
    }

    /**
     * Set zip
     *
     * @param integer $zip
     *
     * @return Users
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return integer
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set hometown
     *
     * @param string $hometown
     *
     * @return Users
     */
    public function setHometown($hometown)
    {
        $this->hometown = $hometown;

        return $this;
    }

    /**
     * Get hometown
     *
     * @return string
     */
    public function getHometown()
    {
        return $this->hometown;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return Users
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return Users
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set memberSince
     *
     * @param \DateTime $memberSince
     *
     * @return Users
     */
    public function setMemberSince($memberSince)
    {
        $this->memberSince = $memberSince;

        return $this;
    }

    /**
     * Get memberSince
     *
     * @return \DateTime
     */
    public function getMemberSince()
    {
        return $this->memberSince;
    }

    /**
     * Set skills
     *
     * @param string $skills
     *
     * @return Users
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;

        return $this;
    }

    /**
     * Get skills
     *
     * @return string
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Set mission
     *
     * @param string $mission
     *
     * @return Users
     */
    public function setMission($mission)
    {
        $this->mission = $mission;

        return $this;
    }

    /**
     * Get mission
     *
     * @return string
     */
    public function getMission()
    {
        return $this->mission;
    }

    /**
     * Set hardware
     *
     * @param string $hardware
     *
     * @return Users
     */
    public function setHardware($hardware)
    {
        $this->hardware = $hardware;

        return $this;
    }

    /**
     * Get hardware
     *
     * @return string
     */
    public function getHardware()
    {
        return $this->hardware;
    }

    /**
     * Set inet
     *
     * @param string $inet
     *
     * @return Users
     */
    public function setInet($inet)
    {
        $this->inet = $inet;

        return $this;
    }

    /**
     * Get inet
     *
     * @return string
     */
    public function getInet()
    {
        return $this->inet;
    }
    
    public function getPassword()
    {
        return $this->getPass();
    }
    
    public function getUsername()
    {
        return $this->getUser();
    }
    
    public function getRoles()
    {
        return array('ROLE_USER');
    }
    
    public function eraseCredentials()
    {
    }
    
    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }
    
    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }
    
    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized);
    }
}
