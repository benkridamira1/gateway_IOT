<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRycR3DF\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRycR3DF/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRycR3DF.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRycR3DF\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRycR3DF\App_KernelDevDebugContainer([
    'container.build_hash' => 'RycR3DF',
    'container.build_id' => 'c4fd3ff2',
    'container.build_time' => 1658909951,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRycR3DF');