<?php

class EntityManager_dd90a94 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5a53865f7f6c4410026222 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5a53865f7f6ca293379582 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5a53865f7f69b973039780 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function getConnection()
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'getConnection', array(), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->getConnection();
    }

    /**
     * {@inheritDoc}
     */
    public function getMetadataFactory()
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'getMetadataFactory', array(), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->getMetadataFactory();
    }

    /**
     * {@inheritDoc}
     */
    public function getExpressionBuilder()
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'getExpressionBuilder', array(), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->getExpressionBuilder();
    }

    /**
     * {@inheritDoc}
     */
    public function beginTransaction()
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'beginTransaction', array(), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->beginTransaction();
    }

    /**
     * {@inheritDoc}
     */
    public function getCache()
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'getCache', array(), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->getCache();
    }

    /**
     * {@inheritDoc}
     */
    public function transactional($func)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'transactional', array('func' => $func), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->transactional($func);
    }

    /**
     * {@inheritDoc}
     */
    public function commit()
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'commit', array(), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->commit();
    }

    /**
     * {@inheritDoc}
     */
    public function rollback()
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'rollback', array(), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->rollback();
    }

    /**
     * {@inheritDoc}
     */
    public function getClassMetadata($className)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'getClassMetadata', array('className' => $className), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->getClassMetadata($className);
    }

    /**
     * {@inheritDoc}
     */
    public function createQuery($dql = '')
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'createQuery', array('dql' => $dql), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->createQuery($dql);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($name)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'createNamedQuery', array('name' => $name), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->createNamedQuery($name);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->createNativeQuery($sql, $rsm);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedNativeQuery($name)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->createNamedNativeQuery($name);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder()
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'createQueryBuilder', array(), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->createQueryBuilder();
    }

    /**
     * {@inheritDoc}
     */
    public function flush($entity = null)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'flush', array('entity' => $entity), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->flush($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->find($entityName, $id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getReference($entityName, $id)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->getReference($entityName, $id);
    }

    /**
     * {@inheritDoc}
     */
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->getPartialReference($entityName, $identifier);
    }

    /**
     * {@inheritDoc}
     */
    public function clear($entityName = null)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'clear', array('entityName' => $entityName), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->clear($entityName);
    }

    /**
     * {@inheritDoc}
     */
    public function close()
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'close', array(), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->close();
    }

    /**
     * {@inheritDoc}
     */
    public function persist($entity)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'persist', array('entity' => $entity), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->persist($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function remove($entity)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'remove', array('entity' => $entity), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->remove($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function refresh($entity)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'refresh', array('entity' => $entity), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->refresh($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function detach($entity)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'detach', array('entity' => $entity), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->detach($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function merge($entity)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'merge', array('entity' => $entity), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->merge($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function copy($entity, $deep = false)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->copy($entity, $deep);
    }

    /**
     * {@inheritDoc}
     */
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->lock($entity, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getRepository($entityName)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->getRepository($entityName);
    }

    /**
     * {@inheritDoc}
     */
    public function contains($entity)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'contains', array('entity' => $entity), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->contains($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventManager()
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'getEventManager', array(), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->getEventManager();
    }

    /**
     * {@inheritDoc}
     */
    public function getConfiguration()
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'getConfiguration', array(), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->getConfiguration();
    }

    /**
     * {@inheritDoc}
     */
    public function isOpen()
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'isOpen', array(), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->isOpen();
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitOfWork()
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'getUnitOfWork', array(), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->getUnitOfWork();
    }

    /**
     * {@inheritDoc}
     */
    public function getHydrator($hydrationMode)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->getHydrator($hydrationMode);
    }

    /**
     * {@inheritDoc}
     */
    public function newHydrator($hydrationMode)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->newHydrator($hydrationMode);
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyFactory()
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'getProxyFactory', array(), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->getProxyFactory();
    }

    /**
     * {@inheritDoc}
     */
    public function initializeObject($obj)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'initializeObject', array('obj' => $obj), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->initializeObject($obj);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilters()
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'getFilters', array(), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->getFilters();
    }

    /**
     * {@inheritDoc}
     */
    public function isFiltersStateClean()
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'isFiltersStateClean', array(), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->isFiltersStateClean();
    }

    /**
     * {@inheritDoc}
     */
    public function hasFilters()
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'hasFilters', array(), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return $this->valueHolder5a53865f7f6c4410026222->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer5a53865f7f6ca293379582 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5a53865f7f6c4410026222) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5a53865f7f6c4410026222 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5a53865f7f6c4410026222->__construct($conn, $config, $eventManager);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, '__get', ['name' => $name], $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        if (isset(self::$publicProperties5a53865f7f69b973039780[$name])) {
            return $this->valueHolder5a53865f7f6c4410026222->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a53865f7f6c4410026222;

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

        $targetObject = $this->valueHolder5a53865f7f6c4410026222;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a53865f7f6c4410026222;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5a53865f7f6c4410026222;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, '__isset', array('name' => $name), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a53865f7f6c4410026222;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a53865f7f6c4410026222;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, '__unset', array('name' => $name), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a53865f7f6c4410026222;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a53865f7f6c4410026222;
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
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, '__clone', array(), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        $this->valueHolder5a53865f7f6c4410026222 = clone $this->valueHolder5a53865f7f6c4410026222;
    }

    public function __sleep()
    {
        $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, '__sleep', array(), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;

        return array('valueHolder5a53865f7f6c4410026222');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5a53865f7f6ca293379582 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5a53865f7f6ca293379582;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5a53865f7f6ca293379582 && ($this->initializer5a53865f7f6ca293379582->__invoke($valueHolder5a53865f7f6c4410026222, $this, 'initializeProxy', array(), $this->initializer5a53865f7f6ca293379582) || 1) && $this->valueHolder5a53865f7f6c4410026222 = $valueHolder5a53865f7f6c4410026222;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a53865f7f6c4410026222;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a53865f7f6c4410026222;
    }


}
