<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNTeiRLK\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNTeiRLK/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerNTeiRLK.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerNTeiRLK\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerNTeiRLK\App_KernelProdContainer([
    'container.build_hash' => 'NTeiRLK',
    'container.build_id' => '7dec1735',
    'container.build_time' => 1629942887,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNTeiRLK');
