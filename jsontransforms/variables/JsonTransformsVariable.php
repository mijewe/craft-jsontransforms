<?php
namespace Craft;

class JsonTransformsVariable {

	public function getTransforms() {
		return craft()->jsontransforms_fetch->getTransforms();
	}

}
