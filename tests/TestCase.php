<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    require_once('vendor/autoload.php');
    use Facebook\WebDriver\Remote\RemoteWebDriver;
    use Facebook\WebDriver\WebDriverBy;

    $web_driver = RemoteWebDriver::create(
    "https://api_key:api_secret@hub.testingbot.com/wd/hub",
    array("platform"=>"WINDOWS", "browserName"=>"firefox", "version" => "latest")
    );
    $web_driver->get("http://google.com");

    $element = $web_driver->findElement(WebDriverBy::name("q"));
    if($element) {
      $element->sendKeys("TestingBot");
      $element->submit();
    }
    print $web_driver->getTitle();
    $web_driver->quit();
}
