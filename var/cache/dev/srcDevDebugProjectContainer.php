<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRogt328\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRogt328/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerRogt328.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerRogt328\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerRogt328\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'Rogt328',
    'container.build_id' => '58834485',
    'container.build_time' => 1541594752,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerRogt328');
