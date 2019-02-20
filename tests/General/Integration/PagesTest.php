<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PagesTest extends TestCase
{
    use SeoTestTrait;

    public function testHomePage()
    {
        $this->visit('/');
        $this->checkSeo();
    }

    public function testBusinessSucession()
    {
        $this->visit('business-succession');
        $this->checkSeo();
    }

    public function testCorporatePage()
    {
        $this->visit('corporate');
        $this->checkSeo();
    }

    public function testDisclosuresPage()
    {
        $this->visit('disclosures');
        $this->checkSeo();
    }

    public function testEstatePlanningPage()
    {
        $this->visit('estate-planning');
        $this->checkSeo();
    }

    public function testFaqPage()
    {
        $this->visit('faq');
        $this->checkSeo();
    }

    public function testFinancialPlanningPage()
    {
        $this->visit('financial-planning');
        $this->checkSeo();
    }

    public function testHowWeDoItPage()
    {
        $this->visit('how-we-do-it');
        $this->checkSeo();
    }

    public function testInsurancePlanningPage()
    {
        $this->visit('insurance-planning');
        $this->checkSeo();
    }

    public function testInvestmentPlanningPage()
    {
        $this->visit('investment-planning');
        $this->checkSeo();
    }

    public function testMeetTheTeamPage()
    {
        $this->visit('meet-the-team');
        $this->checkSeo();
    }

    public function testPersonalRetirementPage()
    {
        $this->visit('personal-retirement');
        $this->checkSeo();
    }

    public function testWhatWeDoPage()
    {
        $this->visit('what-we-do');
        $this->checkSeo();
    }

    public function testWhoWeArePage()
    {
        $this->visit('who-we-are');
        $this->checkSeo();
    }
}
