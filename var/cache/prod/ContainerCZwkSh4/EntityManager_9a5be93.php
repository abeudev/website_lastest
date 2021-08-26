<?php

namespace ContainerCZwkSh4;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder9c0cf = null;
    private $initializera98c8 = null;
    private static $publicProperties38e24 = [
        
    ];
    public function getConnection()
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'getConnection', array(), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'getMetadataFactory', array(), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'getExpressionBuilder', array(), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'beginTransaction', array(), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->beginTransaction();
    }
    public function getCache()
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'getCache', array(), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->getCache();
    }
    public function transactional($func)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'transactional', array('func' => $func), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->transactional($func);
    }
    public function commit()
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'commit', array(), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->commit();
    }
    public function rollback()
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'rollback', array(), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'getClassMetadata', array('className' => $className), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'createQuery', array('dql' => $dql), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'createNamedQuery', array('name' => $name), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'createQueryBuilder', array(), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'flush', array('entity' => $entity), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'clear', array('entityName' => $entityName), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->clear($entityName);
    }
    public function close()
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'close', array(), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->close();
    }
    public function persist($entity)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'persist', array('entity' => $entity), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'remove', array('entity' => $entity), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'refresh', array('entity' => $entity), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'detach', array('entity' => $entity), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'merge', array('entity' => $entity), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'getRepository', array('entityName' => $entityName), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'contains', array('entity' => $entity), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'getEventManager', array(), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'getConfiguration', array(), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'isOpen', array(), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'getUnitOfWork', array(), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'getProxyFactory', array(), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'initializeObject', array('obj' => $obj), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'getFilters', array(), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'isFiltersStateClean', array(), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'hasFilters', array(), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return $this->valueHolder9c0cf->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializera98c8 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder9c0cf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9c0cf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder9c0cf->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, '__get', ['name' => $name], $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        if (isset(self::$publicProperties38e24[$name])) {
            return $this->valueHolder9c0cf->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c0cf;
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
        $targetObject = $this->valueHolder9c0cf;
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
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c0cf;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder9c0cf;
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
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, '__isset', array('name' => $name), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c0cf;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder9c0cf;
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
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, '__unset', array('name' => $name), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c0cf;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder9c0cf;
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
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, '__clone', array(), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        $this->valueHolder9c0cf = clone $this->valueHolder9c0cf;
    }
    public function __sleep()
    {
        $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, '__sleep', array(), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
        return array('valueHolder9c0cf');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera98c8 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera98c8;
    }
    public function initializeProxy() : bool
    {
        return $this->initializera98c8 && ($this->initializera98c8->__invoke($valueHolder9c0cf, $this, 'initializeProxy', array(), $this->initializera98c8) || 1) && $this->valueHolder9c0cf = $valueHolder9c0cf;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9c0cf;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9c0cf;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
