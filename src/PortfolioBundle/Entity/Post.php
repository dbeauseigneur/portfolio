<?php

namespace PortfolioBundle\Entity;

/**
 * Post
 */
class Post
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var \DateTime
     */
    private $publicationDate;

    /**
     * @var string
     */
    private $content;

    /**
     * @var bool
     */
    private $openComment;

    /**
     * @var bool
     */
    private $status;


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
     * @return Post
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
     * Set slug
     *
     * @param string $slug
     *
     * @return Post
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set publicationDate
     *
     * @param \DateTime $publicationDate
     *
     * @return Post
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    /**
     * Get publicationDate
     *
     * @return \DateTime
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Post
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
     * Set openComment
     *
     * @param boolean $openComment
     *
     * @return Post
     */
    public function setOpenComment($openComment)
    {
        $this->openComment = $openComment;

        return $this;
    }

    /**
     * Get openComment
     *
     * @return bool
     */
    public function getOpenComment()
    {
        return $this->openComment;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Post
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $comments;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categorys;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->categorys = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add comment
     *
     * @param \PortfolioBundle\Entity\Comment $comment
     *
     * @return Post
     */
    public function addComment(\PortfolioBundle\Entity\Comment $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \PortfolioBundle\Entity\Comment $comment
     */
    public function removeComment(\PortfolioBundle\Entity\Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Add category
     *
     * @param \PortfolioBundle\Entity\Category $category
     *
     * @return Post
     */
    public function addCategory(\PortfolioBundle\Entity\Category $category)
    {
        $this->categorys[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \PortfolioBundle\Entity\Category $category
     */
    public function removeCategory(\PortfolioBundle\Entity\Category $category)
    {
        $this->categorys->removeElement($category);
    }

    /**
     * Get categorys
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategorys()
    {
        return $this->categorys;
    }
}
