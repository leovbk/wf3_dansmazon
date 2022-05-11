<?php

namespace ContainerOm1cL0A;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbb9b2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer26b4d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties16246 = [
        
    ];

    public function getConnection()
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'getConnection', array(), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'getMetadataFactory', array(), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'getExpressionBuilder', array(), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'beginTransaction', array(), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'getCache', array(), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->getCache();
    }

    public function transactional($func)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'transactional', array('func' => $func), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'wrapInTransaction', array('func' => $func), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'commit', array(), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->commit();
    }

    public function rollback()
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'rollback', array(), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'getClassMetadata', array('className' => $className), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'createQuery', array('dql' => $dql), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'createNamedQuery', array('name' => $name), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'createQueryBuilder', array(), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'flush', array('entity' => $entity), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'clear', array('entityName' => $entityName), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->clear($entityName);
    }

    public function close()
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'close', array(), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->close();
    }

    public function persist($entity)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'persist', array('entity' => $entity), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'remove', array('entity' => $entity), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'refresh', array('entity' => $entity), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'detach', array('entity' => $entity), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'merge', array('entity' => $entity), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'getRepository', array('entityName' => $entityName), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'contains', array('entity' => $entity), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'getEventManager', array(), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'getConfiguration', array(), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'isOpen', array(), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'getUnitOfWork', array(), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'getProxyFactory', array(), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'initializeObject', array('obj' => $obj), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'getFilters', array(), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'isFiltersStateClean', array(), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'hasFilters', array(), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return $this->valueHolderbb9b2->hasFilters();
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

        $instance->initializer26b4d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbb9b2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbb9b2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbb9b2->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, '__get', ['name' => $name], $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        if (isset(self::$publicProperties16246[$name])) {
            return $this->valueHolderbb9b2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbb9b2;

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

        $targetObject = $this->valueHolderbb9b2;
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
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbb9b2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbb9b2;
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
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, '__isset', array('name' => $name), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbb9b2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbb9b2;
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
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, '__unset', array('name' => $name), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbb9b2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbb9b2;
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
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, '__clone', array(), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        $this->valueHolderbb9b2 = clone $this->valueHolderbb9b2;
    }

    public function __sleep()
    {
        $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, '__sleep', array(), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;

        return array('valueHolderbb9b2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer26b4d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer26b4d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer26b4d && ($this->initializer26b4d->__invoke($valueHolderbb9b2, $this, 'initializeProxy', array(), $this->initializer26b4d) || 1) && $this->valueHolderbb9b2 = $valueHolderbb9b2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbb9b2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbb9b2;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
