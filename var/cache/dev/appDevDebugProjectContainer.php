<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZfny1fc\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZfny1fc/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerZfny1fc.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerZfny1fc\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerZfny1fc\appDevDebugProjectContainer([
    'container.build_hash' => 'Zfny1fc',
    'container.build_id' => '88c1ca3c',
    'container.build_time' => 1578530995,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZfny1fc');
