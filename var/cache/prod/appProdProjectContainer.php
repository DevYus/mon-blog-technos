<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQqh8zve\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQqh8zve/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerQqh8zve.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerQqh8zve\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerQqh8zve\appProdProjectContainer([
    'container.build_hash' => 'Qqh8zve',
    'container.build_id' => '40d9eb1d',
    'container.build_time' => 1578530472,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQqh8zve');
