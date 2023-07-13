<?php

namespace Aternos\ModrinthApi\Tests\Unit\Client\Api;

class TestApi
{

    protected function getStorage(): ApiStorage
    {
        return ApiStorage::getInstance();
    }

}