<?php

namespace Container2bv1tPF;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8354d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0d860 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties87f39 = [
        
    ];

    public function getConnection()
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'getConnection', array(), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'getMetadataFactory', array(), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'getExpressionBuilder', array(), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'beginTransaction', array(), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'getCache', array(), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'transactional', array('func' => $func), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->transactional($func);
    }

    public function commit()
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'commit', array(), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->commit();
    }

    public function rollback()
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'rollback', array(), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'getClassMetadata', array('className' => $className), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'createQuery', array('dql' => $dql), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'createNamedQuery', array('name' => $name), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'createQueryBuilder', array(), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'flush', array('entity' => $entity), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'clear', array('entityName' => $entityName), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->clear($entityName);
    }

    public function close()
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'close', array(), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->close();
    }

    public function persist($entity)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'persist', array('entity' => $entity), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'remove', array('entity' => $entity), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'refresh', array('entity' => $entity), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'detach', array('entity' => $entity), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'merge', array('entity' => $entity), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'contains', array('entity' => $entity), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'getEventManager', array(), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'getConfiguration', array(), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'isOpen', array(), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'getUnitOfWork', array(), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'getProxyFactory', array(), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'initializeObject', array('obj' => $obj), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'getFilters', array(), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'isFiltersStateClean', array(), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'hasFilters', array(), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return $this->valueHolder8354d->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer0d860 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8354d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8354d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8354d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, '__get', ['name' => $name], $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        if (isset(self::$publicProperties87f39[$name])) {
            return $this->valueHolder8354d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8354d;

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

        $targetObject = $this->valueHolder8354d;
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
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8354d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8354d;
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
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, '__isset', array('name' => $name), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8354d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8354d;
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
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, '__unset', array('name' => $name), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8354d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8354d;
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
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, '__clone', array(), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        $this->valueHolder8354d = clone $this->valueHolder8354d;
    }

    public function __sleep()
    {
        $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, '__sleep', array(), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;

        return array('valueHolder8354d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0d860 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0d860;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0d860 && ($this->initializer0d860->__invoke($valueHolder8354d, $this, 'initializeProxy', array(), $this->initializer0d860) || 1) && $this->valueHolder8354d = $valueHolder8354d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8354d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8354d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
