<?php
namespace assayerpro\scrollup;

use yii\web\AssetBundle;

/**
 *
 * @author Raoul <raoul.boulard@gmail.com>
 */
class ScrollupAsset extends AssetBundle
{

	public $sourcePath = '@bower/scrollup/dist';
	public $depends = [
		'yii\web\JqueryAsset'
	];
	public $js = [
		'jquery.scrollUp.js',
	];
}
