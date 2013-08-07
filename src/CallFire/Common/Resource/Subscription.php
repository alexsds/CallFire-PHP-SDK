<?php

namespace CallFire\Common\Resource;

class Subscription extends AbstractResource
{

    /**
     * @var long
     */
    public $id = null;

    /**
     * @var boolean
     */
    public $enabled = null;

    /**
     * @var anyURI
     */
    public $endpoint = null;

    /**
     * @var string
     */
    public $notificationFormat = null;

    /**
     * @var string
     */
    public $triggerEvent = null;

    /**
     * @var SubscriptionFilter
     */
    public $subscriptionFilter = null;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getEnabled()
    {
        return $this->enabled;
    }

    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getEndpoint()
    {
        return $this->endpoint;
    }

    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;

        return $this;
    }

    public function getNotificationFormat()
    {
        return $this->notificationFormat;
    }

    public function setNotificationFormat($notificationFormat)
    {
        $this->notificationFormat = $notificationFormat;

        return $this;
    }

    public function getTriggerEvent()
    {
        return $this->triggerEvent;
    }

    public function setTriggerEvent($triggerEvent)
    {
        $this->triggerEvent = $triggerEvent;

        return $this;
    }

    public function getSubscriptionFilter()
    {
        return $this->subscriptionFilter;
    }

    public function setSubscriptionFilter($subscriptionFilter)
    {
        $this->subscriptionFilter = $subscriptionFilter;

        return $this;
    }

}
