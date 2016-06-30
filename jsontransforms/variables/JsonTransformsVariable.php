<?php
namespace Craft;

class JsonTransformsVariable {

	public function getTransform($transform, $size) {
		return craft()->jsonTransforms_fetch->getTransform($transform, $size);
	}

}
