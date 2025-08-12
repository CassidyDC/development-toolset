<?php

/**
 * Add scripts to HTML head
 *
 * @package CassidyDC\WPCustomBlockTheme\Functions
 * @version 1.0.0
 */

declare(strict_types=1);

namespace CassidyDC\WPCustomBlockTheme;

/**
 * Add wow style to HTML head to hide elements until wow.js activates them
 */
if (! function_exists('CassidyDC\WPCustomBlockTheme\add_scripts_to_head')) :
    /**
     * Add wow style to HTML head to hide elements until wow.js activates them
     *
     * @since 1.3.0
     * @return void
     */
    function add_scripts_to_head(): void {
        echo '<script> (function () {
			const head = document.querySelector("head");
			if (head) {
				const wowStyle = document.createElement("style");
				wowStyle.innerHTML = ".wow {visibility: hidden;}";
				head.appendChild(wowStyle);
			}
		}());</script>';
    }
endif;

add_action('wp_head', 'CassidyDC\WPCustomBlockTheme\add_scripts_to_head', 1);
