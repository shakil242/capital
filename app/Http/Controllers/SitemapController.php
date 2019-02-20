<?php

namespace App\Http\Controllers;

use App\Models\Bio;
use Carbon\Carbon;
use FourtyTwoConnect\Coral\Models\Blog\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class SitemapController extends Controller
{
    public function sitemap()
    {
        // create new sitemap object
        $sitemap = \App::make("sitemap");
        $sitemap->setCache('laravel.sitemap', 60);

        if (!$sitemap->isCached())
        {
            //Add all static pages to the sitemap
            $sitemap->add(route('home'), Carbon::now());
            $sitemap->add(route('whoweare'), Carbon::now());
            $sitemap->add(route('whatwedo'), Carbon::now());
            $sitemap->add(route('howwedoit'), Carbon::now());
            $sitemap->add(route('corporate'), Carbon::now());
            $sitemap->add(route('estate'), Carbon::now());
            $sitemap->add(route('financial'), Carbon::now());
            $sitemap->add(route('insurance'), Carbon::now());
            $sitemap->add(route('investment'), Carbon::now());
            $sitemap->add(route('personal-retirement'), Carbon::now());
            $sitemap->add(route('business-succession'), Carbon::now());
            $sitemap->add(route('faq'), Carbon::now());
            $sitemap->add(route('disclosures'), Carbon::now());
            $sitemap->add(route('cfm-horizon'), Carbon::now());
            $sitemap->add(route('team'), Carbon::now());
            $sitemap->add(route('home'), Carbon::now());
            $sitemap->add(route('home'), Carbon::now());

            //Bios
            $bios = Bio::all();
            // Add every Bio to the sitemap
            foreach ($bios as $bio)
            {
                $sitemap->add( route('bio', $bio['slug']), Carbon::now());
            }

            //Posts
            $posts = Post::published()->get();
            // add every post to the sitemap
            foreach ($posts as $post)
            {
                $sitemap->add(route('blog.post.show', $post->slug), $post->updated_at);
            }
        }

        return $sitemap->render('xml');
    }
}
