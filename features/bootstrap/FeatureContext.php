<?php

use Behat\MinkExtension\Context\MinkContext;

class FeatureContext extends MinkContext
{
    public function __construct()
    {
    }

    /**
     * @Given I visit :path
     */
    public function iVisit($path): void
    {
        $this->visit($path);
    }

    /**
     * @Then I should see the page tile :title
     */
    public function iShouldSeeThePageTitle(string $title): void
    {
        $this->assertPageContainsText($title);
    }
}
