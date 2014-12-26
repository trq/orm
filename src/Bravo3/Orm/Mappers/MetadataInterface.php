<?php
namespace Bravo3\Orm\Mappers;

/**
 * Retrieves metadata on a given entity
 */
interface MetadataInterface
{
    /**
     * Gets the entity table name
     *
     * @return string
     */
    public function getTableName();

    /**
     * Get the entities ID
     *
     * @return string
     */
    public function getEntityId();
}
