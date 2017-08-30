<?php
namespace Craft;

class JsonTransformsVariable {

	public function getTransform($transform, $size, $multiplier=1) {
		return craft()->jsonTransforms_fetch->getTransform($transform, $size, $multiplier);
	}

}
