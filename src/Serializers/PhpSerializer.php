<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace Swoft\Queue\Serializers;



class PhpSerializer implements SerializerInterface
{

    public function serialize($job)
    {
        return serialize($job);
    }


    public function unserialize($serialized)
    {
        return unserialize($serialized);
    }
}