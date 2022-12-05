<?php

namespace JiraAgileClient\Request;

class GetBoardIssuesForSprintRequest
{
    /** @var int */
    private $maxResults;
    /** @var int */
    private $startAt;
    /** @var int */
    private $boardId;
    /** @var int */
    private $sprintId;

    /**
     * @return int
     */
    public function getBoardId(): int
    {
        return $this->boardId;
    }

    /**
     * @param int $boardId
     */
    public function setBoardId(int $boardId): void
    {
        $this->boardId = $boardId;
    }

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
    public function getSprintId(): int
    {
        return $this->sprintId;
    }

    /**
     * @param int $sprintId
     */
    public function setSprintId(int $sprintId): void
    {
        $this->sprintId = $sprintId;
    }
}