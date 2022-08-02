<?php

namespace ContainerOviqYva;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfa7f1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb5cd1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties45df3 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'getConnection', array(), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'getMetadataFactory', array(), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'getExpressionBuilder', array(), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'beginTransaction', array(), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'getCache', array(), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'transactional', array('func' => $func), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'commit', array(), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->commit();
    }

    public function rollback()
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'rollback', array(), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'getClassMetadata', array('className' => $className), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'createQuery', array('dql' => $dql), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'createNamedQuery', array('name' => $name), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'createQueryBuilder', array(), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'flush', array('entity' => $entity), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'clear', array('entityName' => $entityName), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->clear($entityName);
    }

    public function close()
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'close', array(), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->close();
    }

    public function persist($entity)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'persist', array('entity' => $entity), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'remove', array('entity' => $entity), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'refresh', array('entity' => $entity), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'detach', array('entity' => $entity), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'merge', array('entity' => $entity), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'contains', array('entity' => $entity), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'getEventManager', array(), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'getConfiguration', array(), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'isOpen', array(), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'getUnitOfWork', array(), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'getProxyFactory', array(), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'initializeObject', array('obj' => $obj), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'getFilters', array(), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'isFiltersStateClean', array(), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'hasFilters', array(), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return $this->valueHolderfa7f1->hasFilters();
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

        $instance->initializerb5cd1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfa7f1) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfa7f1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfa7f1->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, '__get', ['name' => $name], $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        if (isset(self::$publicProperties45df3[$name])) {
            return $this->valueHolderfa7f1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa7f1;

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

        $targetObject = $this->valueHolderfa7f1;
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
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa7f1;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfa7f1;
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
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, '__isset', array('name' => $name), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa7f1;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfa7f1;
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
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, '__unset', array('name' => $name), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa7f1;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfa7f1;
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
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, '__clone', array(), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        $this->valueHolderfa7f1 = clone $this->valueHolderfa7f1;
    }

    public function __sleep()
    {
        $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, '__sleep', array(), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;

        return array('valueHolderfa7f1');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb5cd1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb5cd1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb5cd1 && ($this->initializerb5cd1->__invoke($valueHolderfa7f1, $this, 'initializeProxy', array(), $this->initializerb5cd1) || 1) && $this->valueHolderfa7f1 = $valueHolderfa7f1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfa7f1;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfa7f1;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
