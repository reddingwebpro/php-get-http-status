# php-get-http-status
This class was designed in direct response to a forum post at PHPClasses for a class to test to find broken links on a given URL. This class will take a given URL and return the HTTP status code for that page. Therefore it will not only discover if the page is broken (ie 404), but also if its changes (ie 301 redirect) or good as is, (200). This will return the HTTP numerical values as defined in RFC 2616 section 10 (https://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html).

# Configuration
In the example file you see we call the class, and we define the target URL as the variable $url. The data is returned as an integer value corresponding to the HTTP status code.

# Requirements
This code requires the CURL library to be installed. This is extremely common to find, but if you're having problems, check by running phpinfo(); and checking that it is installed.

# Revision History:
* 1.0 Initial Release
* 1.1 Minor code cleanup, formatting, new license

## License
GNU General Public License v3.0 (GNU GPLv3)
http://www.gnu.org/licenses/gpl-3.0-standalone.html

