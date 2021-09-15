<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Crops;
use App\Models\MessageContent;
use App\Models\Messages;
use App\Models\Notification;
use App\Models\userNotification;
use App\User;
use Illuminate\Support\ServiceProvider;
use View;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* View::composer('dragro.farmer.navbar', function ($view) {
             $Messages = Contact::where('farmer_id', auth()->id())->where('read', 0)->get();
             $view->with('unreadMessages', count($Messages));
         });*/

        View::composer('dragro.farmer.navbar', function ($view) {
            $Message = Messages::where('farmer_id', auth()->id())->first();
            if($Message != null) {
                $userMessage = MessageContent::where('message_id', $Message->id)
                    ->where('user_id', '!=', auth()->id())->orderBy('id', 'DESC')->first();
            }else{
                $userMessage = null;
            }
                $user_first = User::where('id', auth()->id())->first();

            $userNotification = userNotification::all()->where('user_id', auth()->id())->contains('read', 0);
            if($userNotification)
                $notRead = 1;
            else
                $notRead = 0;

            View::share('userMessage', $userMessage);
            View::share('user_balance', $user_first);
            View::share('notRead', $notRead);


//            $crops = Crops::select('region')->where('user_id', auth()->id())->get()->toArray();
//            $notifications = [];
//            if($crops)
//            {
//                if(Notification::whereIn('region', $crops[0])->count() > 0)
//                    $notifications = Notification::whereIn('region', $crops[0])->where('read', 1)->get();
//            }

        });

        View::composer('dragro.dragro.navbar', function ($view) {
                $userMessage = MessageContent::where('user_id', '!=', auth()->id())->
                    whereIn('read',[0])->get();
//                dd($userMessage);
                if($userMessage->isEmpty())
                {
                    $readed = 1;
                }
                else{
                    $readed = 0;
                }

            View::share('readed', $readed);
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
