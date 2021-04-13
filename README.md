# FreeAgent OAUTH

 ```bash
 composer require socialiteproviders/freeagent
 ```

## Installation & Basic Usage

Please see the [Base Installation Guide](https://socialiteproviders.com/usage/), then follow the provider specific instructions below.

### Add configuration to `config/services.php`

 ```php
 'freeagent' => [
         'client_id' => env('FREEAGENT_CLIENT_ID'),
         'client_secret' => env('FREEAGENT_CLIENT_SECRET'),
         'redirect' => env('FREEAGENT_REDIRECT_URI'),
 ],
 ```

### Add provider event listener

Configure the package's listener to listen for `SocialiteWasCalled` events.

Add the event to your `listen[]` array in `app/Providers/EventServiceProvider`. See the [Base Installation Guide](https://socialiteproviders.com/usage/) for detailed instructions.

 ```php
 protected $listen = [
     \SocialiteProviders\Manager\SocialiteWasCalled::class => [
         // ... other providers
         'SocialiteProviders\\FreeAgent\\FreeAgentExtendSocialite@handle',
     ],
 ];
 ```

### Usage

You should now be able to use the provider like you would regularly use Socialite (assuming you have the facade installed):

 ```php
 return Socialite::driver('freeagent')->redirect();
 ```

### Returned User fields

- `id`
- `name`


### Reference

- [FreeAgent Developers](https://dev.freeagent.com);
- [OAuth authorization Docs](https://dev.freeagent.com/docs/quick_start);
- [OAuth User Docs](https://dev.freeagent.com/docs/company)