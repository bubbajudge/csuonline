<?php return array (
  'core/admin-notices' => 
  array (
    'runtime' => true,
    'files' => 
    array (
      0 => 'core/admin-notices.css',
      1 => 'core/admin-notices.js',
    ),
    'hash' => '8bbec5af4aca618ee8704ddec1034b2e',
    'contentHash' => 
    array (
      'css/mini-extract' => '6fb57999347c20cedea4',
      'javascript' => 'e7f4f2f3d4a9023595ea',
    ),
    'vendors' => 
    array (
    ),
    'dependencies' => 
    array (
      0 => '@ithemes/security.core.admin-notices-api',
      1 => 'lodash',
      2 => 'wp-autop',
      3 => 'wp-components',
      4 => 'wp-compose',
      5 => 'wp-data',
      6 => 'wp-dom-ready',
      7 => 'wp-element',
      8 => 'wp-i18n',
    ),
  ),
  'core/admin-notices-api' => 
  array (
    'runtime' => true,
    'files' => 
    array (
      0 => 'core/admin-notices-api.js',
    ),
    'hash' => '35e1e9af47ea2fc5d0c46cebac93a58e',
    'contentHash' => 
    array (
      'css/mini-extract' => '31d6cfe0d16ae931b73c',
      'javascript' => 'a06acbd80169b6d03ce8',
    ),
    'vendors' => 
    array (
      0 => 'vendors/core/admin-notices-api~api~settings~api~dashboard~widget',
    ),
    'dependencies' => 
    array (
      0 => 'lodash',
      1 => 'wp-api-fetch',
      2 => 'wp-data',
      3 => 'wp-i18n',
    ),
  ),
  'core/admin-notices-dashboard-admin-bar' => 
  array (
    'runtime' => true,
    'files' => 
    array (
      0 => 'core/admin-notices-dashboard-admin-bar.css',
      1 => 'core/admin-notices-dashboard-admin-bar.js',
    ),
    'hash' => '6d8808f2d039c0b9d058ee2533504c1d',
    'contentHash' => 
    array (
      'css/mini-extract' => '830c959459f819ff3391',
      'javascript' => '3a160fa1c0004f27650a',
    ),
    'vendors' => 
    array (
    ),
    'dependencies' => 
    array (
      0 => '@ithemes/security.core.admin-notices-api',
      1 => '@ithemes/security.dashboard.api',
      2 => 'lodash',
      3 => 'wp-autop',
      4 => 'wp-components',
      5 => 'wp-compose',
      6 => 'wp-data',
      7 => 'wp-element',
      8 => 'wp-i18n',
      9 => 'wp-plugins',
    ),
  ),
  'core/packages/components/site-scan-results/style' => 
  array (
    'runtime' => true,
    'files' => 
    array (
      0 => 'core/packages/components/site-scan-results/style.css',
      1 => 'core/packages/components/site-scan-results/style.js',
    ),
    'hash' => 'c6088cd0c054e0e795819f3cbe3efb61',
    'contentHash' => 
    array (
      'css/mini-extract' => '4938d7aee319aaa3968c',
      'javascript' => 'fc603d6ae7db270f85ec',
    ),
    'vendors' => 
    array (
    ),
    'dependencies' => 
    array (
    ),
  ),
  'dashboard/api' => 
  array (
    'runtime' => true,
    'files' => 
    array (
      0 => 'dashboard/api.js',
    ),
    'hash' => '4048ff2c9143f02f755262ae9b6fa5e8',
    'contentHash' => 
    array (
      'css/mini-extract' => '31d6cfe0d16ae931b73c',
      'javascript' => '96cda99df2b3c374602c',
    ),
    'vendors' => 
    array (
      0 => 'vendors/core/admin-notices-api~api~settings~api~dashboard~widget',
      1 => 'dashboard/api~dashboard~widget',
    ),
    'dependencies' => 
    array (
      0 => 'lodash',
      1 => 'wp-api-fetch',
      2 => 'wp-components',
      3 => 'wp-data',
      4 => 'wp-hooks',
      5 => 'wp-i18n',
      6 => 'wp-is-shallow-equal',
      7 => 'wp-url',
    ),
  ),
  'dashboard/api~dashboard~widget' => 
  array (
    'runtime' => false,
    'files' => 
    array (
      0 => 'dashboard/api~dashboard~widget.js',
    ),
    'hash' => '0fed8c2c689d19628db57347e0b3bc50',
    'contentHash' => 
    array (
      'css/mini-extract' => '31d6cfe0d16ae931b73c',
      'javascript' => 'e309a361fb94c1cfa2fb',
    ),
    'vendors' => 
    array (
    ),
    'dependencies' => 
    array (
    ),
  ),
  'dashboard/dashboard' => 
  array (
    'runtime' => true,
    'files' => 
    array (
      0 => 'dashboard/dashboard.css',
      1 => 'dashboard/dashboard.js',
    ),
    'hash' => 'c59c001fc169004e92fd84215107989c',
    'contentHash' => 
    array (
      'css/mini-extract' => 'aa4a99a1bfc97812cb23',
      'javascript' => 'bc3126ed489b9c4dbf2c',
    ),
    'vendors' => 
    array (
      0 => 'vendors/core/admin-notices-api~api~settings~api~dashboard~widget',
      1 => 'dashboard/api~dashboard~widget',
      2 => 'user-groups/settings~dashboard~widget',
      3 => 'dashboard/dashboard~widget',
      4 => 'vendors/dashboard/dashboard~widget',
      5 => 'vendors/recharts',
      6 => 'vendors/dashboard/dashboard',
    ),
    'dependencies' => 
    array (
      0 => '@ithemes/security.dashboard.api',
      1 => 'lodash',
      2 => 'react',
      3 => 'react-dom',
      4 => 'wp-api-fetch',
      5 => 'wp-components',
      6 => 'wp-compose',
      7 => 'wp-data',
      8 => 'wp-date',
      9 => 'wp-dom-ready',
      10 => 'wp-element',
      11 => 'wp-hooks',
      12 => 'wp-html-entities',
      13 => 'wp-i18n',
      14 => 'wp-is-shallow-equal',
      15 => 'wp-keycodes',
      16 => 'wp-notices',
      17 => 'wp-plugins',
      18 => 'wp-url',
    ),
  ),
  'dashboard/dashboard~widget' => 
  array (
    'runtime' => false,
    'files' => 
    array (
      0 => 'dashboard/dashboard~widget.css',
      1 => 'dashboard/dashboard~widget.js',
    ),
    'hash' => '74de18c6d945143dba9867b13c3b848f',
    'contentHash' => 
    array (
      'css/mini-extract' => 'd520e048be34dd22bb58',
      'javascript' => '6d3c5c21da634f0d2e36',
    ),
    'vendors' => 
    array (
    ),
    'dependencies' => 
    array (
    ),
  ),
  'dashboard/widget' => 
  array (
    'runtime' => true,
    'files' => 
    array (
      0 => 'dashboard/widget.css',
      1 => 'dashboard/widget.js',
    ),
    'hash' => 'dcc9fe4b11fa263c50cc541419585921',
    'contentHash' => 
    array (
      'css/mini-extract' => '64457c7c780b1598d0fb',
      'javascript' => '18075fc6f0403d27dfae',
    ),
    'vendors' => 
    array (
      0 => 'vendors/core/admin-notices-api~api~settings~api~dashboard~widget',
      1 => 'dashboard/api~dashboard~widget',
      2 => 'user-groups/settings~dashboard~widget',
      3 => 'dashboard/dashboard~widget',
      4 => 'vendors/dashboard/dashboard~widget',
      5 => 'vendors/recharts',
    ),
    'dependencies' => 
    array (
      0 => 'lodash',
      1 => 'react',
      2 => 'react-dom',
      3 => 'wp-api-fetch',
      4 => 'wp-components',
      5 => 'wp-compose',
      6 => 'wp-data',
      7 => 'wp-date',
      8 => 'wp-dom-ready',
      9 => 'wp-element',
      10 => 'wp-hooks',
      11 => 'wp-html-entities',
      12 => 'wp-i18n',
      13 => 'wp-is-shallow-equal',
      14 => 'wp-keycodes',
      15 => 'wp-notices',
      16 => 'wp-url',
    ),
  ),
  'packages/preload' => 
  array (
    'runtime' => true,
    'files' => 
    array (
      0 => 'packages/preload.js',
    ),
    'hash' => '8cae82ab4d74ce202278da37ecabd159',
    'contentHash' => 
    array (
      'css/mini-extract' => '31d6cfe0d16ae931b73c',
      'javascript' => '280a91b3fcdb6b295f76',
    ),
    'vendors' => 
    array (
    ),
    'dependencies' => 
    array (
    ),
  ),
  'user-groups/api' => 
  array (
    'runtime' => true,
    'files' => 
    array (
      0 => 'user-groups/api.js',
    ),
    'hash' => '108b0b5ddacdb5d7c47e0cf7479decb8',
    'contentHash' => 
    array (
      'css/mini-extract' => '31d6cfe0d16ae931b73c',
      'javascript' => '05d0e878f9d4ebedb186',
    ),
    'vendors' => 
    array (
      0 => 'vendors/core/admin-notices-api~api~settings~api~dashboard~widget',
    ),
    'dependencies' => 
    array (
      0 => 'lodash',
      1 => 'wp-api-fetch',
      2 => 'wp-data',
      3 => 'wp-i18n',
      4 => 'wp-url',
    ),
  ),
  'user-groups/settings' => 
  array (
    'runtime' => true,
    'files' => 
    array (
      0 => 'user-groups/settings.css',
      1 => 'user-groups/settings.js',
    ),
    'hash' => '4e6e3c6fff6a3b6f83813b6b6377b711',
    'contentHash' => 
    array (
      'css/mini-extract' => '1ed63739bec31f390e60',
      'javascript' => '40000283a127e2755e09',
    ),
    'vendors' => 
    array (
      0 => 'vendors/core/admin-notices-api~api~settings~api~dashboard~widget',
      1 => 'user-groups/settings~dashboard~widget',
    ),
    'dependencies' => 
    array (
      0 => '@ithemes/security.user-groups.api',
      1 => 'lodash',
      2 => 'react',
      3 => 'react-dom',
      4 => 'wp-api-fetch',
      5 => 'wp-components',
      6 => 'wp-compose',
      7 => 'wp-data',
      8 => 'wp-dom-ready',
      9 => 'wp-element',
      10 => 'wp-html-entities',
      11 => 'wp-i18n',
      12 => 'wp-is-shallow-equal',
      13 => 'wp-notices',
      14 => 'wp-url',
    ),
  ),
  'user-groups/settings~dashboard~widget' => 
  array (
    'runtime' => false,
    'files' => 
    array (
      0 => 'user-groups/settings~dashboard~widget.css',
      1 => 'user-groups/settings~dashboard~widget.js',
    ),
    'hash' => 'cd4ea562147a4943174a2b639704cb31',
    'contentHash' => 
    array (
      'css/mini-extract' => '93e3e435f7f896935879',
      'javascript' => '75340a260bb235371ce3',
    ),
    'vendors' => 
    array (
    ),
    'dependencies' => 
    array (
    ),
  ),
  'vendors/core/admin-notices-api~api~settings~api~dashboard~widget' => 
  array (
    'runtime' => false,
    'files' => 
    array (
      0 => 'vendors/core/admin-notices-api~api~settings~api~dashboard~widget.js',
    ),
    'hash' => 'a26ce0df93f76f528549435ae6335f44',
    'contentHash' => 
    array (
      'css/mini-extract' => '31d6cfe0d16ae931b73c',
      'javascript' => 'c5d904b2839be81df49e',
    ),
    'vendors' => 
    array (
    ),
    'dependencies' => 
    array (
    ),
  ),
  'vendors/dashboard/dashboard' => 
  array (
    'runtime' => false,
    'files' => 
    array (
      0 => 'vendors/dashboard/dashboard.css',
      1 => 'vendors/dashboard/dashboard.js',
    ),
    'hash' => '582308e796580ee693c03028b95e6d75',
    'contentHash' => 
    array (
      'css/mini-extract' => 'd6b36c9590ee1108be57',
      'javascript' => 'c2932c7e7ac19744c028',
    ),
    'vendors' => 
    array (
    ),
    'dependencies' => 
    array (
    ),
  ),
  'vendors/dashboard/dashboard~widget' => 
  array (
    'runtime' => false,
    'files' => 
    array (
      0 => 'vendors/dashboard/dashboard~widget.js',
    ),
    'hash' => '3a1bf6087cdf7bea517874ee16a60379',
    'contentHash' => 
    array (
      'css/mini-extract' => '31d6cfe0d16ae931b73c',
      'javascript' => '9168ae0b5dcecbc6960a',
    ),
    'vendors' => 
    array (
    ),
    'dependencies' => 
    array (
    ),
  ),
  'vendors/recharts' => 
  array (
    'runtime' => false,
    'files' => 
    array (
      0 => 'vendors/recharts.js',
    ),
    'hash' => '2ab8408c692ace9bccc64ef37c8640c6',
    'contentHash' => 
    array (
      'css/mini-extract' => '31d6cfe0d16ae931b73c',
      'javascript' => '7a610b7253c784a42a6a',
    ),
    'vendors' => 
    array (
    ),
    'dependencies' => 
    array (
    ),
  ),
);