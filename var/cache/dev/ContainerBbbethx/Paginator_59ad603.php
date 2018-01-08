<?php

class Paginator_59ad603 extends \Knp\Component\Pager\Paginator implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5a5387266d80b681999681 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5a5387266d810667383856 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5a5387266d7fc607730436 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function setDefaultPaginatorOptions(array $options)
    {
        $this->initializer5a5387266d810667383856 && ($this->initializer5a5387266d810667383856->__invoke($valueHolder5a5387266d80b681999681, $this, 'setDefaultPaginatorOptions', array('options' => $options), $this->initializer5a5387266d810667383856) || 1) && $this->valueHolder5a5387266d80b681999681 = $valueHolder5a5387266d80b681999681;

        return $this->valueHolder5a5387266d80b681999681->setDefaultPaginatorOptions($options);
    }

    /**
     * {@inheritDoc}
     */
    public function paginate($target, $page = 1, $limit = 10, array $options = [])
    {
        $this->initializer5a5387266d810667383856 && ($this->initializer5a5387266d810667383856->__invoke($valueHolder5a5387266d80b681999681, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer5a5387266d810667383856) || 1) && $this->valueHolder5a5387266d80b681999681 = $valueHolder5a5387266d80b681999681;

        return $this->valueHolder5a5387266d80b681999681->paginate($target, $page, $limit, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function subscribe(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber)
    {
        $this->initializer5a5387266d810667383856 && ($this->initializer5a5387266d810667383856->__invoke($valueHolder5a5387266d80b681999681, $this, 'subscribe', array('subscriber' => $subscriber), $this->initializer5a5387266d810667383856) || 1) && $this->valueHolder5a5387266d80b681999681 = $valueHolder5a5387266d80b681999681;

        return $this->valueHolder5a5387266d80b681999681->subscribe($subscriber);
    }

    /**
     * {@inheritDoc}
     */
    public function connect($eventName, $listener, $priority = 0)
    {
        $this->initializer5a5387266d810667383856 && ($this->initializer5a5387266d810667383856->__invoke($valueHolder5a5387266d80b681999681, $this, 'connect', array('eventName' => $eventName, 'listener' => $listener, 'priority' => $priority), $this->initializer5a5387266d810667383856) || 1) && $this->valueHolder5a5387266d80b681999681 = $valueHolder5a5387266d80b681999681;

        return $this->valueHolder5a5387266d80b681999681->connect($eventName, $listener, $priority);
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

        $instance->initializer5a5387266d810667383856 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(?\Symfony\Component\EventDispatcher\EventDispatcherInterface $eventDispatcher = null)
    {
        static $reflection;

        if (! $this->valueHolder5a5387266d80b681999681) {
            $reflection = $reflection ?: new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
            $this->valueHolder5a5387266d80b681999681 = $reflection->newInstanceWithoutConstructor();
        unset($this->eventDispatcher, $this->defaultOptions);

        }

        $this->valueHolder5a5387266d80b681999681->__construct($eventDispatcher);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5a5387266d810667383856 && ($this->initializer5a5387266d810667383856->__invoke($valueHolder5a5387266d80b681999681, $this, '__get', ['name' => $name], $this->initializer5a5387266d810667383856) || 1) && $this->valueHolder5a5387266d80b681999681 = $valueHolder5a5387266d80b681999681;

        if (isset(self::$publicProperties5a5387266d7fc607730436[$name])) {
            return $this->valueHolder5a5387266d80b681999681->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a5387266d80b681999681;

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

        $targetObject = $this->valueHolder5a5387266d80b681999681;
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
        $this->initializer5a5387266d810667383856 && ($this->initializer5a5387266d810667383856->__invoke($valueHolder5a5387266d80b681999681, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5a5387266d810667383856) || 1) && $this->valueHolder5a5387266d80b681999681 = $valueHolder5a5387266d80b681999681;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a5387266d80b681999681;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5a5387266d80b681999681;
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
        $this->initializer5a5387266d810667383856 && ($this->initializer5a5387266d810667383856->__invoke($valueHolder5a5387266d80b681999681, $this, '__isset', array('name' => $name), $this->initializer5a5387266d810667383856) || 1) && $this->valueHolder5a5387266d80b681999681 = $valueHolder5a5387266d80b681999681;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a5387266d80b681999681;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a5387266d80b681999681;
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
        $this->initializer5a5387266d810667383856 && ($this->initializer5a5387266d810667383856->__invoke($valueHolder5a5387266d80b681999681, $this, '__unset', array('name' => $name), $this->initializer5a5387266d810667383856) || 1) && $this->valueHolder5a5387266d80b681999681 = $valueHolder5a5387266d80b681999681;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a5387266d80b681999681;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5a5387266d80b681999681;
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
        $this->initializer5a5387266d810667383856 && ($this->initializer5a5387266d810667383856->__invoke($valueHolder5a5387266d80b681999681, $this, '__clone', array(), $this->initializer5a5387266d810667383856) || 1) && $this->valueHolder5a5387266d80b681999681 = $valueHolder5a5387266d80b681999681;

        $this->valueHolder5a5387266d80b681999681 = clone $this->valueHolder5a5387266d80b681999681;
    }

    public function __sleep()
    {
        $this->initializer5a5387266d810667383856 && ($this->initializer5a5387266d810667383856->__invoke($valueHolder5a5387266d80b681999681, $this, '__sleep', array(), $this->initializer5a5387266d810667383856) || 1) && $this->valueHolder5a5387266d80b681999681 = $valueHolder5a5387266d80b681999681;

        return array('valueHolder5a5387266d80b681999681');
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
        $this->initializer5a5387266d810667383856 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5a5387266d810667383856;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5a5387266d810667383856 && ($this->initializer5a5387266d810667383856->__invoke($valueHolder5a5387266d80b681999681, $this, 'initializeProxy', array(), $this->initializer5a5387266d810667383856) || 1) && $this->valueHolder5a5387266d80b681999681 = $valueHolder5a5387266d80b681999681;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a5387266d80b681999681;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a5387266d80b681999681;
    }


}
