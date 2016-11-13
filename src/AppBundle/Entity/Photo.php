<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 *
 * @ORM\Table(name="photo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PhotoRepository")
 */
class Photo
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
     * @var int
     *
     * @ORM\Column(name="category_id", type="integer")
     */
    private $categoryId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="flickr_url_small", type="text")
     */
    private $flickrUrlSmall;

    /**
     * @var string
     * @ORM\Column(name="flickr_url_large", type="text")
     */
    private $flickerUrlLarge;


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
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return Photo
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Photo
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Photo
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
     * Set title
     *
     * @param string $title
     *
     * @return Photo
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
     * Set flickrUrlSmall
     *
     * @param string $flickrUrlSmall
     *
     * @return Photo
     */
    public function setFlickrUrlSmall($flickrUrlSmall)
    {
        $this->flickrUrlSmall = $flickrUrlSmall;

        return $this;
    }

    /**
     * Get flickrUrlSmall
     *
     * @return string
     */
    public function getFlickrUrlSmall()
    {
        return $this->flickrUrlSmall;
    }

    /**
     * Set flickerUrlLarge
     *
     * @param string $flickerUrlLarge
     *
     * @return Photo
     */
    public function setFlickerUrlLarge($flickerUrlLarge)
    {
        $this->flickerUrlLarge = $flickerUrlLarge;

        return $this;
    }

    /**
     * Get flickerUrlLarge
     *
     * @return string
     */
    public function getFlickerUrlLarge()
    {
        return $this->flickerUrlLarge;
    }
}
