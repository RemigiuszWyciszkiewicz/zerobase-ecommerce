<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf2c1c = null;
    private $initializercf106 = null;
    private static $publicPropertiesabbdc = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'getList', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'getInstalledModules', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'getMustBeConfiguredModules', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'getUpgradableModules', array(), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'getModule', array('moduleName' => $moduleName), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'setActionUrls', array('collection' => $collection), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        return $this->valueHolderf2c1c->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializercf106 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolderf2c1c) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderf2c1c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolderf2c1c->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializercf106 && ($this->initializercf106->__invoke($valueHolderf2c1c, $this, '__get', ['name' => $name], $this->initializercf106) || 1) && $this->valueHolderf2c1c = $valueHolderf2c1c;
        if (isset(self::$publicPropertiesabbdc[$name])) {
            return $this->valueHolderf2c1c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
