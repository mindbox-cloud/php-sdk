<?php


namespace Mindbox\DTO;

/**
 * @property string pointOfContact
 * @property string topic
 * @property string isSubscribed
 * @property string brand
 **/
abstract class SubscriptionDTO extends DTO
{
    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'subscription';

    /**
     * @return string
     */
    public function getPointOfContact()
    {
        return $this->getField('pointOfContact');
    }

    /**
     * @return string
     */
    public function getTopic()
    {
        return $this->getField('topic');
    }

    /**
     * @return string
     */
    public function getIsSubscribed()
    {
        return $this->getField('isSubscribed');
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->getField('brand');
    }
}
