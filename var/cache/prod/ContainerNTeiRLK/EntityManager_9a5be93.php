<?php

namespace ContainerNTeiRLK;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder1b0f3 = null;
    private $initializer1009f = null;
    private static $publicPropertiesa693f = [
        
    ];
    public function getConnection()
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'getConnection', array(), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'getMetadataFactory', array(), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'getExpressionBuilder', array(), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'beginTransaction', array(), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'getCache', array(), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->getCache();
    }
    public function transactional($func)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'transactional', array('func' => $func), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->transactional($func);
    }
    public function commit()
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'commit', array(), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->commit();
    }
    public function rollback()
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'rollback', array(), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'getClassMetadata', array('className' => $className), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'createQuery', array('dql' => $dql), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'createNamedQuery', array('name' => $name), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'createQueryBuilder', array(), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'flush', array('entity' => $entity), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'clear', array('entityName' => $entityName), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->clear($entityName);
    }
    public function close()
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'close', array(), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->close();
    }
    public function persist($entity)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'persist', array('entity' => $entity), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'remove', array('entity' => $entity), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'refresh', array('entity' => $entity), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'detach', array('entity' => $entity), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'merge', array('entity' => $entity), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'contains', array('entity' => $entity), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'getEventManager', array(), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'getConfiguration', array(), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'isOpen', array(), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'getUnitOfWork', array(), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'getProxyFactory', array(), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'initializeObject', array('obj' => $obj), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'getFilters', array(), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'isFiltersStateClean', array(), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'hasFilters', array(), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return $this->valueHolder1b0f3->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer1009f = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder1b0f3) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1b0f3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder1b0f3->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, '__get', ['name' => $name], $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        if (isset(self::$publicPropertiesa693f[$name])) {
            return $this->valueHolder1b0f3->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b0f3;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder1b0f3;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b0f3;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder1b0f3;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, '__isset', array('name' => $name), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b0f3;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder1b0f3;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, '__unset', array('name' => $name), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b0f3;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder1b0f3;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, '__clone', array(), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        $this->valueHolder1b0f3 = clone $this->valueHolder1b0f3;
    }
    public function __sleep()
    {
        $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, '__sleep', array(), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
        return array('valueHolder1b0f3');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1009f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1009f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer1009f && ($this->initializer1009f->__invoke($valueHolder1b0f3, $this, 'initializeProxy', array(), $this->initializer1009f) || 1) && $this->valueHolder1b0f3 = $valueHolder1b0f3;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1b0f3;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1b0f3;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
