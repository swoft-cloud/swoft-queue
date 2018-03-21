<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */
namespace Swoft\Queue\Event;

use Swoft\Event\Event;

class JobEvent extends Event
{
    
    /**
     * @var Queue
     * @inheritdoc
     */
    public $sender;
    /**
     * @var string|null unique id of a job
     */
    public $id;
    /**
     * @var JobInterface
     */
    public $job;
    /**
     * @var int time to reserve in seconds of the job
     */
    public $ttr;



}