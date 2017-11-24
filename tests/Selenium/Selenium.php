<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tests\TestCase;
use org.junit.Before;
use org.junit.Test;
USE org.openqa.selenium.Platform;
USE org.openqa.selenium.WebDriver;
USE org.openqa.selenium.remote.DesiredCapabilities;
USE org.openqa.selenium.remote.RemoteWebDriver;
USE java.net.URL;
USE java.net.MalformedURLException;

abstract class Selenium extends TestCase
{
    private WebDriver driver;

    @Before
    public void setUp() throws Exception,MalformedURLException{

        //DesiredCapabilities capabilities = DesiredCapabilities.firefox();
        //capabilities.setBrowserName("chrome");
        //capabilities.setPlatform(Platform.LINUX);
        //driver = new RemoteWebDriver(new URL("http://207.154.197.207:4444//wd/hub"), capabilities);
        driver = new FirefoxDriver();
        driver.manage().timeouts().implicitlyWait(30, TimeUnit.SECONDS);
    }


    @After
    public void tearDown() throws Exception {
        this.driver.quit();
    }
}