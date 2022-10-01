# Sylius extended with Plugins [![Build](https://github.com/tulik/sylius-extended-with-plugins/actions/workflows/main.yml/badge.svg)](https://github.com/tulik/sylius-extended-with-plugins/actions/workflows/main.yml)
### Currently **99,9%** Behat tests passing

![](https://sylius.com/wp-content/uploads/2021/03/sylius-logo_sylius-logo-light-2048x845.jpg)


## This repository contains Sylius 1.11 with the following plugins 

- [BitBagCommerce/SyliusCmsPlugin](https://github.com/BitBagCommerce/SyliusCmsPlugin)
- [odiseoteam/SyliusBlogPlugin](https://github.com/odiseoteam/SyliusBlogPlugin)
- [FriendsOfSymfony/FOSCKEditorBundle](https://github.com/FriendsOfSymfony/FOSCKEditorBundle)
- [Sylius/RefundPlugin](https://github.com/Sylius/RefundPlugin)
- [Sylius/AdminOrderCreationPlugin](https://github.com/Sylius/AdminOrderCreationPlugin)
- [Sylius/InvoicingPlugin](https://github.com/Sylius/InvoicingPlugin)
- [SyliusCrafts/BootstrapTheme](https://github.com/SyliusCrafts/BootstrapTheme)
- [BitBagCommerce/SyliusMolliePlugin](https://github.com/BitBagCommerce/SyliusMolliePlugin)


## Integrating plugins with Sylius
I'm integrating **Sylius** and **Approved Plugins** wihtout code modifications. Carefully choosing libraries versions, I'm trying to make it work flawlessly. 

## I'm installing plugin by plugin and running Behat tests
I'm testing functionality after installation of each plugin using provided Behat tests.

## What is the process
1. I'm adding a plugin needed in my e-commerce solution. 
2. I run Behat to test the integration.
3. I can see what that tests fail in builds logs.

License
---
MIT
