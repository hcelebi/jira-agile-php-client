<?php

namespace JiraAgileClient\Service;

use GuzzleHttp\Client;
use JiraAgileClient\Dto\BoardsResult;
use JiraAgileClient\Dto\SprintsResult;
use JiraAgileClient\Mapper\BoardsResultMapper;
use JiraAgileClient\Mapper\SprintsResultMapper;
use JiraAgileClient\Request\GetAllSprintsRequest;
use JiraAgileClient\Request\GetBoardIssuesForSprintRequest;
use JiraAgileClient\Request\GetBoardsRequest;
use JiraAgileClient\Request\UpdateRankRequest;
use JiraClient\Dto\SearchResult;
use JiraClient\Mapper\SearchResultMapper;

class IssueService
{
    /** @var Client */
    private $client;

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @param Client $client
     */
    public function setClient(Client $client): void
    {
        $this->client = $client;
    }

    public function updateRank(UpdateRankRequest $updateRankRequest) : void {
        $this->client->put("issue/rank", $updateRankRequest->toArray());
    }
}