<?php

use Kirby\Cms\App;

App::plugin('tobiaswolf/transform-urls', [
	'fieldMethods' => [
			'transformUrls' => function ($field) {
					$field->value = preg_replace_callback('/\/@\/(page|file)\/([A-Za-z0-9]+)/', function ($matches) {
						$uuidUrl = $matches[1] . '://' . $matches[2];
						if (option('debug') === true) {
							// Throws error, if uuid does not match any model.
							return url($uuidUrl);
						} else {
							try {
								return url($uuidUrl);
							} catch (Exception) {
								return $matches[0];
							}
						}
					}, $field->value);
					return $field;
			},
	],
]);
