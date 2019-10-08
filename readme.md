# CCM (Codeigniter Catch-All-Modules)

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
			/start.php

You can load your controller as usual.

### 3. Load Application Controllers SEO friendly
**************************

In Codeigniter you can place your Controllers in subfolders. This is very handy
to get SEO friendly Urls like "http://yourdomain/services/design".

With **CCM** you have a "CatchAll" Controller defined in "application/config/routes.php". I name it "pages" but you can change it to whatever you want. This is your "CatchAll-Controller". At the same time, you will find a directory with the same name in "application/controllers/" called "pages".

**Important**: If you rename your CatchAll Controller to "whatever" in **"application/config/routes.php"**, you have use the same name for "application/controllers/whatever/".

#### Advantage:

1. You can create SEO friendly links like mentioned before, e.g. "http://yourdomin/services/design".
2. CCM is searching for a controller with the name "design.php" in your directory

### 4. Server Requirements
**************************

PHP version 5.6 or newer is recommended. I tested PHP version 7.3.8

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

### 5. Installation
**************************

Please see the `installation section <https://codeigniter.com/user_guide/installation/index.html>`_
of the CodeIgniter User Guide.

### 6. License
**************************

MIT License

### 7. Acknowledgement & Thanks
**************************

* @Codeigniter, https://github.com/bcit-ci/CodeIgniter
* @UIKit 3, https://github.com/uikit/uikit
* @Jens Segers, https://github.com/jenssegers/codeigniter-hmvc-modules
* @Cătălin Mariș, https://github.com/alrra/browser-logos 
