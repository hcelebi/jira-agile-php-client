<?php

namespace JiraAgileClient\Service;

use GuzzleHttp\Client;
use JiraAgileClient\Dto\BoardsResult;
use JiraAgileClient\Dto\SprintsResult;
use JiraAgileClient\Mapper\BoardsResultMapper;
use JiraAgileClient\Mapper\SprintsResultMapper;
use JiraAgileClient\Request\GetAllSprintsRequest;
use JiraAgileClient\Request\GetBoardsRequest;

class BoardService
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

    /**
     * @param GetBoardsRequest $getBoardsRequest
     * @return BoardsResult
     */
    public function getBoards(GetBoardsRequest $getBoardsRequest) : BoardsResult
    {
        $response = $this->client->request('GET', 'board/');
        $responseData = json_decode($response->getBody()->getContents());
        return BoardsResultMapper::map($responseData);
    }

    public function getAllSprints(GetAllSprintsRequest $getAllSprintsRequest) : SprintsResult
    {
        $response = $this->client->request('GET', 'board/' . $getAllSprintsRequest->getBoardId() . "/sprint?startAt=" . $getAllSprintsRequest->getStartAt() . "&maxResults=" . $getAllSprintsRequest->getMaxResults());
        $responseData = json_decode($response->getBody()->getContents());
        return SprintsResultMapper::map($responseData);
    }
}