<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'assetic.filter_manager' shared service.

include_once $this->targetDirs[3].'/vendor/kriswallsmith/assetic/src/Assetic/FilterManager.php';
include_once $this->targetDirs[3].'/vendor/symfony/assetic-bundle/FilterManager.php';

return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array());
