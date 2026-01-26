<?php

namespace Modules\User\Providers;

use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;
use Laravel\Fortify\Fortify;
use Modules\Base\Models\Seo;
use Modules\Base\Support\Meta;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        Fortify::loginView(function () {
            $siteName = Seo::get('website_name', config('app.name'));
            $meta = (new Meta)
                ->title(__('Login').' | '.$siteName)
                ->description(__('Log in to manage your account and services.'))
                ->keywords(__('login, sign in, account access'))
                ->ogImage()
                ->twitterImage()
                ->toArray();
            $meta['robots'] = 'noindex, nofollow';

            return Inertia::render('User::Auth/Login', ['meta' => $meta]);
        });

        Fortify::registerView(function () {
            $siteName = Seo::get('website_name', config('app.name'));
            $meta = (new Meta)
                ->title(__('Register').' | '.$siteName)
                ->description(__('Create a new account to access our services.'))
                ->keywords(__('register, sign up, create account'))
                ->ogImage()
                ->twitterImage()
                ->toArray();
            $meta['robots'] = 'noindex, nofollow';

            return Inertia::render('User::Auth/Register', ['meta' => $meta]);
        });

        Fortify::requestPasswordResetLinkView(function () {
            $siteName = Seo::get('website_name', config('app.name'));
            $meta = (new Meta)
                ->title(__('Forgot Password').' | '.$siteName)
                ->description(__('Request a password reset link to regain access to your account.'))
                ->keywords(__('forgot password, reset password, account recovery'))
                ->ogImage()
                ->twitterImage()
                ->toArray();
            $meta['robots'] = 'noindex, nofollow';

            return Inertia::render('User::Auth/ForgotPassword', ['meta' => $meta]);
        });

        Fortify::resetPasswordView(function () {
            $siteName = Seo::get('website_name', config('app.name'));
            $meta = (new Meta)
                ->title(__('Reset Password').' | '.$siteName)
                ->description(__('Set a new password to secure your account.'))
                ->keywords(__('reset password, account security, set new password'))
                ->ogImage()
                ->twitterImage()
                ->toArray();
            $meta['robots'] = 'noindex, nofollow';

            return Inertia::render('User::Auth/ResetPassword', ['meta' => $meta]);
        });

    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [];
    }
}
