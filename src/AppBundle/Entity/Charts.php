<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Charts
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ChartsRepository")
*/
class Charts
{
    /**
     * @var integer
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
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creationDate", type="datetime")
     */
    private $creationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="medicines", type="text")
     */
    private $medicines;

    /**
     * @var string
     *
     * @ORM\Column(name="warning", type="text")
     */
    private $warning;

     /**
     * @var User 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="charts")
     */
    private $user;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Charts
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
     * Set description
     *
     * @param string $description
     * @return Charts
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

     /**
     * Set medicines
     *
     * @param string $medicines
     * @return Charts
     */
    public function setMedicines($medicines)
    {
        $this->medicines = $medicines;

        return $this;
    }

    /**
     * Get medicines
     *
     * @return string 
     */
    public function getMedicines()
    {
        return $this->medicines;
    }

    /**
     * Set warning
     *
     * @param string $warning
     * @return Charts
     */
    public function setWarning($warning)
    {
        $this->warning = $warning;

        return $this;
    }

    /**
     * Get warning
     *
     * @return string 
     */
    public function getWarning()
    {
        return $this->warning;
    }


    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Charts
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime 
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return Charts
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
