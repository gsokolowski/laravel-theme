<?php

namespace App\Providers;

use App\User;
use App\Mail\UserCreated;
use App\Mail\UserMailChanged;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Config;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        // for switching between themes this line - addNamespace('theme' . '  ' . config());
        // once the application boots grabs the view object from the app and add namespace and the will allow
        // to have them namespace and we writing theme namespace can reference
        //$template = config('theme.id'); //from file theme.php and key is id
        $this->app['view']->addNamespace('theme', base_path() . '/resources/themes/' . config('theme.id')); //from file theme.php and key is id

        // you will be calling in your controller views like that
        // 'theme::about.blade'
        // We are going to register a created event for a User model when user is created for the first time
        User::created(function($user) {
            // Retry 5 times doing that is in function() and try every 100 milisecond
            retry(5, function() use ($user) {
                Mail::to($user->email)->send(new UserCreated($user));
            },100);
        });

        // We are going to register a created event for a User model if user is updating  email
        User::updated(function($user) {
            // if email field is changed then send email using UserMailChanged
            if($user->isDirty('email')) {
                // Retry 5 times doing that is in function() and try every 100 milisecond
                retry(5, function() use ($user) {
                    Mail::to($user->email)->send(new UserMailChanged($user));
                },100);
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
