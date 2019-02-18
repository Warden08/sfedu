<?php namespace Wrdn\League\Components;

use BackendAuth;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Wrdn\League\Models\Season as SeasonEntry;

class Season extends ComponentBase
{
    /**
     * @var RainLab\Blog\Models\Post The post model used for display.
     */
    public $season;

    /**
     * @var string Reference to the page name for linking to categories.
     */
    public $categoryPage;

    public function componentDetails()
    {
        return [
            'name'        => 'SeasonEntry',
            'description' => ''
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'name'       => 'rainlab.blog::lang.settings.post_slug',
                'description' => 'rainlab.blog::lang.settings.post_slug_description',
                'default'     => '{{ :slug }}',
                'type'        => 'string'
            ],

        ];
    }
    public function getCategoryPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }


    public function onRun()
    {
        $this->categoryPage = $this->page['categoryPage'] = $this->property('categoryPage');
        $this->season = $this->page['season'] = $this->loadSeason();
    }

    public function onRender()
    {
        if (empty($this->season)) {
            $this->season = $this->page['season'] = $this->loadSeason();
        }
    }

    protected function loadSeason()
    {
        $slug = $this->property('slug');

        $season = new SeasonEntry();

        $season = $season->isClassExtendedWith('RainLab.Translate.Behaviors.TranslatableModel')
            ? $season->transWhere('slug', $slug)
            : $season->where('slug', $slug);

        $season = $season->first();


        return $season;
    }

    public function previousPost()
    {
        return $this->getSeasonSibling(-1);
    }

    public function nextPost()
    {
        return $this->getSeasonSibling(1);
    }
    protected function getSeasonSibling($direction = 1)
    {
        if (!$this->season) {
            return;
        }

        $method = $direction === -1 ? 'previousSeason' : 'nextSeason';

        if (!$season = $this->season->$method()) {
            return;
        }

        $seasonPage = $this->getPage()->getBaseFileName();

        $season->setUrl($seasonPage, $this->controller);

        return $season;
    }
}
