<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTIxXbQa\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTIxXbQa/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTIxXbQa.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTIxXbQa\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTIxXbQa\App_KernelDevDebugContainer([
    'container.build_hash' => 'TIxXbQa',
    'container.build_id' => '979a5df0',
    'container.build_time' => 1727272903,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTIxXbQa');
