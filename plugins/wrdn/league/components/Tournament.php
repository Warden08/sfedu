<?php namespace Wrdn\League\Components;

use BackendAuth;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Wrdn\League\Models\Tournament as TournamentEntry;

class Tournament extends ComponentBase
{
    /**
     * @var RainLab\Blog\Models\Post The post model used for display.
     */
    public $tournament;

    /**
     * @var string Reference to the page name for linking to categories.
     */
    public $categoryPage;

    public function componentDetails()
    {
        return [
            'name'        => 'TournamentEntry',
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
        $this->tournament = $this->page['tournament'] = $this->loadTournament();
    }

    public function onRender()
    {
        if (empty($this->season)) {
            $this->tournament = $this->page['tournament'] = $this->loadTournament();
        }
    }

    protected function loadTournament()
    {
        $slug = $this->property('slug');

        $tournament = new TournamentEntry();

        $tournament = $tournament->isClassExtendedWith('RainLab.Translate.Behaviors.TranslatableModel')
            ? $tournament->transWhere('slug', $slug)
            : $tournament->where('slug', $slug);

        $tournament = $tournament->first();


        return $tournament;
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
        if (!$this->tournament) {
            return;
        }

        $method = $direction === -1 ? 'previousTournament' : 'nextTournament';

        if (!$tournament = $this->tournament->$method()) {
            return;
        }

        $tournamentPage = $this->getPage()->getBaseFileName();

        $tournament->setUrl($tournamentPage, $this->controller);

        return $tournament;
    }
}
