<?php

namespace CallFire\Common\Resource;

class RecordingMeta extends AbstractResource
{

    /**
     * @var long
     */
    public $id = null;

    /**
     * @var string
     */
    public $name = null;

    /**
     * @var dateTime
     */
    public $created = null;

    /**
     * @var int
     */
    public $lengthInSeconds = null;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    public function getLengthInSeconds()
    {
        return $this->lengthInSeconds;
    }

    public function setLengthInSeconds($lengthInSeconds)
    {
        $this->lengthInSeconds = $lengthInSeconds;

        return $this;
    }

}
