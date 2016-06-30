<?php
namespace Craft;

class JsonTransforms_FetchService extends BaseApplicationComponent {

	public function getTransforms() {

		$string = file_get_contents(craft()->path->siteTemplatesPath . 'transforms.json');

		return json_decode($string, true);

	}

	public function getTransform($transform, $size) {

		$transforms = $this->getTransforms();

		$default = $transforms['default'];
		$overrides = $transforms[$transform]['default'];
		$settings = $transforms[$transform][$size];

		$thisTransform = array_merge($default, $overrides, $settings);

		return $thisTransform;
	}
}
