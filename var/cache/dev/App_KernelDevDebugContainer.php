<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLPIHZsb\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLPIHZsb/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLPIHZsb.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLPIHZsb\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLPIHZsb\App_KernelDevDebugContainer([
    'container.build_hash' => 'LPIHZsb',
    'container.build_id' => '284676ed',
    'container.build_time' => 1727265468,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLPIHZsb');
