<?php

namespace GrowupFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Idea
 *
 * @ORM\Table(name="ideas")
 * @ORM\Entity(repositoryClass="GrowupFrontendBundle\Repository\IdeaRepository")
 */
class Idea
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="short_description", type="text")
     */
    private $shortDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="elaborate_description", type="text")
     */
    private $elaborateDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime",nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime",nullable=true)
     */
    private $updatedAt;
    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="GrowupFrontendBundle\Entity\User")
     * @ORM\JoinColumn(name="candidate_id", referencedColumnName="id")
     *
     */

    private $candidate;


    public function __construct()
    {
        $this->setCreatedAt(new \DateTime('now'));
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
     * Set title
     *
     * @param string $title
     *
     * @return Idea
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set shortDescription
     *
     * @param string $shortDescription
     *
     * @return Idea
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Get shortDescription
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Set elaborateDescription
     *
     * @param string $elaborateDescription
     *
     * @return Idea
     */
    public function setElaborateDescription($elaborateDescription)
    {
        $this->elaborateDescription = $elaborateDescription;

        return $this;
    }

    /**
     * Get elaborateDescription
     *
     * @return string
     */
    public function getElaborateDescription()
    {
        return $this->elaborateDescription;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Idea
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Idea
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @return User
     */
    public function getCandidate()
    {
        return $this->candidate;
    }

    /**
     * @param User $candidate
     */
    public function setCandidate(User $candidate)
    {
        $this->candidate = $candidate;
    }

}
