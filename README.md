<p align="center">
    <a href="https://sylius.com" target="_blank">
        <img src="https://demo.sylius.com/assets/shop/img/logo.png" />
    </a>
</p>

<h1 align="center">Sylius Enhanced Edition</h1>

<p align="center">This is Sylius Standard Enhanced repository with preinstalled plugins.</p>

About Sylius
-----

* **Decoupled** eCommerce platform based on [**Symfony**](http://symfony.com) and [**Doctrine**](http://doctrine-project.org). 
* **Powerful REST API** allows for easy integrations with any device.
* **Behavior-Driven-Development**, with [phpspec](http://phpspec.net) and [Behat](http://behat.org)

Enhanced Edition
-----
Will have plugins preinstalled.

Documentation
-------------

Base Sylius documentation is available at [docs.sylius.com](http://docs.sylius.com).

Installation
------------

```bash
$ wget http://getcomposer.org/composer.phar
$ git clone git@github.com:tulik/sylius-ecommerce-with-plugins.git
$ cd sylius-ecommerce-with-plugins
$ yarn install
$ yarn build
$ php bin/console sylius:install
$ symfony serve
$ open http://localhost:8000/
```

Troubleshooting
---------------

If something goes wrong, errors & exceptions are logged at the application level:

```bash
$ tail -f var/log/prod.log
$ tail -f var/log/dev.log
```
	
Bug Tracking
------------

If you want to report a bug or suggest an idea, please use [GitHub issues](https://github.com/tulik/sylius-ecommerce-with-plugins/issues).

Community Support

MIT License
-----------

Sylius is completely free and released under the [MIT License](https://github.com/Sylius/Sylius/blob/master/LICENSE).

Authors
-------

Sylius was originally created by [Paweł Jędrzejewski](http://pjedrzejewski.com).
See the list of [contributors from our awesome community](https://github.com/Sylius/Sylius/contributors).

Enchanced version was created by [@tulik](https://github.com/tulik).