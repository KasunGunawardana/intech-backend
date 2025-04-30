<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;

use App\Models\Page;

use App\Models\CompanyDetail;

use App\Models\Blog;

use App\Models\Gallery;

use App\Models\Effect;

use App\Models\Course;

use App\Models\CourseType;

use App\Models\Enquiry;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('showNavigationList', Page::all()->sortBy('order'));
        View::share('companyDetails', CompanyDetail::find(1));
        View::share('blog_content', Blog::find(1));
        View::share('gallery_content', Gallery::find(1));
        View::share('christmas_effect', Effect::find(2));
        View::share('email_notifications', Enquiry::where('views', 0));
        View::share('courses_count', Course::count());
    }
}
