# Hacklab Jyväskylä web site development repository

Website (2021 remake) is currently built on a popular and relatively light [GeneratePress base theme](https://generatepress.com/) (GPLv3) using the "Cloud" site template from it's [site library](https://generatepress.com/site-library/#site-library). Paid premium update license has been provided by [Netura](https://netura.fi/).

For more background on the site technology during big revamp in 2021 refer to blog post and linked with video demo https://jyväskylä.hacklab.fi/2021/12/10/virtuaalinen-yhteisomiitti-2021/.

![211210-hacklabjkl-generatepress](https://github.com/HacklabJKL/site/assets/2306521/16d896be-25d8-4e45-a61f-5b3e89d19228)


# WP layout technology reconsiderations for 2024

This repository is mostly empty because the layout is produced by a wysiwyg "site builder" storing it's configuration to database in traditional "CMS" way of doing HTML easily. This is not very GIT or developer friendly way which is praicing for configuration-as-code methodology and tools like templating engines, ORM's or MVC-architecture that picked up steam in the web only after WordPress was made. 

A GIT/developer friendly layout framework https://timber.github.io/docs/v2/ is currently being considered, which gives more developer oriented workflow for PHP web development involving WordPress as the backend.


# Issue tracker
[Issue tracker](https://github.com/HacklabJKL/site/issues) linked to this repository is loosely up to date and does not take into account latest technology reconsiderations and some older tasks may become irrelevant.

There is also a old issue tracker online as this repository was made by accident as new during previous WP technology upgrade efforts.

# Development environment

Vagrant development environment with [live site sync script](https://github.com/HacklabJKL/VVV/blob/develop/pull-production.sh) and some documentation is provided at https://github.com/HacklabJKL/VVV. 
