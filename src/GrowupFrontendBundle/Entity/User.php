<?php

namespace GrowupFrontendBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var
     * @ORM\Column(type="string", length=255)
     */

    protected $first_name;


    /**
     * @var
     * @ORM\Column(type="string", length=255)
     */
    protected $last_name;
    /**
     * @var
     * @ORM\Column(type="string", length=255)
     */
    protected $last_degree;
    /**
     * @var
     * @ORM\Column(type="string", length=255)
     */
    protected $specialty;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    protected $createdAt;
    /**
     * @var
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    protected $facebook;
    /**
     * @var
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    protected $twitter;
    /**
     * @var
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    protected $github;
    /**
     * @var
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    protected $google_plus;
    /**
     * @ORM\Column(name="profil_image", type="string", length=255, nullable=true)
     */
    protected $profilImage;

    /**
     * @ORM\OneToMany(targetEntity="Idea", mappedBy="user")
     */

    protected $ideas;
    public function __construct()
    {
        parent::__construct();
        //$this->addRole("ROLE_CANDIDATE");
        $this->setCreatedAt(new \DateTime('now'));
        $this->ideas= new ArrayCollection();
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getLastDegree()
    {
        return $this->last_degree;
    }

    /**
     * @param mixed $last_degree
     */
    public function setLastDegree($last_degree)
    {
        $this->last_degree = $last_degree;
    }

    /**
     * @return mixed
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * @param mixed $specialty
     */
    public function setSpecialty($specialty)
    {
        $this->specialty = $specialty;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($date)
    {
        $this->createdAt = $date;
    }

    /**
     * @return mixed
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * @param mixed $facebook
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * @return mixed
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * @param mixed $twitter
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
    }

    /**
     * @return mixed
     */
    public function getGithub()
    {
        return $this->github;
    }

    /**
     * @param mixed $github
     */
    public function setGithub($github)
    {
        $this->github = $github;
    }

    /**
     * @return mixed
     */
    public function getGooglePlus()
    {
        return $this->google_plus;
    }

    /**
     * @param mixed $google_plus
     */
    public function setGooglePlus($google_plus)
    {
        $this->google_plus = $google_plus;
    }

    /**
     * @return mixed
     */
    public function getProfilImage()
    {
        return $this->profilImage;
    }

    /**
     * @param mixed $profilImage
     */
    public function setProfilImage($profilImage)
    {
        $this->profilImage = $profilImage;
    }




    /**
     * Add idea
     *
     * @param \GrowupFrontendBundle\Entity\Idea $idea
     *
     * @return User
     */
    public function addIdea(\GrowupFrontendBundle\Entity\Idea $idea)
    {
        $this->ideas[] = $idea;

        return $this;
    }

    /**
     * Remove idea
     *
     * @param \GrowupFrontendBundle\Entity\Idea $idea
     */
    public function removeIdea(\GrowupFrontendBundle\Entity\Idea $idea)
    {
        $this->ideas->removeElement($idea);
    }

    /**
     * Get ideas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdeas()
    {
        return $this->ideas;
    }
}
