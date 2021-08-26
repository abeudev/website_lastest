<?php

namespace ContainerF8pMxhn;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5307c = null;
    private $initializer0fba2 = null;
    private static $publicProperties2bbc5 = [
        
    ];
    public function getConnection()
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'getConnection', array(), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'getMetadataFactory', array(), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'getExpressionBuilder', array(), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'beginTransaction', array(), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'getCache', array(), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->getCache();
    }
    public function transactional($func)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'transactional', array('func' => $func), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->transactional($func);
    }
    public function commit()
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'commit', array(), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->commit();
    }
    public function rollback()
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'rollback', array(), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'getClassMetadata', array('className' => $className), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'createQuery', array('dql' => $dql), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'createNamedQuery', array('name' => $name), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'createQueryBuilder', array(), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'flush', array('entity' => $entity), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'clear', array('entityName' => $entityName), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->clear($entityName);
    }
    public function close()
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'close', array(), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->close();
    }
    public function persist($entity)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'persist', array('entity' => $entity), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'remove', array('entity' => $entity), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'refresh', array('entity' => $entity), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'detach', array('entity' => $entity), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'merge', array('entity' => $entity), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'contains', array('entity' => $entity), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'getEventManager', array(), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'getConfiguration', array(), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'isOpen', array(), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'getUnitOfWork', array(), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'getProxyFactory', array(), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'initializeObject', array('obj' => $obj), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'getFilters', array(), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'isFiltersStateClean', array(), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'hasFilters', array(), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return $this->valueHolder5307c->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer0fba2 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder5307c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5307c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder5307c->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, '__get', ['name' => $name], $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        if (isset(self::$publicProperties2bbc5[$name])) {
            return $this->valueHolder5307c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5307c;
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
        $targetObject = $this->valueHolder5307c;
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
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5307c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder5307c;
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
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, '__isset', array('name' => $name), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5307c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder5307c;
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
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, '__unset', array('name' => $name), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5307c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5307c;
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
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, '__clone', array(), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        $this->valueHolder5307c = clone $this->valueHolder5307c;
    }
    public function __sleep()
    {
        $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, '__sleep', array(), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
        return array('valueHolder5307c');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0fba2 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0fba2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer0fba2 && ($this->initializer0fba2->__invoke($valueHolder5307c, $this, 'initializeProxy', array(), $this->initializer0fba2) || 1) && $this->valueHolder5307c = $valueHolder5307c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5307c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5307c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
