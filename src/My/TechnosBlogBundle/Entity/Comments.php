<?php

namespace My\TechnosBlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity(repositoryClass="My\TechnosBlogBundle\Repository\CommentsRepository")
 */
class Comments
{
    /**
     * @ORM\ManyToOne(targetEntity="My\TechnosBlogBundle\Entity\Articles", cascade={"remove"})
     * @ORM\JoinColumn(name="article_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $article;

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
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetimetz")
     */
    private $date;


    // Comments constructor

    public function __construct()
    {
        $this->date = new \Datetime();
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
     * @return Comments
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
     * Set content
     *
     * @param string $content
     *
     * @return Comments
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Comments
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
     * Set article
     *
     * @param \My\TechnosBlogBundle\Entity\Articles $article
     *
     * @return Comments
     */
    public function setArticle(\My\TechnosBlogBundle\Entity\Articles $article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \My\TechnosBlogBundle\Entity\Articles
     */
    public function getArticle()
    {
        return $this->article;
    }
}
