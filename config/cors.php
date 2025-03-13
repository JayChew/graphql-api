<?php

return [
  'paths' => ['api/*', 'graphql'], // Add 'graphql' path
  'allowed_methods' => ['*'],
  'allowed_origins' => ['http://localhost:5173'], // Allow your frontend origin
  'allowed_origins_patterns' => [],
  'allowed_headers' => ['*'],
  'exposed_headers' => [],
  'max_age' => 0,
  'supports_credentials' => false, // Set to true if using authentication
];
