<?php
    // Mageto\UrlChecker\src\UrlCheckerServiceProvider.php
    namespace Mageto\UrlChecker;
    use Illuminate\Support\ServiceProvider;
    class UrlCheckerServiceProvider extends ServiceProvider {
        public function boot()
        {
          // Mageto\UrlChecker\src\UrlCheckerServiceProvider.php
          $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        }
        public function register()
        {
        }
    }
    ?>
