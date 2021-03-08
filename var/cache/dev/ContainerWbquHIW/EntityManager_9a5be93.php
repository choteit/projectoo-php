<?php

namespace ContainerWbquHIW;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder49c1a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6dccf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdafbb = [
        
    ];

    public function getConnection()
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'getConnection', array(), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'getMetadataFactory', array(), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'getExpressionBuilder', array(), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'beginTransaction', array(), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'getCache', array(), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'transactional', array('func' => $func), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->transactional($func);
    }

    public function commit()
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'commit', array(), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->commit();
    }

    public function rollback()
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'rollback', array(), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'getClassMetadata', array('className' => $className), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'createQuery', array('dql' => $dql), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'createNamedQuery', array('name' => $name), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'createQueryBuilder', array(), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'flush', array('entity' => $entity), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'clear', array('entityName' => $entityName), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->clear($entityName);
    }

    public function close()
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'close', array(), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->close();
    }

    public function persist($entity)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'persist', array('entity' => $entity), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'remove', array('entity' => $entity), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'refresh', array('entity' => $entity), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'detach', array('entity' => $entity), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'merge', array('entity' => $entity), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'contains', array('entity' => $entity), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'getEventManager', array(), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'getConfiguration', array(), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'isOpen', array(), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'getUnitOfWork', array(), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'getProxyFactory', array(), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'initializeObject', array('obj' => $obj), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'getFilters', array(), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'isFiltersStateClean', array(), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'hasFilters', array(), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return $this->valueHolder49c1a->hasFilters();
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

        $instance->initializer6dccf = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder49c1a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder49c1a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder49c1a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, '__get', ['name' => $name], $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        if (isset(self::$publicPropertiesdafbb[$name])) {
            return $this->valueHolder49c1a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49c1a;

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

        $targetObject = $this->valueHolder49c1a;
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
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49c1a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder49c1a;
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
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, '__isset', array('name' => $name), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49c1a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder49c1a;
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
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, '__unset', array('name' => $name), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49c1a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder49c1a;
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
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, '__clone', array(), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        $this->valueHolder49c1a = clone $this->valueHolder49c1a;
    }

    public function __sleep()
    {
        $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, '__sleep', array(), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;

        return array('valueHolder49c1a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6dccf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6dccf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6dccf && ($this->initializer6dccf->__invoke($valueHolder49c1a, $this, 'initializeProxy', array(), $this->initializer6dccf) || 1) && $this->valueHolder49c1a = $valueHolder49c1a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder49c1a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder49c1a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
