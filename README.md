Kohana Sentinel Library
=======================

[![Build Status](https://travis-ci.org/vulah/kohana-sentinel.svg?branch=master)](https://travis-ci.org/vulah/kohana-sentinel)

The sentinel library for Kohana 3 provides a simple integration with sentinel 2.*. You can configure your sentinel
integration by placing the `config/sentinel.php` file into your `app/config` folder and editing it.

Using Sentinel
--------------

To use Kohana Sentinel, install it by composer require. You can do this by running `composer require vulah/kohana-sentinel` in your CLI.
Then add Kohana Sentinel to your modules in `bootstrap.php` by adding the following line `'sentinel' => VENDORPATH.'vulah/kohana-sentinel'`.

To configure sentinel copy the `vendor/vulah/kohana-sentinel/config/sentinel.php` or your `app/config` folder and editing it.

Quick example
-------------

The following is a quick example of how to use Kohana Sentinel by creating a instance of Sentinel and calling the
authenticate action.

    $sentinel = \Kohana\Sentinel\SentinelFactory::create();
    $sentinel->authenticate([
        'email'    => 'john.doe@example.com',
        'password' => 'password',
    ]);
