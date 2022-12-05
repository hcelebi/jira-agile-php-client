<?php

namespace JiraAgileClient\Dto;

class Sprint
{
    /** @var ?int */
    private $id;
    /** @var ?string */
    private $self;
    /** @var ?string */
    private $state;
    /** @var ?string */
    private $name;
    /** @var ?string */
    private $startDate;
    /** @var ?string */
    private $endDate;
    /** @var ?string */
    private $completeDate;
    /** @var ?int */
    private $originBoardId;
    /** @var ?string */
    private $goal;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getSelf(): ?string
    {
        return $this->self;
    }

    /**
     * @param string|null $self
     */
    public function setSelf(?string $self): void
    {
        $this->self = $self;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
     * @param string|null $startDate
     */
    public function setStartDate(?string $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    /**
     * @param string|null $endDate
     */
    public function setEndDate(?string $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @return string|null
     */
    public function getCompleteDate(): ?string
    {
        return $this->completeDate;
    }

    /**
     * @param string|null $completeDate
     */
    public function setCompleteDate(?string $completeDate): void
    {
        $this->completeDate = $completeDate;
    }

    /**
     * @return int|null
     */
    public function getOriginBoardId(): ?int
    {
        return $this->originBoardId;
    }

    /**
     * @param int|null $originBoardId
     */
    public function setOriginBoardId(?int $originBoardId): void
    {
        $this->originBoardId = $originBoardId;
    }

    /**
     * @return string|null
     */
    public function getGoal(): ?string
    {
        return $this->goal;
    }

    /**
     * @param string|null $goal
     */
    public function setGoal(?string $goal): void
    {
        $this->goal = $goal;
    }
}
