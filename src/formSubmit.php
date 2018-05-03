<?php
namespace Submitform;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;

require_once ('../vendor/autoload.php');

$host = 'http://localhost:4444/wd/hub'; // this is the default
//System.setProperty("webdriver.chrome.driver","C:/chrome/chromedriver.exe");
$capabilities = DesiredCapabilities::chrome();
$web_driver = RemoteWebDriver::create($host, $capabilities);


$web_driver->get("http://google.com");

$element = $web_driver->findElement(WebDriverBy::name("q"));
if($element) {
    $element->sendKeys("TestingBot");
    $element->submit();
}
print $web_driver->getTitle();
$web_driver->quit();