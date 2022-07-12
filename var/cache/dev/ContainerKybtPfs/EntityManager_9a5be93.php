<?php

namespace ContainerKybtPfs;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder72bd7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer32d98 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa7a4e = [
        
    ];

    public function getConnection()
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'getConnection', array(), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'getMetadataFactory', array(), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'getExpressionBuilder', array(), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'beginTransaction', array(), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'getCache', array(), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->getCache();
    }

    public function transactional($func)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'transactional', array('func' => $func), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'wrapInTransaction', array('func' => $func), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'commit', array(), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->commit();
    }

    public function rollback()
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'rollback', array(), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'getClassMetadata', array('className' => $className), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'createQuery', array('dql' => $dql), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'createNamedQuery', array('name' => $name), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'createQueryBuilder', array(), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'flush', array('entity' => $entity), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'clear', array('entityName' => $entityName), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->clear($entityName);
    }

    public function close()
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'close', array(), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->close();
    }

    public function persist($entity)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'persist', array('entity' => $entity), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'remove', array('entity' => $entity), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'refresh', array('entity' => $entity), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'detach', array('entity' => $entity), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'merge', array('entity' => $entity), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'getRepository', array('entityName' => $entityName), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'contains', array('entity' => $entity), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'getEventManager', array(), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'getConfiguration', array(), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'isOpen', array(), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'getUnitOfWork', array(), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'getProxyFactory', array(), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'initializeObject', array('obj' => $obj), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'getFilters', array(), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'isFiltersStateClean', array(), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'hasFilters', array(), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return $this->valueHolder72bd7->hasFilters();
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

        $instance->initializer32d98 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder72bd7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder72bd7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder72bd7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, '__get', ['name' => $name], $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        if (isset(self::$publicPropertiesa7a4e[$name])) {
            return $this->valueHolder72bd7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder72bd7;

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

        $targetObject = $this->valueHolder72bd7;
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
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder72bd7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder72bd7;
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
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, '__isset', array('name' => $name), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder72bd7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder72bd7;
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
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, '__unset', array('name' => $name), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder72bd7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder72bd7;
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
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, '__clone', array(), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        $this->valueHolder72bd7 = clone $this->valueHolder72bd7;
    }

    public function __sleep()
    {
        $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, '__sleep', array(), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;

        return array('valueHolder72bd7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer32d98 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer32d98;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer32d98 && ($this->initializer32d98->__invoke($valueHolder72bd7, $this, 'initializeProxy', array(), $this->initializer32d98) || 1) && $this->valueHolder72bd7 = $valueHolder72bd7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder72bd7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder72bd7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
