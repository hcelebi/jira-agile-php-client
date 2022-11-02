<?php

namespace JiraAgileClient\Dto;

class BoardsResult
{
    /** @var int */
    private $maxResults;
    /** @var int */
    private $startAt;
    /** @var int */
    private $total;
    /** @var bool */
    private $isLast;
    /** @var ?Board[] */
    private $values;

    /**
     * @return int
     */
    public function getMaxResults(): int
    {
        return $this->maxResults;
    }

    /**
     * @param int $maxResults
     */
    public function setMaxResults(int $maxResults): void
    {
        $this->maxResults = $maxResults;
    }

    /**
     * @return int
     */
    public function getStartAt(): int
    {
        return $this->startAt;
    }

    /**
     * @param int $startAt
     */
    public function setStartAt(int $startAt): void
    {
        $this->startAt = $startAt;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @param int $total
     */
    public function setTotal(int $total): void
    {
        $this->total = $total;
    }

    /**
     * @return bool
     */
    public function isLast(): bool
    {
        return $this->isLast;
    }

    /**
     * @param bool $isLast
     */
    public function setIsLast(bool $isLast): void
    {
        $this->isLast = $isLast;
    }

    /**
     * @return Board[]|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
     * @param Board[]|null $values
     */
    public function setValues(?array $values): void
    {
        $this->values = $values;
    }
}
