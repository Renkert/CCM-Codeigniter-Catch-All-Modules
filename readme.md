# CCHM (Codeigniter Catchall-with-HMVC-Modules)

## History

I am currently in the process of coding a CRM system. When I started to code the modules
"BLOG" and "WEBPAGE", I noticed that I lacked some features around dynamic web pages, e.g. from a database.

## Links/Scripts:

* [Codeigniter 3 PHP Framework](https://codeigniter.com) - Learn more about Codeigniter
* [UIKit CSS Framework](https://getuikit.com) - Learn more about UIkit
* [CodeIgniter HMVC Modules](https://github.com/jenssegers/codeigniter-hmvc-modules) - Learn more about Jens Segers great HMVC Modules Script.


## Installation:

Download the script and keep in mind, that I reorganized the original Codeigniter structure for security reasons.

**Important**: Your Web Root has to be set to the **/public** folder.

#### Database:
If you want to test Dynamic Content (Pages/Blog),
1. Open **application/config/database.php** and enter your Database settings.
2. Guide your Browser to: http://yourdomain/migrate/. This script will migrate the Database.

## What you can do:

### 1. Load Module Controllers
**************************

This is the basic structure of a HMVC module:

	/application
	    /modules
	        /yourmodule
	           /controllers
	           /config
	           /helpers
	           /language
	           /libraries
	           /models

Your url "http://yourdomain/yourmodule/" will point to your module.

### 2. Load Application Controllers
**************************

	/application
		/controllers

### 3. Load Application Controllers SEO friendly
**************************

In Codeigniter you can place your Controllers in subfolders. This is very handy
to get SEO friendly Urls like "http://yourdomin/services/design".

With **

*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

Please see the `installation section <https://codeigniter.com/user_guide/installation/index.html>`_
of the CodeIgniter User Guide.

*******
License
*******

Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

***************
Acknowledgement
***************

The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.
