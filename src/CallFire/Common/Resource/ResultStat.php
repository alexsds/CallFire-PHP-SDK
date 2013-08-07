<?php

namespace CallFire\Common\Resource;

class ResultStat extends AbstractResource
{

    /**
     * @var string
     */
    public $result = null;

    /**
     * @var int
     */
    public $attempts = null;

    /**
     * @var int
     */
    public $actions = null;

    public function getResult()
    {
        return $this->result;
    }

    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    public function getAttempts()
    {
        return $this->attempts;
    }

    public function setAttempts($attempts)
    {
        $this->attempts = $attempts;

        return $this;
    }

    public function getActions()
    {
        return $this->actions;
    }

    public function setActions($actions)
    {
        $this->actions = $actions;

        return $this;
    }

}
