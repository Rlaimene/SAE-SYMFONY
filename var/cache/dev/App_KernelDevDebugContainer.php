<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOwW2dTC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOwW2dTC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOwW2dTC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOwW2dTC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOwW2dTC\App_KernelDevDebugContainer([
    'container.build_hash' => 'OwW2dTC',
    'container.build_id' => 'b1ddbb16',
    'container.build_time' => 1706632202,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOwW2dTC');