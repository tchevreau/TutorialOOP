<?php

/**
 * Load php classes based on the namespaces
 */
spl_autoload_register(function($class) {
    // split the namespace into parts
    $parts = explode('\\', $class);

    // Remove Tessi from the namespace parts
    array_shift($parts);

    // require files in directories according to the last parts of the splitted namespace
    require sprintf('%s.php', implode('/', $parts));
});

// start your code here
