# RgWsPublicClientPHP
**RgWsPublicClient** is an PHP client for accessing the [new web service](http://www.gsis.gr/gsis/info/gsis_site/PublicIssue/wnsp/wnsp_pages/wnsp.html) provided by [GSIS](http://www.gsis.gr/gsis/info/gsis_site/PublicIssue/wnsp/wnsp_pages/wnsp.html) for physical persons and legal entities. The new webservice provides two methods, one for retrieving the service's version information and the second for retrieving information regarding a requested VAT(A.F.M.). The latter requires authentication using the UsernameToken Extensions of WSS(see [Web Services Security UsernameToken Profile](http://docs.oasis-open.org/wss/v1.1/wss-v1.1-spec-pr-UsernameTokenProfile-01.htm)). The project has a simple client that provides two methods (corresponding to the two web services) with error checking and handling, and an example PHP file that uses the client.

### Example

* clone/copy this project
* edit the example client and add your username/password:
```php
$client = new RgWsPublic("<username>", "<password>");
```
* execute the file from within a web server or from the command line:
```php -f RgWsPublicClient.php```
