<?php

namespace Proxies\__CG__\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class VirtualInterface extends \Entities\VirtualInterface implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'name', 'description', 'mtu', 'trunk', 'channelgroup', 'lag_framing', 'fastlacp', 'id', 'PhysicalInterfaces', 'VlanInterfaces', 'MACAddresses', 'Customer', '' . "\0" . 'Entities\\VirtualInterface' . "\0" . 'SflowReceivers'];
        }

        return ['__isInitialized__', 'name', 'description', 'mtu', 'trunk', 'channelgroup', 'lag_framing', 'fastlacp', 'id', 'PhysicalInterfaces', 'VlanInterfaces', 'MACAddresses', 'Customer', '' . "\0" . 'Entities\\VirtualInterface' . "\0" . 'SflowReceivers'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (VirtualInterface $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setMtu($mtu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMtu', [$mtu]);

        return parent::setMtu($mtu);
    }

    /**
     * {@inheritDoc}
     */
    public function getMtu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMtu', []);

        return parent::getMtu();
    }

    /**
     * {@inheritDoc}
     */
    public function setTrunk($trunk)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTrunk', [$trunk]);

        return parent::setTrunk($trunk);
    }

    /**
     * {@inheritDoc}
     */
    public function getLagFraming(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLagFraming', []);

        return parent::getLagFraming();
    }

    /**
     * {@inheritDoc}
     */
    public function setLagFraming(bool $lag_framing): \Entities\VirtualInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLagFraming', [$lag_framing]);

        return parent::setLagFraming($lag_framing);
    }

    /**
     * {@inheritDoc}
     */
    public function getFastLACP(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFastLACP', []);

        return parent::getFastLACP();
    }

    /**
     * {@inheritDoc}
     */
    public function setFastLACP(bool $fastlacp): \Entities\VirtualInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFastLACP', [$fastlacp]);

        return parent::setFastLACP($fastlacp);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrunk()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrunk', []);

        return parent::getTrunk();
    }

    /**
     * {@inheritDoc}
     */
    public function setChannelgroup($channelgroup)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChannelgroup', [$channelgroup]);

        return parent::setChannelgroup($channelgroup);
    }

    /**
     * {@inheritDoc}
     */
    public function getChannelgroup()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChannelgroup', []);

        return parent::getChannelgroup();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getBundleName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBundleName', []);

        return parent::getBundleName();
    }

    /**
     * {@inheritDoc}
     */
    public function addPhysicalInterface(\Entities\PhysicalInterface $physicalInterfaces)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPhysicalInterface', [$physicalInterfaces]);

        return parent::addPhysicalInterface($physicalInterfaces);
    }

    /**
     * {@inheritDoc}
     */
    public function removePhysicalInterface(\Entities\PhysicalInterface $physicalInterfaces)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePhysicalInterface', [$physicalInterfaces]);

        return parent::removePhysicalInterface($physicalInterfaces);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhysicalInterfaces()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhysicalInterfaces', []);

        return parent::getPhysicalInterfaces();
    }

    /**
     * {@inheritDoc}
     */
    public function addVlanInterface(\Entities\VlanInterface $vlanInterfaces)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addVlanInterface', [$vlanInterfaces]);

        return parent::addVlanInterface($vlanInterfaces);
    }

    /**
     * {@inheritDoc}
     */
    public function removeVlanInterface(\Entities\VlanInterface $vlanInterfaces)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeVlanInterface', [$vlanInterfaces]);

        return parent::removeVlanInterface($vlanInterfaces);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlanInterfaces()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlanInterfaces', []);

        return parent::getVlanInterfaces();
    }

    /**
     * {@inheritDoc}
     */
    public function addMACAddresses(\Entities\MACAddress $mACAddresses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMACAddresses', [$mACAddresses]);

        return parent::addMACAddresses($mACAddresses);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMACAddresses(\Entities\MACAddress $mACAddresses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMACAddresses', [$mACAddresses]);

        return parent::removeMACAddresses($mACAddresses);
    }

    /**
     * {@inheritDoc}
     */
    public function getMACAddresses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMACAddresses', []);

        return parent::getMACAddresses();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomer(\Entities\Customer $customer = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomer', [$customer]);

        return parent::setCustomer($customer);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomer', []);

        return parent::getCustomer();
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function addMACAddresse(\Entities\MACAddress $mACAddresses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMACAddresse', [$mACAddresses]);

        return parent::addMACAddresse($mACAddresses);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMACAddresse(\Entities\MACAddress $mACAddresses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMACAddresse', [$mACAddresses]);

        return parent::removeMACAddresse($mACAddresses);
    }

    /**
     * {@inheritDoc}
     */
    public function addMACAddress(\Entities\MACAddress $mACAddresses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMACAddress', [$mACAddresses]);

        return parent::addMACAddress($mACAddresses);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMACAddress(\Entities\MACAddress $mACAddresses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMACAddress', [$mACAddresses]);

        return parent::removeMACAddress($mACAddresses);
    }

    /**
     * {@inheritDoc}
     */
    public function addSflowReceiver(\Entities\SflowReceiver $sflowReceiver)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSflowReceiver', [$sflowReceiver]);

        return parent::addSflowReceiver($sflowReceiver);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSflowReceiver(\Entities\SflowReceiver $sflowReceiver)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSflowReceiver', [$sflowReceiver]);

        return parent::removeSflowReceiver($sflowReceiver);
    }

    /**
     * {@inheritDoc}
     */
    public function getSflowReceivers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSflowReceivers', []);

        return parent::getSflowReceivers();
    }

    /**
     * {@inheritDoc}
     */
    public function speed($connectedOnly = true): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'speed', [$connectedOnly]);

        return parent::speed($connectedOnly);
    }

}
