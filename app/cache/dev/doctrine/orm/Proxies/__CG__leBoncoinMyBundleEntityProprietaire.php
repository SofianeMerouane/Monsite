<?php

namespace Proxies\__CG__\le\Boncoin\MyBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Proprietaire extends \le\Boncoin\MyBundle\Entity\Proprietaire implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'le\\Boncoin\\MyBundle\\Entity\\Proprietaire' . "\0" . 'id', '' . "\0" . 'le\\Boncoin\\MyBundle\\Entity\\Proprietaire' . "\0" . 'annonce', '' . "\0" . 'le\\Boncoin\\MyBundle\\Entity\\Proprietaire' . "\0" . 'nom', '' . "\0" . 'le\\Boncoin\\MyBundle\\Entity\\Proprietaire' . "\0" . 'prenom', '' . "\0" . 'le\\Boncoin\\MyBundle\\Entity\\Proprietaire' . "\0" . 'mail'];
        }

        return ['__isInitialized__', '' . "\0" . 'le\\Boncoin\\MyBundle\\Entity\\Proprietaire' . "\0" . 'id', '' . "\0" . 'le\\Boncoin\\MyBundle\\Entity\\Proprietaire' . "\0" . 'annonce', '' . "\0" . 'le\\Boncoin\\MyBundle\\Entity\\Proprietaire' . "\0" . 'nom', '' . "\0" . 'le\\Boncoin\\MyBundle\\Entity\\Proprietaire' . "\0" . 'prenom', '' . "\0" . 'le\\Boncoin\\MyBundle\\Entity\\Proprietaire' . "\0" . 'mail'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Proprietaire $proxy) {
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
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom($prenom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setMail($mail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMail', [$mail]);

        return parent::setMail($mail);
    }

    /**
     * {@inheritDoc}
     */
    public function getMail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMail', []);

        return parent::getMail();
    }

    /**
     * {@inheritDoc}
     */
    public function addProprietaire(\le\Boncoin\MyBundle\Entity\Annonce $proprietaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProprietaire', [$proprietaire]);

        return parent::addProprietaire($proprietaire);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProprietaire(\le\Boncoin\MyBundle\Entity\Annonce $proprietaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProprietaire', [$proprietaire]);

        return parent::removeProprietaire($proprietaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getProprietaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProprietaire', []);

        return parent::getProprietaire();
    }

}
