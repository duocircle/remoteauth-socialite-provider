# RemoteAuth Laravel Socialite Provider

Laravel Socialite provider for [RemoteAuth](https://remoteauth.com)

## Installation

### 1. Composer

Add package to your laravel project via composer

    composer require owenconti/remoteauth-socialite-provider

### 2. Add the Event and Listeners

* Add `SocialiteProviders\Manager\SocialiteWasCalled` event to your `listen[]` array  in `<app_name>/Providers/EventServiceProvider`.

* Add listener `'\SocialiteProviders\RemoteAuth\RemoteAuthExtendSocialite@handle'` to the `SocialiteProviders\Manager\SocialiteWasCalled[]`.


For example:
``` php
    protected $listen = [
        ...
        \SocialiteProviders\Manager\SocialiteWasCalled::class  => [
            ...
            '\SocialiteProviders\RemoteAuth\RemoteAuthExtendSocialite@handle',
        ],
    ];
```

### 4. Environment Variables

Append provider values to your `.env` file (you can find them in the RemoteAuth Applicaton Dashboard):

```
REMOTEAUTH_CLIENT_ID=your_application_id
REMOTEAUTH_CLIENT_SECRET=your_secret
```
