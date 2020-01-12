<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder144e4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer84430 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties15044 = [
        
    ];

    public function getConnection()
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'getConnection', array(), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'getMetadataFactory', array(), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'getExpressionBuilder', array(), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'beginTransaction', array(), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'getCache', array(), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->getCache();
    }

    public function transactional($func)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'transactional', array('func' => $func), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->transactional($func);
    }

    public function commit()
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'commit', array(), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->commit();
    }

    public function rollback()
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'rollback', array(), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'getClassMetadata', array('className' => $className), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'createQuery', array('dql' => $dql), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'createNamedQuery', array('name' => $name), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'createQueryBuilder', array(), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'flush', array('entity' => $entity), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'clear', array('entityName' => $entityName), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->clear($entityName);
    }

    public function close()
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'close', array(), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->close();
    }

    public function persist($entity)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'persist', array('entity' => $entity), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'remove', array('entity' => $entity), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'refresh', array('entity' => $entity), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'detach', array('entity' => $entity), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'merge', array('entity' => $entity), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'getRepository', array('entityName' => $entityName), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'contains', array('entity' => $entity), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'getEventManager', array(), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'getConfiguration', array(), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'isOpen', array(), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'getUnitOfWork', array(), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'getProxyFactory', array(), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'initializeObject', array('obj' => $obj), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'getFilters', array(), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'isFiltersStateClean', array(), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'hasFilters', array(), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return $this->valueHolder144e4->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? $reflection = new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer84430 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder144e4) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder144e4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder144e4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, '__get', ['name' => $name], $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        if (isset(self::$publicProperties15044[$name])) {
            return $this->valueHolder144e4->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder144e4;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder144e4;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder144e4;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder144e4;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, '__isset', array('name' => $name), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder144e4;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder144e4;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, '__unset', array('name' => $name), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder144e4;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder144e4;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, '__clone', array(), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        $this->valueHolder144e4 = clone $this->valueHolder144e4;
    }

    public function __sleep()
    {
        $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, '__sleep', array(), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;

        return array('valueHolder144e4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer84430 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer84430;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer84430 && ($this->initializer84430->__invoke($valueHolder144e4, $this, 'initializeProxy', array(), $this->initializer84430) || 1) && $this->valueHolder144e4 = $valueHolder144e4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder144e4;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder144e4;
    }


}
