<?php namespace Wrdn\League\Components;

use BackendAuth;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Wrdn\League\Models\Player as PlayerEntry;

class Player extends ComponentBase
{
    /**
     * @var RainLab\Blog\Models\Post The post model used for display.
     */
    public $player;

    /**
     * @var string Reference to the page name for linking to categories.
     */
    public $categoryPage;

    public function componentDetails()
    {
        return [
            'name'        => 'PlayerEntry',
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
        $this->player = $this->page['player'] = $this->loadPlayer();
    }

    public function onRender()
    {
        if (empty($this->player)) {
            $this->player = $this->page['player'] = $this->loadPlayer();
        }
    }

    protected function loadPlayer()
    {
        $slug = $this->property('slug');

        $player = new PlayerEntry();

        $player = $player->isClassExtendedWith('RainLab.Translate.Behaviors.TranslatableModel')
            ? $player->transWhere('slug', $slug)
            : $player->where('slug', $slug);

        $player = $player->first();


        return $player;
    }

    public function previousPlayer()
    {
        return $this->getSeasonSibling(-1);
    }

    public function nextPlayer()
    {
        return $this->getSeasonSibling(1);
    }
    protected function getSeasonSibling($direction = 1)
    {
        if (!$this->player) {
            return;
        }

        $method = $direction === -1 ? 'previousPlayer' : 'nextPlayer';

        if (!$player = $this->player->$method()) {
            return;
        }

        $playerPage = $this->getPage()->getBaseFileName();

        $player->setUrl($playerPage, $this->controller);

        return $player;
    }
}
