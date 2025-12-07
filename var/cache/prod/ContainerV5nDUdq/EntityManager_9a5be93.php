<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf2c1c = null;
    private $initializercf106 = null;
    private static $publicPropertiesabbdc = [
        
    ];
    public function getConnection()
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'getConnection', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'getMetadataFactory', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'getExpressionBuilder', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'beginTransaction', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->beginTransaction();
    }
    public function getCache()
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'getCache', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->getCache();
    }
    public function transactional($func)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'transactional', array('func' => $func), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'wrapInTransaction', array('func' => $func), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'commit', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->commit();
    }
    public function rollback()
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'rollback', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'getClassMetadata', array('className' => $className), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'createQuery', array('dql' => $dql), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'createNamedQuery', array('name' => $name), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'createQueryBuilder', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'flush', array('entity' => $entity), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'clear', array('entityName' => $entityName), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->clear($entityName);
    }
    public function close()
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'close', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->close();
    }
    public function persist($entity)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'persist', array('entity' => $entity), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'remove', array('entity' => $entity), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'refresh', array('entity' => $entity), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'detach', array('entity' => $entity), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'merge', array('entity' => $entity), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'getRepository', array('entityName' => $entityName), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'contains', array('entity' => $entity), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'getEventManager', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'getConfiguration', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'isOpen', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'getUnitOfWork', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'getProxyFactory', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'initializeObject', array('obj' => $obj), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'getFilters', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'isFiltersStateClean', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'hasFilters', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializercf106 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderf2c1c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf2c1c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderf2c1c->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, '__get', ['name' => $name], $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        if (isset(self::$publicPropertiesabbdc[$name])) {
            return $this->valueHolderf2c1c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2c1c;
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
        $targetObject = $this->valueHolderf2c1c;
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
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2c1c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf2c1c;
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
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, '__isset', array('name' => $name), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2c1c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderf2c1c;
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
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, '__unset', array('name' => $name), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2c1c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderf2c1c;
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
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, '__clone', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        $this->valueHolderf2c1c = clone $this->valueHolderf2c1c;
    }
    public function __sleep()
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, '__sleep', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return array('valueHolderf2c1c');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercf106 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercf106;
    }
    public function initializeProxy() : bool
    {
        return $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'initializeProxy', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf2c1c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf2c1c;
    }
}
