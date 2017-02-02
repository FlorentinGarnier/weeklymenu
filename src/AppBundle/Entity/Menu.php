<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table(name="menu")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MenuRepository")
 */
class Menu
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
     * @ORM\Column(name="day", type="string", length=255, nullable=true)
     */
    private $day;

    /**
     * @var string
     *
     * @ORM\Column(name="dinner_lunch", type="string", length=255, nullable=true)
     */
    private $dinnerLunch;

    /**
     * @var string
     *
     * @ORM\Column(name="entree", type="string", length=255, nullable=true)
     */
    private $entree;

    /**
     * @var string
     *
     * @ORM\Column(name="main_course", type="string", length=255, nullable=true)
     */
    private $mainCourse;

    /**
     * @var string
     *
     * @ORM\Column(name="dessert", type="string", length=255, nullable=true)
     */
    private $dessert;

    /**
     * @var int
     *
     * @ORM\Column(name="user", type="integer", nullable=true)
     */
    private $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;


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
     * Set day
     *
     * @param string $day
     *
     * @return Menu
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return string
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set dinnerLunch
     *
     * @param string $dinnerLunch
     *
     * @return Menu
     */
    public function setDinnerLunch($dinnerLunch)
    {
        $this->dinnerLunch = $dinnerLunch;

        return $this;
    }

    /**
     * Get dinnerLunch
     *
     * @return string
     */
    public function getDinnerLunch()
    {
        return $this->dinnerLunch;
    }

    /**
     * Set entree
     *
     * @param string $entree
     *
     * @return Menu
     */
    public function setEntree($entree)
    {
        $this->entree = $entree;

        return $this;
    }

    /**
     * Get entree
     *
     * @return string
     */
    public function getEntree()
    {
        return $this->entree;
    }

    /**
     * Set mainCourse
     *
     * @param string $mainCourse
     *
     * @return Menu
     */
    public function setMainCourse($mainCourse)
    {
        $this->mainCourse = $mainCourse;

        return $this;
    }

    /**
     * Get mainCourse
     *
     * @return string
     */
    public function getMainCourse()
    {
        return $this->mainCourse;
    }

    /**
     * Set dessert
     *
     * @param string $dessert
     *
     * @return Menu
     */
    public function setDessert($dessert)
    {
        $this->dessert = $dessert;

        return $this;
    }

    /**
     * Get dessert
     *
     * @return string
     */
    public function getDessert()
    {
        return $this->dessert;
    }

    /**
     * Set user
     *
     * @param integer $user
     *
     * @return Menu
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return int
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Menu
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
     * @return Menu
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
}

