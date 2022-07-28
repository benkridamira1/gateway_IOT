<?php

namespace ContainerHMzApxx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder11f07 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdca0c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc7604 = [
        
    ];

    public function getConnection()
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'getConnection', array(), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'getMetadataFactory', array(), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'getExpressionBuilder', array(), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'beginTransaction', array(), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'getCache', array(), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'transactional', array('func' => $func), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'commit', array(), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->commit();
    }

    public function rollback()
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'rollback', array(), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'getClassMetadata', array('className' => $className), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'createQuery', array('dql' => $dql), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'createNamedQuery', array('name' => $name), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'createQueryBuilder', array(), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'flush', array('entity' => $entity), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'clear', array('entityName' => $entityName), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->clear($entityName);
    }

    public function close()
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'close', array(), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->close();
    }

    public function persist($entity)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'persist', array('entity' => $entity), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'remove', array('entity' => $entity), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'refresh', array('entity' => $entity), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'detach', array('entity' => $entity), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'merge', array('entity' => $entity), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'contains', array('entity' => $entity), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'getEventManager', array(), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'getConfiguration', array(), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'isOpen', array(), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'getUnitOfWork', array(), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'getProxyFactory', array(), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'initializeObject', array('obj' => $obj), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'getFilters', array(), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'isFiltersStateClean', array(), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'hasFilters', array(), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return $this->valueHolder11f07->hasFilters();
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

        $instance->initializerdca0c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder11f07) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder11f07 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder11f07->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, '__get', ['name' => $name], $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        if (isset(self::$publicPropertiesc7604[$name])) {
            return $this->valueHolder11f07->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11f07;

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

        $targetObject = $this->valueHolder11f07;
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
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11f07;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder11f07;
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
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, '__isset', array('name' => $name), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11f07;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder11f07;
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
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, '__unset', array('name' => $name), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11f07;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder11f07;
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
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, '__clone', array(), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        $this->valueHolder11f07 = clone $this->valueHolder11f07;
    }

    public function __sleep()
    {
        $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, '__sleep', array(), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;

        return array('valueHolder11f07');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdca0c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdca0c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdca0c && ($this->initializerdca0c->__invoke($valueHolder11f07, $this, 'initializeProxy', array(), $this->initializerdca0c) || 1) && $this->valueHolder11f07 = $valueHolder11f07;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder11f07;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder11f07;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
