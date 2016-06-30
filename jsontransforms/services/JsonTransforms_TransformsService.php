<?php
namespace Craft;

class JsonTransforms_FetchService extends BaseApplicationComponent {

	public function getTransforms() {

		$string = file_get_contents(craft()->path->siteTemplatesPath . 'transforms.json');

		return json_decode($string, true);

	}
}
