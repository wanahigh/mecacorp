<?php

class Paginator_29d8bcb extends \Knp\Component\Pager\Paginator implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5a53872eeded6055592339 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5a53872eededb788719585 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5a53872eedec4997453246 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function setDefaultPaginatorOptions(array $options)
    {
        $this->initializer5a53872eededb788719585 && ($this->initializer5a53872eededb788719585->__invoke($valueHolder5a53872eeded6055592339, $this, 'setDefaultPaginatorOptions', array('options' => $options), $this->initializer5a53872eededb788719585) || 1) && $this->valueHolder5a53872eeded6055592339 = $valueHolder5a53872eeded6055592339;

        return $this->valueHolder5a53872eeded6055592339->setDefaultPaginatorOptions($options);
    }

    /**
     * {@inheritDoc}
     */
    public function paginate($target, $page = 1, $limit = 10, array $options = [])
    {
        $this->initializer5a53872eededb788719585 && ($this->initializer5a53872eededb788719585->__invoke($valueHolder5a53872eeded6055592339, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer5a53872eededb788719585) || 1) && $this->valueHolder5a53872eeded6055592339 = $valueHolder5a53872eeded6055592339;

        return $this->valueHolder5a53872eeded6055592339->paginate($target, $page, $limit, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function subscribe(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber)
    {
        $this->initializer5a53872eededb788719585 && ($this->initializer5a53872eededb788719585->__invoke($valueHolder5a53872eeded6055592339, $this, 'subscribe', array('subscriber' => $subscriber), $this->initializer5a53872eededb788719585) || 1) && $this->valueHolder5a53872eeded6055592339 = $valueHolder5a53872eeded6055592339;

        return $this->valueHolder5a53872eeded6055592339->subscribe($subscriber);
    }

    /**
     * {@inheritDoc}
     */
    public function connect($eventName, $listener, $priority = 0)
    {
        $this->initializer5a53872eededb788719585 && ($this->initializer5a53872eededb788719585->__invoke($valueHolder5a53872eeded6055592339, $this, 'connect', array('eventName' => $eventName, 'listener' => $listener, 'priority' => $priority), $this->initializer5a53872eededb788719585) || 1) && $this->valueHolder5a53872eeded6055592339 = $valueHolder5a53872eeded6055592339;

        return $this->valueHolder5a53872eeded6055592339->connect($eventName, $listener, $priority);
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

        unset($instance->eventDispatcher, $instance->defaultOptions);

        $instance->initializer5a53872eededb788719585 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(?\Symfony\Component\EventDispatcher\EventDispatcherInterface $eventDispatcher = null)
    {
        static $reflection;

        if (! $this->valueHolder5a53872eeded6055592339) {
            $reflection = $reflection ?: new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
            $this->valueHolder5a53872eeded6055592339 = $reflection->newInstanceWithoutConstructor();
        unset($this->eventDispatcher, $this->defaultOptions);

        }

        $this->valueHolder5a53872eeded6055592339->__construct($eventDispatcher);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5a53872eededb788719585 && ($this->initializer5a53872eededb788719585->__invoke($valueHolder5a53872eeded6055592339, $this, '__get', ['name' => $name], $this->initializer5a53872eededb788719585) || 1) && $this->valueHolder5a53872eeded6055592339 = $valueHolder5a53872eeded6055592339;

        if (isset(self::$publicProperties5a53872eedec4997453246[$name])) {
            return $this->valueHolder5a53872eeded6055592339->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a53872eeded6055592339;

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

        $targetObject = $this->valueHolder5a53872eeded6055592339;
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
        $this->initializer5a53872eededb788719585 && ($this->initializer5a53872eededb788719585->__invoke($valueHolder5a53872eeded6055592339, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5a53872eededb788719585) || 1) && $this->valueHolder5a53872eeded6055592339 = $valueHolder5a53872eeded6055592339;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a53872eeded6055592339;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5a53872eeded6055592339;
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
        $this->initializer5a53872eededb788719585 && ($this->initializer5a53872eededb788719585->__invoke($valueHolder5a53872eeded6055592339, $this, '__isset', array('name' => $name), $this->initializer5a53872eededb788719585) || 1) && $this->valueHolder5a53872eeded6055592339 = $valueHolder5a53872eeded6055592339;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a53872eeded6055592339;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a53872eeded6055592339;
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
        $this->initializer5a53872eededb788719585 && ($this->initializer5a53872eededb788719585->__invoke($valueHolder5a53872eeded6055592339, $this, '__unset', array('name' => $name), $this->initializer5a53872eededb788719585) || 1) && $this->valueHolder5a53872eeded6055592339 = $valueHolder5a53872eeded6055592339;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a53872eeded6055592339;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a53872eeded6055592339;
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
        $this->initializer5a53872eededb788719585 && ($this->initializer5a53872eededb788719585->__invoke($valueHolder5a53872eeded6055592339, $this, '__clone', array(), $this->initializer5a53872eededb788719585) || 1) && $this->valueHolder5a53872eeded6055592339 = $valueHolder5a53872eeded6055592339;

        $this->valueHolder5a53872eeded6055592339 = clone $this->valueHolder5a53872eeded6055592339;
    }

    public function __sleep()
    {
        $this->initializer5a53872eededb788719585 && ($this->initializer5a53872eededb788719585->__invoke($valueHolder5a53872eeded6055592339, $this, '__sleep', array(), $this->initializer5a53872eededb788719585) || 1) && $this->valueHolder5a53872eeded6055592339 = $valueHolder5a53872eeded6055592339;

        return array('valueHolder5a53872eeded6055592339');
    }

    public function __wakeup()
    {
        unset($this->eventDispatcher, $this->defaultOptions);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5a53872eededb788719585 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5a53872eededb788719585;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5a53872eededb788719585 && ($this->initializer5a53872eededb788719585->__invoke($valueHolder5a53872eeded6055592339, $this, 'initializeProxy', array(), $this->initializer5a53872eededb788719585) || 1) && $this->valueHolder5a53872eeded6055592339 = $valueHolder5a53872eeded6055592339;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a53872eeded6055592339;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a53872eeded6055592339;
    }


}
