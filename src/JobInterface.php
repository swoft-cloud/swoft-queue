<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace Swoft\Queue;

/**
 * Interface JobInterface
 *
 * 
 */
interface JobInterface
{
    /**
     * @param Queue $queue which pushed and is handling the job
     */
    public function execute($queue);
}