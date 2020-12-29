<?php

namespace Dcat\Admin\Crontab;

use Dcat\Admin\Crontab\Commands\AutoTask;
use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;

class CrontabServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/index.js',
    ];
	protected $css = [
		'css/index.css',
	];

    protected $menu = [
        [
            'title'         => '定时任务',
            'icon'          => 'fa-gears',
            'uri'           => '',
        ],
        [
            'parent'        => '定时任务',
            'title'         => '任务列表',
            'icon'          => 'fa-tasks',
            'uri'           => 'auth/crontabs',
        ],
        [
            'parent'        => '定时任务',
            'title'         => '日志列表',
            'icon'          => 'fa-file-text-o',
            'uri'           => 'auth/crontab-logs',
        ]
    ];

	public function register()
	{
		//
        if ($this->app->runningInConsole()) {
            $this->commands([
                AutoTask::class,
            ]);
        }
	}

	public function init()
	{
		parent::init();

		//

	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
