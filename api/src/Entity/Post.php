<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=PostRepository::class)
 */
class Post
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Url()
     * @Assert\Length(min = 1, max = 255)
     */
    private $link;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min = 1, max = 255)
     */
    private $title;

    /**
     * @ORM\Column(type="smallint")
     * @Assert\PositiveOrZero
     * @Assert\NotNull
     */
    private $type;

    /**
     * @ORM\Column(type="smallint")
     * @Assert\PositiveOrZero
     * @Assert\NotNull
     */
    private $average_reading_time;

    /**
     * @ORM\Column(type="smallint")
     * @Assert\Range(min=0, max=100)
     * @Assert\NotNull
     */
    private $reading_percent;

    /**
     * @ORM\Column(type="integer")
     * @Assert\PositiveOrZero
     * @Assert\NotNull
     */
    private $reading_count;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     * @Assert\NotNull
     */
    private $view_count;

    /**
     * @ORM\Column(type="integer")
     * @Assert\PositiveOrZero
     * @Assert\NotNull
     */
    private $like_count;

    /**
     * @ORM\Column(type="integer")
     * @Assert\PositiveOrZero
     * @Assert\NotNull
     */
    private $comment_count;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getAverageReadingTime(): ?int
    {
        return $this->average_reading_time;
    }

    public function setAverageReadingTime(int $average_reading_time): self
    {
        $this->average_reading_time = $average_reading_time;

        return $this;
    }

    public function getReadingPercent(): ?int
    {
        return $this->reading_percent;
    }

    public function setReadingPercent(int $reading_percent): self
    {
        $this->reading_percent = $reading_percent;

        return $this;
    }

    public function getReadingCount(): ?int
    {
        return $this->reading_count;
    }

    public function setReadingCount(int $reading_count): self
    {
        $this->reading_count = $reading_count;

        return $this;
    }

    public function getViewCount(): ?int
    {
        return $this->view_count;
    }

    public function setViewCount(int $view_count): self
    {
        $this->view_count = $view_count;

        return $this;
    }

    public function getLikeCount(): ?int
    {
        return $this->like_count;
    }

    public function setLikeCount(int $like_count): self
    {
        $this->like_count = $like_count;

        return $this;
    }

    public function getCommentCount(): ?int
    {
        return $this->comment_count;
    }

    public function setCommentCount(int $comment_count): self
    {
        $this->comment_count = $comment_count;

        return $this;
    }
}
