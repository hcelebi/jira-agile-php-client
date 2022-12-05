<?php

namespace JiraAgileClient\Dto;

class SprintsResult
{
    /** @var ?int */
    private $maxResults;
    /** @var ?int */
    private $startAt;
    /** @var ?int */
    private $total;
    /** @var ?bool */
    private $isLast;
    /** @var ?Sprint[] */
    private $values;

    /**
     * @return int|null
     */
    public function getMaxResults(): ?int
    {
        return $this->maxResults;
    }

    /**
     * @param int|null $maxResults
     */
    public function setMaxResults(?int $maxResults): void
    {
        $this->maxResults = $maxResults;
    }

    /**
     * @return int|null
     */
    public function getStartAt(): ?int
    {
        return $this->startAt;
    }

    /**
     * @param int|null $startAt
     */
    public function setStartAt(?int $startAt): void
    {
        $this->startAt = $startAt;
    }

    /**
     * @return int|null
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * @param int|null $total
     */
    public function setTotal(?int $total): void
    {
        $this->total = $total;
    }

    /**
     * @return bool|null
     */
    public function getIsLast(): ?bool
    {
        return $this->isLast;
    }

    /**
     * @param bool|null $isLast
     */
    public function setIsLast(?bool $isLast): void
    {
        $this->isLast = $isLast;
    }

    /**
     * @return Sprint[]|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
     * @param Sprint[]|null $values
     */
    public function setValues(?array $values): void
    {
        $this->values = $values;
    }
}