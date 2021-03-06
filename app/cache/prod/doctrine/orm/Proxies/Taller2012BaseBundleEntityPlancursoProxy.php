<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Taller2012BaseBundleEntityPlancursoProxy extends \Taller2012\BaseBundle\Entity\Plancurso implements \Doctrine\ORM\Proxy\Proxy
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
    
    
    public function setPuntos($puntos)
    {
        $this->__load();
        return parent::setPuntos($puntos);
    }

    public function getPuntos()
    {
        $this->__load();
        return parent::getPuntos();
    }

    public function setObligatorio($obligatorio)
    {
        $this->__load();
        return parent::setObligatorio($obligatorio);
    }

    public function getObligatorio()
    {
        $this->__load();
        return parent::getObligatorio();
    }

    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setIdcurso(\Taller2012\BaseBundle\Entity\Curso $idcurso)
    {
        $this->__load();
        return parent::setIdcurso($idcurso);
    }

    public function getIdcurso()
    {
        $this->__load();
        return parent::getIdcurso();
    }

    public function setIdplan(\Taller2012\BaseBundle\Entity\Plan $idplan)
    {
        $this->__load();
        return parent::setIdplan($idplan);
    }

    public function getIdplan()
    {
        $this->__load();
        return parent::getIdplan();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'puntos', 'obligatorio', 'id', 'idcurso', 'idplan');
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