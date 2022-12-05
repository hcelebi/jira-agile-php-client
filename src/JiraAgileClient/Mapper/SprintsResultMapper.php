<?php

namespace JiraAgileClient\Mapper;

use JiraAgileClient\Dto\Sprint;
use JiraAgileClient\Dto\SprintsResult;

class SprintsResultMapper
{
    public static function getSprint(\stdClass $response) : Sprint
    {
        $sprint = new Sprint();
        $sprint->setId($response->id);
        $sprint->setSelf($response->self);
        $sprint->setState($response->state);
        $sprint->setName($response->name);
        $sprint->setStartDate($response->startDate);
        $sprint->setEndDate($response->endDate);
        $sprint->setCompleteDate($response->completeDate);
        $sprint->setOriginBoardId($response->originBoardId);
        $sprint->setGoal($response->goal);
        return $sprint;
    }

    public static function map(\stdClass $response) : SprintsResult {
        $sprintsResult = new SprintsResult();
        $sprintsResult->setMaxResults($response->maxResults);
        $sprintsResult->setStartAt($response->startAt);
        $sprintsResult->setTotal($response->total);
        $sprintsResult->setIsLast($response->isLast);
        $sprints = [];
        if ($response->values != null) {
            foreach ($response->values as $value) {
                $sprints[] = self::getSprint($value);
            }
        }
        $sprintsResult->setValues($sprints);
        return $sprintsResult;
    }
}