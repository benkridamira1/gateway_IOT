<?php

namespace ContainerRycR3DF;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9c12b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer83a20 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties91434 = [
        
    ];

    public function getConnection()
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'getConnection', array(), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'getMetadataFactory', array(), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'getExpressionBuilder', array(), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'beginTransaction', array(), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'getCache', array(), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'transactional', array('func' => $func), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'commit', array(), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->commit();
    }

    public function rollback()
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'rollback', array(), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'getClassMetadata', array('className' => $className), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'createQuery', array('dql' => $dql), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'createNamedQuery', array('name' => $name), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'createQueryBuilder', array(), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'flush', array('entity' => $entity), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'clear', array('entityName' => $entityName), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->clear($entityName);
    }

    public function close()
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'close', array(), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->close();
    }

    public function persist($entity)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'persist', array('entity' => $entity), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'remove', array('entity' => $entity), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'refresh', array('entity' => $entity), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'detach', array('entity' => $entity), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'merge', array('entity' => $entity), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'contains', array('entity' => $entity), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'getEventManager', array(), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'getConfiguration', array(), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'isOpen', array(), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'getUnitOfWork', array(), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'getProxyFactory', array(), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'initializeObject', array('obj' => $obj), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'getFilters', array(), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'isFiltersStateClean', array(), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'hasFilters', array(), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return $this->valueHolder9c12b->hasFilters();
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

        $instance->initializer83a20 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9c12b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9c12b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9c12b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, '__get', ['name' => $name], $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        if (isset(self::$publicProperties91434[$name])) {
            return $this->valueHolder9c12b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c12b;

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

        $targetObject = $this->valueHolder9c12b;
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
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c12b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9c12b;
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
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, '__isset', array('name' => $name), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c12b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9c12b;
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
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, '__unset', array('name' => $name), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c12b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9c12b;
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
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, '__clone', array(), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        $this->valueHolder9c12b = clone $this->valueHolder9c12b;
    }

    public function __sleep()
    {
        $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, '__sleep', array(), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;

        return array('valueHolder9c12b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer83a20 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer83a20;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer83a20 && ($this->initializer83a20->__invoke($valueHolder9c12b, $this, 'initializeProxy', array(), $this->initializer83a20) || 1) && $this->valueHolder9c12b = $valueHolder9c12b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9c12b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9c12b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
