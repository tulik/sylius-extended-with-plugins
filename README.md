# Sylius extended with Plugins
![](https://sylius.com/wp-content/uploads/2021/03/sylius-logo_sylius-logo-light-2048x845.jpg)

## Open Source eCommerce platform on top of Symfony.

### Sylius without plugins is not enough to run an e-commerce shop 🤷‍♂️
### This repository contains Sylius 1.11 with the following plugins:

- [BitBagCommerce/SyliusCmsPlugin](https://github.com/BitBagCommerce/SyliusCmsPlugin)
- [odiseoteam/SyliusBlogPlugin](https://github.com/odiseoteam/SyliusBlogPlugin)
- [FriendsOfSymfony/FOSCKEditorBundle](https://github.com/FriendsOfSymfony/FOSCKEditorBundle)
- [Sylius/RefundPlugin](https://github.com/Sylius/RefundPlugin)
- [Sylius/AdminOrderCreationPlugin](https://github.com/Sylius/AdminOrderCreationPlugin)
- [Sylius/InvoicingPlugin](https://github.com/Sylius/InvoicingPlugin)
- [SyliusCrafts/BootstrapTheme](https://github.com/SyliusCrafts/BootstrapTheme)
- [BitBagCommerce/SyliusMolliePlugin](https://github.com/BitBagCommerce/SyliusMolliePlugin)


### What's the point?
> *I just run `composer create-project sylius/sylius-standard` and `composer require ...` and it's good to go!*

### Installing a plugin can break up your shop.
Sylius is a great concept, pretty code, and it can be vastly tested with **Behat tests**. Out-of-the-box Sylius doesn't offer some must-have functionalities. They were implemented by other parties and approved by Sylius. 

Still, installing a plugin can mess up your working e-commerce solution unless you test it carefully.

### What I did do?
To check plugins work correctly I used Behat tests provided by Sylius and Plugins. Now it's visible what's broken [in a builds logs](https://github.com/tulik/sylius-ecommerce-with-plugins/actions). I choose the newest versions of libraries that are not introducing new errors in the build and allow the solution to be testable.

### Want to learn more about Sylius?
This isn't a sponsored ad but this not free [online course](https://sylius.com/online-course) will help you to understand the basics and make it much easier to start with Sylius.
