<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFxumlkd\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFxumlkd/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerFxumlkd.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerFxumlkd\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerFxumlkd\appDevDebugProjectContainer();
