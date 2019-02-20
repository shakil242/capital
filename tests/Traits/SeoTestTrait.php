<?php

trait SeoTestTrait
{
    private function getInvalidImages(){
        return $this->crawler()->filter('img')->reduce(function($node) {
            return !$node->attr('alt');
        });
    }

    private function getValidFavicon(){
        return $this->crawler()->filter('link')->reduce(function($node) {
            return $node->attr('rel') == "icon" && $node->attr("href");
        });
    }

    private function getValidTitle()
    {
        return $this->crawler()->filter('head > title')->reduce(function($node) {
            return !empty($node->text());
        });
    }

    private function getHeadingOnes()
    {
        return $this->crawler()->filter('h1');
    }

    private function checkSeo()
    {
        $images = $this->getInvalidImages();
        $this->assertEquals(0,$images->count());

        $icon = $this->getValidFavicon();
        $this->assertNotEquals(0,$icon->count());

        $title = $this->getValidTitle();
        $this->assertNotEquals(0,$title->count());

        $headings = $this->getHeadingOnes();
        $this->assertEquals(1,$headings->count());
    }

    public function test404page()
    {
        $response = $this->call('GET','/asdasd');
        $this->assertEquals($response->getStatusCode(), '404');
    }
}


