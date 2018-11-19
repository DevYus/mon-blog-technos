<?php

namespace My\TechnosBlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as BlogAssert;

/**
 * Articles
 *
 * @ORM\Table(name="articles")
 * @ORM\Entity(repositoryClass="My\TechnosBlogBundle\Repository\ArticlesRepository")
 */
class Articles
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
     * @BlogAssert\NotBlank(message="Ce champs est obligatoire")
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     * @BlogAssert\NotBlank(message="Ce champs est obligatoire")
     */
    private $author;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     * @BlogAssert\NotBlank(message="Ce champs est obligatoire")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedate", type="datetime")
     */
    private $updatedate;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     * @BlogAssert\NotBlank(message="Ce champs est obligatoire")
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="pathImg", type="string")
     */
    private $pathImg;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     * @BlogAssert\NotBlank(message="Ce champs est obligatoire")
     */
    private $content;

    public $file;

    /**
     * Articles constructor.
     */
    public function __construct()
    {
        $this->date = new \DateTime();
        $this->updatedate = new \DateTime();
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
     * @return Articles
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
     * Set author
     *
     * @param string $author
     *
     * @return Articles
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Articles
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
     * Set date
     *
     * @param \DateTime $updatedate
     *
     * @return Articles
     */
    public function setUpdateDate($updatedate)
    {
        $this->updatedate = $updatedate;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updatedate;
    }

    /**
     * @ORM\PostLoad()
     */
    public function postLoad()
    {
        $this->updatedate = new \DateTime();
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Articles
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get pathImg
     *
     * @return string
     */
    public function getpathImg()
    {
        return $this->pathImg;
    }

    /**
     * Set pathImg
     *
     * @param string $pathImg
     *
     * @return Articles
     */
    public function setpathImg($pathImg)
    {
        $this->pathImg = $pathImg;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Articles
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set file
     *
     * @param string $file
     *
     * @return Articles
     */
    public function setFile($file)
    {
        $this->author = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

}

