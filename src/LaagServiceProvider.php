<?php 
namespace Kyjita\Laag;

use Illuminate\Support\ServiceProvider;

class LaagServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // $myfile= fopen(__DIR__.'/../Commands/testcommand.php','r');
        // echo fread($myfile,filesize( __DIR__.'/../Commands/testcommand.php' ));
        // fclose($myfile);

        $this->publishes([
            __DIR__.'/../Commands/testcommand.php'=> app_path('Console/Commands/testcommand.php'),
        ]);
    }

    // 註冊套件函式
    public function register()
    {
        $this->app->singleton('laag', function ($app) {
            return new Laag();
        });
    }
}