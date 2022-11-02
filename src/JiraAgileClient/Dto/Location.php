<?php

namespace JiraAgileClient\Dto;

class Location
{
    /** @var int */
    private $projectId;
    /** @var string */
    private $projectName;
    /** @var string */
    private $projectKey;

    /**
     * @return int
     */
    public function getProjectId(): int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     */
    public function setProjectId(int $projectId): void
    {
        $this->projectId = $projectId;
    }

    /**
     * @return string
     */
    public function getProjectName(): string
    {
        return $this->projectName;
    }

    /**
     * @param string $projectName
     */
    public function setProjectName(string $projectName): void
    {
        $this->projectName = $projectName;
    }

    /**
     * @return string
     */
    public function getProjectKey(): string
    {
        return $this->projectKey;
    }

    /**
     * @param string $projectKey
     */
    public function setProjectKey(string $projectKey): void
    {
        $this->projectKey = $projectKey;
    }
}
