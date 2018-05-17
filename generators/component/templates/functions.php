<?php

namespace Flynt\Components\<%= nameUpperCamelCase %>;

use Flynt\Features\Components\Component;

add_filter('Flynt/addComponentData?name=<%= nameUpperCamelCase %>', function ($data) {
    add_action('wp_enqueue_scripts', function () {
        Component::enqueueAssets('<%= nameUpperCamelCase %>');
    });

    return $data;
});
