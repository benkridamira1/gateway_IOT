<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLKxxVEB\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLKxxVEB/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLKxxVEB.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLKxxVEB\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLKxxVEB\App_KernelDevDebugContainer([
    'container.build_hash' => 'LKxxVEB',
    'container.build_id' => 'b262a571',
    'container.build_time' => 1662046560,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLKxxVEB');
