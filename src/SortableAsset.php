<?php
namespace kilyakus\widget\sortable;

use kartik\base\AssetBundle;

class SortableAsset extends AssetBundle
{
	public function init()
	{
		$this->setSourcePath(__DIR__ . '/assets');
		$this->setupAssets('css', ['css/kv-html5-sortable']);
		$this->setupAssets('js', ['js/html5sortable', 'js/kv-html5-sortable']);
		parent::init();
	}

}
