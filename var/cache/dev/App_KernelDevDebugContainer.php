<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDHo3pkC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDHo3pkC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDHo3pkC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDHo3pkC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDHo3pkC\App_KernelDevDebugContainer([
    'container.build_hash' => 'DHo3pkC',
    'container.build_id' => '0e65ce32',
    'container.build_time' => 1699113916,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDHo3pkC');
