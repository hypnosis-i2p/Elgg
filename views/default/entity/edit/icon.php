<?php
/**
 * Generic entity icon upload helper
 *
 * @uses $vars['entity']      (optional) entity to edit
 * @uses $vars['icon_type']   the type of the icon (default: icon)
 * @uses $vars['name']        name of the input/file (default: icon)
 * @uses $vars['remove_name'] name of the remove icon toggle (default: $vars['name'] . '_remove')
 * @uses $vars['required']    is icon upload required (default: false)
 * @uses $vars['show_remove'] show the remove icon option (default: true)
 * @uses $vars['show_thumb']  show the thumb of the entity if available (default: true)
 * @uses $vars['thumb_size']  the icon size to use as the thumb (default: medium)
 */

$content = elgg_view('entity/edit/icon/file', $vars);
$content .= elgg_view('entity/edit/icon/thumb', $vars);
$content .= elgg_view('entity/edit/icon/remove', $vars);

echo elgg_format_element('div', ['class' => 'elgg-entity-edit-icon-wrapper'], $content);
