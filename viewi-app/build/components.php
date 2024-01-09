<?php
return array (
  'components' => 
  array (
    'WelcomeGuard' => 
    array (
      'Namespace' => 'Components\\Services\\Middleware',
      'Name' => 'WelcomeGuard',
      'dependencies' => 
      array (
        'route' => 
        array (
          'name' => 'ClientRoute',
        ),
      ),
      'di' => 'Singleton',
      'inputs' => 
      array (
      ),
    ),
    'AboutPage' => 
    array (
      'Namespace' => 'Components\\Views\\About',
      'Name' => 'AboutPage',
      'dependencies' => 
      array (
      ),
      'inputs' => 
      array (
        'title' => 1,
        '__id' => 1,
        '_props' => 1,
        '_element' => 1,
        '_refs' => 1,
        '_slots' => 1,
      ),
      'base' => 1,
      'Path' => '\\Components\\Views\\About\\AboutPage.php',
      'Function' => 'RenderAboutPage',
    ),
    'MenuBar' => 
    array (
      'Namespace' => 'Components\\Views\\Common',
      'Name' => 'MenuBar',
      'dependencies' => 
      array (
      ),
      'inputs' => 
      array (
        '__id' => 1,
        '_props' => 1,
        '_element' => 1,
        '_refs' => 1,
        '_slots' => 1,
      ),
      'base' => 1,
      'Path' => '\\Components\\Views\\Common\\MenuBar.php',
      'Function' => 'RenderMenuBar',
    ),
    'AccessPage' => 
    array (
      'Namespace' => 'Components\\Views\\GettingStarted\\Access',
      'Name' => 'AccessPage',
      'dependencies' => 
      array (
      ),
      'inputs' => 
      array (
        'title' => 1,
        '__id' => 1,
        '_props' => 1,
        '_element' => 1,
        '_refs' => 1,
        '_slots' => 1,
      ),
      'base' => 1,
      'Path' => '\\Components\\Views\\GettingStarted\\Access\\AccessPage.php',
      'Function' => 'RenderAccessPage',
    ),
    'HowItWorksPage' => 
    array (
      'Namespace' => 'Components\\Views\\GettingStarted\\HowItWorks',
      'Name' => 'HowItWorksPage',
      'dependencies' => 
      array (
      ),
      'inputs' => 
      array (
        'title' => 1,
        '__id' => 1,
        '_props' => 1,
        '_element' => 1,
        '_refs' => 1,
        '_slots' => 1,
      ),
      'base' => 1,
      'Path' => '\\Components\\Views\\GettingStarted\\HowItWorks\\HowItWorksPage.php',
      'Function' => 'RenderHowItWorksPage',
    ),
    'NavigationPage' => 
    array (
      'Namespace' => 'Components\\Views\\GettingStarted\\Navigation',
      'Name' => 'NavigationPage',
      'dependencies' => 
      array (
      ),
      'inputs' => 
      array (
        'title' => 1,
        '__id' => 1,
        '_props' => 1,
        '_element' => 1,
        '_refs' => 1,
        '_slots' => 1,
      ),
      'base' => 1,
      'Path' => '\\Components\\Views\\GettingStarted\\Navigation\\NavigationPage.php',
      'Function' => 'RenderNavigationPage',
    ),
    'WelcomePage' => 
    array (
      'Namespace' => 'Components\\Views\\GettingStarted\\Welcome',
      'Name' => 'WelcomePage',
      'dependencies' => 
      array (
      ),
      'inputs' => 
      array (
        'title' => 1,
        '__id' => 1,
        '_props' => 1,
        '_element' => 1,
        '_refs' => 1,
        '_slots' => 1,
      ),
      'base' => 1,
      'Path' => '\\Components\\Views\\GettingStarted\\Welcome\\WelcomePage.php',
      'Function' => 'RenderWelcomePage',
    ),
    'HomePage' => 
    array (
      'Namespace' => 'Components\\Views\\Home',
      'Name' => 'HomePage',
      'dependencies' => 
      array (
      ),
      'inputs' => 
      array (
        'title' => 1,
        '__id' => 1,
        '_props' => 1,
        '_element' => 1,
        '_refs' => 1,
        '_slots' => 1,
      ),
      'base' => 1,
      'Path' => '\\Components\\Views\\Home\\HomePage.php',
      'Function' => 'RenderHomePage',
    ),
    'Layout' => 
    array (
      'Namespace' => 'Components\\Views\\Layouts',
      'Name' => 'Layout',
      'dependencies' => 
      array (
        'config' => 
        array (
          'name' => 'ConfigService',
        ),
      ),
      'inputs' => 
      array (
        'title' => 1,
        'assetsUrl' => 1,
        '__id' => 1,
        '_props' => 1,
        '_element' => 1,
        '_refs' => 1,
        '_slots' => 1,
      ),
      'base' => 1,
      'Path' => '\\Components\\Views\\Layouts\\Layout.php',
      'Function' => 'RenderLayout',
    ),
    'NotFoundPage' => 
    array (
      'Namespace' => 'Components\\Views\\NotFound',
      'Name' => 'NotFoundPage',
      'dependencies' => 
      array (
      ),
      'inputs' => 
      array (
        '__id' => 1,
        '_props' => 1,
        '_element' => 1,
        '_refs' => 1,
        '_slots' => 1,
      ),
      'base' => 1,
      'Path' => '\\Components\\Views\\NotFound\\NotFoundPage.php',
      'Function' => 'RenderNotFoundPage',
    ),
    'CssBundle' => 
    array (
      'Namespace' => 'Viewi\\Components\\Assets',
      'Name' => 'CssBundle',
      'dependencies' => 
      array (
        'config' => 
        array (
          'name' => 'ConfigService',
          'optional' => 1,
          'null' => 1,
        ),
        'http' => 
        array (
          'name' => 'HttpClient',
          'optional' => 1,
          'null' => 1,
        ),
      ),
      'hooks' => 
      array (
        'mounted' => 1,
      ),
      'inputs' => 
      array (
        'links' => 1,
        'minify' => 1,
        'combine' => 1,
        'inline' => 1,
        'purge' => 1,
        'cssHtml' => 1,
        '__id' => 1,
        '_props' => 1,
        '_element' => 1,
        '_refs' => 1,
        '_slots' => 1,
      ),
      'base' => 1,
      'Path' => '\\Viewi\\Components\\Assets\\CssBundle.php',
      'Function' => 'RenderCssBundle',
    ),
    'ViewiAssets' => 
    array (
      'Namespace' => 'Viewi\\Components\\Assets',
      'Name' => 'ViewiAssets',
      'dependencies' => 
      array (
      ),
      'di' => 'Singleton',
      'inputs' => 
      array (
        'appPath' => 1,
        'data' => 1,
        '__id' => 1,
        '_props' => 1,
        '_element' => 1,
        '_refs' => 1,
        '_slots' => 1,
      ),
      'preserve' => 
      array (
        'appPath' => 1,
        'data' => 1,
      ),
      'base' => 1,
      'Path' => '\\Viewi\\Components\\Assets\\ViewiAssets.php',
      'Function' => 'RenderViewiAssets',
    ),
    'ConfigService' => 
    array (
      'Namespace' => 'Viewi\\Components\\Config',
      'Name' => 'ConfigService',
      'dependencies' => 
      array (
        'platform' => 
        array (
          'name' => 'Platform',
        ),
      ),
      'di' => 'Singleton',
      'inputs' => 
      array (
      ),
    ),
    'Platform' => 
    array (
      'Namespace' => 'Viewi\\Components\\Environment',
      'Name' => 'Platform',
      'dependencies' => 
      array (
        'appInstance' => 
        array (
          'name' => 'App',
        ),
        'engine' => 
        array (
          'name' => 'Engine',
        ),
      ),
      'di' => 'Singleton',
      'inputs' => 
      array (
        'browser' => 1,
        'server' => 1,
        'httpState' => 1,
        'runtimeState' => 1,
      ),
    ),
    'HttpClient' => 
    array (
      'Namespace' => 'Viewi\\Components\\Http',
      'Name' => 'HttpClient',
      'dependencies' => 
      array (
        'platform' => 
        array (
          'name' => 'Platform',
        ),
        'bridge' => 
        array (
          'name' => 'IViewiBridge',
        ),
      ),
      'di' => 'Singleton',
      'inputs' => 
      array (
      ),
    ),
    'ClientRoute' => 
    array (
      'Namespace' => 'Viewi\\Components\\Routing',
      'Name' => 'ClientRoute',
      'dependencies' => 
      array (
        'platform' => 
        array (
          'name' => 'Platform',
        ),
      ),
      'di' => 'Singleton',
      'inputs' => 
      array (
      ),
    ),
  ),
  'map' => 
  array (
    'RenderAboutPage' => 'AboutPage',
    'RenderAboutPage_Layout_default' => 'AboutPage',
    'RenderMenuBar' => 'MenuBar',
    'RenderAccessPage' => 'AccessPage',
    'RenderAccessPage_Layout_default' => 'AccessPage',
    'RenderHowItWorksPage' => 'HowItWorksPage',
    'RenderHowItWorksPage_Layout_default' => 'HowItWorksPage',
    'RenderNavigationPage' => 'NavigationPage',
    'RenderNavigationPage_Layout_default' => 'NavigationPage',
    'RenderWelcomePage' => 'WelcomePage',
    'RenderWelcomePage_Layout_default' => 'WelcomePage',
    'RenderHomePage' => 'HomePage',
    'RenderHomePage_Layout_default' => 'HomePage',
    'RenderLayout' => 'Layout',
    'RenderNotFoundPage' => 'NotFoundPage',
    'RenderNotFoundPage_Layout_default' => 'NotFoundPage',
    'RenderCssBundle' => 'CssBundle',
    'RenderViewiAssets' => 'ViewiAssets',
  ),
  'buildPath' => 'C:\\Users\\kanto\\Desktop\\viewi2\\viewi-app\\build',
  'publicConfig' => 
  array (
    'baseUrl' => 'https://viewi.net',
    'assetsUrl' => '/viewi-default',
    'cssBundle' => 
    array (
      '/mui.css|/app.css1011' => '/3882057821.css.pg.min.css',
    ),
  ),
  'assets' => 
  array (
    'app' => '/viewi-default/viewi.js',
    'app-min' => '/viewi-default/viewi.min.js',
    'build-id' => 'q2Tumc8y',
    'minify' => false,
    'append-version' => false,
    'components' => '/viewi-default/viewi.json',
    'publicRootUrl' => '',
    'publicRoot' => 'C:\\Users\\kanto\\Desktop\\viewi2\\viewi-app/../',
    'publicAppRoot' => 'C:\\Users\\kanto\\Desktop\\viewi2\\viewi-app/../\\viewi-default',
  ),
);