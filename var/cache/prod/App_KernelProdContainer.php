<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCZwkSh4\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCZwkSh4/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerCZwkSh4.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerCZwkSh4\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerCZwkSh4\App_KernelProdContainer([
    'container.build_hash' => 'CZwkSh4',
    'container.build_id' => '645535a5',
    'container.build_time' => 1629943671,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCZwkSh4');
