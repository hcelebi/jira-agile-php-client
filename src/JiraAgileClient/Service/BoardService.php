<?php

namespace JiraAgileClient\Service;

use GuzzleHttp\Client;
use JiraAgileClient\Dto\BoardsResult;
use JiraAgileClient\Mapper\BoardResultMapper;
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
        return BoardResultMapper::map($response);
    }
}