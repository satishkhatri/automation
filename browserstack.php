<?php


require_once('vendor/autoload.php');
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverBy;


$caps = array("browserName"=>"chrome", "browserstack.debug"=>"true", "build"=>"First build");
$caps['acceptSslCerts'] = "true";
//$capabilities = DesiredCapabilities::opera();
//$capabilities->setCapability('acceptSslCerts', false);


$web_driver = RemoteWebDriver::create("https://sat89:TwstNB9Ha81fcCUxhqvq@hub-cloud.browserstack.com/wd/hub", $caps);
$web_driver->get("http://google.com");
$element = $web_driver->findElement(WebDriverBy::name("q"));

$web_driver->quit();