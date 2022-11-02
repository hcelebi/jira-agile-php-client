<?php

namespace JiraAgileClient\Dto;

class Location
{
    /** @var ?int */
    private $projectId;
    /** @var ?string */
    private $projectName;
    /** @var ?string */
    private $projectKey;

    /**
     * @return int|null
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int|null $projectId
     */
    public function setProjectId(?int $projectId): void
    {
        $this->projectId = $projectId;
    }

    /**
     * @return string|null
     */
    public function getProjectName(): ?string
    {
        return $this->projectName;
    }

    /**
     * @param string|null $projectName
     */
    public function setProjectName(?string $projectName): void
    {
        $this->projectName = $projectName;
    }

    /**
     * @return string|null
     */
    public function getProjectKey(): ?string
    {
        return $this->projectKey;
    }

    /**
     * @param string|null $projectKey
     */
    public function setProjectKey(?string $projectKey): void
    {
        $this->projectKey = $projectKey;
    }
}
