<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSs4it13\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSs4it13/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerSs4it13.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerSs4it13\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerSs4it13\appProdProjectContainer([
    'container.build_hash' => 'Ss4it13',
    'container.build_id' => '865468e6',
    'container.build_time' => 1592512765,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSs4it13');