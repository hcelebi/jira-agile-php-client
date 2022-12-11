<?php

namespace JiraAgileClient\Request;

class UpdateRankRequest
{
    private string $rankBeforeIssue;
    private int $rankCustomFieldId;
    private array $issues;

    

	/**
	 * @return int
	 */
	public function getRankCustomFieldId(): int {
		return $this->rankCustomFieldId;
	}
	
	/**
	 * @param int $rankCustomFieldId 
	 * @return self
	 */
	public function setRankCustomFieldId(int $rankCustomFieldId): self {
		$this->rankCustomFieldId = $rankCustomFieldId;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getIssues(): array {
		return $this->issues;
	}
	
	/**
	 * @param array $issues 
	 * @return self
	 */
	public function setIssues(array $issues): self {
		$this->issues = $issues;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRankBeforeIssue(): string {
		return $this->rankBeforeIssue;
	}

	/**
	 * @param string $rankBeforeIssue 
	 * @return self
	 */
	public function setRankBeforeIssue(string $rankBeforeIssue): self {
		$this->rankBeforeIssue = $rankBeforeIssue;
		return $this;
	}

    public function toArray() : array
    {
        return get_object_vars($this);
    }

    public function toJson() : string
    {
        return json_encode($this->toArray());
    }
}