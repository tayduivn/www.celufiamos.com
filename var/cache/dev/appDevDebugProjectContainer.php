<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNc5uxx5\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNc5uxx5/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerNc5uxx5.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerNc5uxx5\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerNc5uxx5\appDevDebugProjectContainer([
    'container.build_hash' => 'Nc5uxx5',
    'container.build_id' => 'e88dec64',
    'container.build_time' => 1592940512,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNc5uxx5');
