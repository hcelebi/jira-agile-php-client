<?php

namespace JiraAgileClient\Mapper;

use JiraAgileClient\Dto\Board;
use JiraAgileClient\Dto\BoardsResult;
use JiraAgileClient\Dto\Location;

class BoardResultMapper
{
    public static function getBoard(\stdClass $response) : Board
    {
        $board = new Board();
        $board->setId($response->id);
        $board->setName($response->name);
        $location = self::getLocation($response->location);
        $board->setLocation($location);
    }

    public static function map(\stdClass $response) : BoardsResult {
        $boardsResult = new BoardsResult();
        $boardsResult->setMaxResults($response->maxResults);
        $boardsResult->setStartAt($response->startAt);
        $boardsResult->setTotal($response->total);
        $boardsResult->setIsLast($response->isLast);
        $boards = [];
        if ($response->values != null) {
            foreach ($response->values as $value) {
                $boards[] = self::getBoard($value);
            }
        }
        $boardsResult->setValues($boards);
        return $boardsResult;
    }

    /**
     * @param \stdClass $response
     * @return Location
     */
    public static function getLocation(\stdClass $response): Location
    {
        $location = new Location();
        $location->setProjectId($response->productId);
        $location->setProjectKey($response->productKey);
        $location->setProjectName($response->productName);
        return $location;
    }
}