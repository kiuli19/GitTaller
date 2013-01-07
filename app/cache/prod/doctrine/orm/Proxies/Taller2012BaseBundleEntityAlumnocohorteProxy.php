<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Taller2012BaseBundleEntityAlumnocohorteProxy extends \Taller2012\BaseBundle\Entity\Alumnocohorte implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function setEstado($estado)
    {
        $this->__load();
        return parent::setEstado($estado);
    }

    public function getEstado()
    {
        $this->__load();
        return parent::getEstado();
    }

    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setIdcohorte(\Taller2012\BaseBundle\Entity\Cohorte $idcohorte)
    {
        $this->__load();
        return parent::setIdcohorte($idcohorte);
    }

    public function getIdcohorte()
    {
        $this->__load();
        return parent::getIdcohorte();
    }

    public function setIdpersona(\Taller2012\BaseBundle\Entity\Persona $idpersona)
    {
        $this->__load();
        return parent::setIdpersona($idpersona);
    }

    public function getIdpersona()
    {
        $this->__load();
        return parent::getIdpersona();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'estado', 'id', 'idcohorte', 'idpersona');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}