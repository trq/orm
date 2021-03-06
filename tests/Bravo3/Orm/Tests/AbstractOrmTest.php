<?php
namespace Bravo3\Orm\Tests;

use Bravo3\Orm\Drivers\Redis\RedisDriver;
use Bravo3\Orm\Mappers\Annotation\AnnotationMapper;
use Bravo3\Orm\Services\EntityManager;
use Predis\Client;

abstract class AbstractOrmTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return EntityManager
     */
    protected function getEntityManager()
    {
        $driver = $this->getDriver();
        $driver->setDebugMode(true);
        $mapper = new AnnotationMapper();
        return EntityManager::build($driver, $mapper);
    }

    protected function getDriver()
    {
        return new RedisDriver(['host' => 'localhost']);
    }

    protected function getRawRedisClient()
    {
        return new Client(['host' => 'localhost']);
    }
}
