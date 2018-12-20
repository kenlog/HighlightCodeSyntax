[![GitHub license](https://img.shields.io/github/license/Naereen/StrapDown.js.svg)](https://github.com/kenlog/HighlightCodeSyntax/blob/master/LICENSE)
[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://github.com/kenlog/HighlightCodeSyntax/graphs/contributors)
[![Open Source Love](https://badges.frapsoft.com/os/v1/open-source.svg?v=103)]()

# Highlight Code Syntax for kanboard

- For code snippets the plugin is able to highlight code syntax in more than 151 languages, including PHP, Javascript, Python, HTML and CSS...

![highlightcodesyntax](https://user-images.githubusercontent.com/11728231/50305488-407abd00-0493-11e9-8061-5e800e2ccbee.png)

Author
------------
- Valentino Pesce
- License MIT

Requirements
------------
Kanboard >= v1.0.48  
Kanboard installed at a web server.
You can find the download at [kanboard.org](https://kanboard.org/)

Installation
------------
You have the choice between 3 methods:

1. Install the plugin from the Kanboard plugin manager in one click
2. Download the zip file and decompress everything under the directory `plugins/HighlightCodeSyntax`
3. Clone this repository into the folder `plugins/HighlightCodeSyntax`

Note: Plugin folder is case-sensitive.  
**Important: remove all unused themes**

Syntax highlighting for Markdown code
------------
151 languages currently supported by Prism, with their corresponding alias, to use in place of xxxx
 
```diff
-```xxxx
class BaseClass {
    function __construct() {
        print "In BaseClass constructor\n";
    }
}
-```
+```php
class BaseClass {
    function __construct() {
        print "In BaseClass constructor\n";
    }
}
+```
```

### :star: If you like it, do not forget to give a star on GitHub!

:construction_worker: Any contribution will be highly appreciated
------------
Clone the repository: 
```console 
git clone https://github.com/kenlog/HighlightCodeSyntax.git
```
:bug: Reporting Issues
------------
Please [create an issue](https://github.com/kenlog/HighlightCodeSyntax/issues) for any bugs you've found.
