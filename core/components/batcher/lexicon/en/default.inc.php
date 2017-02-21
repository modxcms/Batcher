<?php
/**
 * Batcher
 *
 * Copyright 2010 by Shaun McCormick <shaun@modxcms.com>
 *
 * This file is part of Batcher, a batch resource editing Extra.
 *
 * Batcher is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Batcher is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Batcher; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package batcher
 */
/**
 * Default English language translation
 *
 * @package batcher
 * @subpackage lexicon
 * @language en
 */
$_lang['batcher'] = 'Batcher';
$_lang['batcher.action_err_ns'] = 'Please specify an action.';
$_lang['batcher.and_others'] = 'And [[+count]] others...';
$_lang['batcher.bulk_actions'] = 'Bulk actions';
$_lang['batcher.cacheable'] = 'Cacheable';
$_lang['batcher.category'] = 'Category';
$_lang['batcher.category_err_ns'] = 'Category not specified.';
$_lang['batcher.category_err_nf'] = 'Category with ID [[+id]] not found.';
$_lang['batcher.change_authors'] = 'Change authors';
$_lang['batcher.change_category'] = 'Change category';
$_lang['batcher.change_dates'] = 'Change dates';
$_lang['batcher.change_default_tv_values'] = 'Change default TV values';
$_lang['batcher.change_tv_values'] = 'Change TV values';
$_lang['batcher.change_parent'] = 'Change parent';
$_lang['batcher.change_template'] = 'Change template';
$_lang['batcher.createdby'] = 'Created by';
$_lang['batcher.createdon'] = 'Created on';
$_lang['batcher.deleted'] = 'Deleted';
$_lang['batcher.editedby'] = 'Edited by';
$_lang['batcher.editedon'] = 'Edited on';
$_lang['batcher.filter_by_status'] = 'Filter by status';
$_lang['batcher.filter_by_template'] = 'Filter by template';
$_lang['batcher.filter_by_context'] = 'Filter by context';
$_lang['batcher.filter.field'] = 'Field';
$_lang['batcher.filter.type'] = 'Operator';
$_lang['batcher.filter.value'] = 'Value';
$_lang['batcher.filter.clear'] = 'Clear filters';
$_lang['batcher.filter.advanced'] = 'Advanced filter';
$_lang['batcher.filter.advanced.desc'] = 'The advanced filter allows you to filter on all resource fields with custom operators.<br>
For the operators `IN` and `BETWEEN` the values have to be comma-separated, and for the `LIKE` operator you can use the `%` wildcard.<br><br>
<b>Examples:</b><br>
Field: `id` - Operator: `BETWEEN` - Value: `1,5` will give you resources with IDs between 1 and 5.<br>
Field: `id` - Operator: `IN` - Value: `1,3,6` will give resources with IDs 1, 3 and 6.<br>
Field: `pagetitle` - Operator: `LIKE` - Value: `page%` will give all resources with pagetitle starting with `page`.<br>
';
$_lang['batcher.filter.element_type'] = 'Element type';
$_lang['batcher.hidemenu'] = 'Hidden from menus';
$_lang['batcher.intro_msg'] = 'Perform batch actions on your resources here. Start by selecting the resources you would like to edit.';
$_lang['batcher.menu_desc'] = 'Execute batch actions on your resources and elements.';
$_lang['batcher.parent'] = 'Parent';
$_lang['batcher.parent_err_nf'] = 'Parent not found.';
$_lang['batcher.parent_err_ns'] = 'Parent not specified.';
$_lang['batcher.pub_date'] = 'Publish date';
$_lang['batcher.published'] = 'Published';
$_lang['batcher.publishedby'] = 'Published by';
$_lang['batcher.resources'] = 'Resources';
$_lang['batcher.resources_affect'] = 'This will affect the following resources:';
$_lang['batcher.resources_err_ns'] = 'Please select one or more resources to perform that action on first!';
$_lang['batcher.richtext'] = 'Richtext enabled';
$_lang['batcher.searchable'] = 'Searchable';
$_lang['batcher.context'] = 'Context';
$_lang['batcher.template'] = 'Template';
$_lang['batcher.template_err_nf'] = 'Template not found.';
$_lang['batcher.template_err_ns'] = 'Template not specified.';
$_lang['batcher.template.tvdefaults.intro_msg'] = 'Set the default values of any template variables for this template. Check which TVs you would like to change.';
$_lang['batcher.template.tvs.intro_msg'] = 'Sets the values for all resource template variable values for this template. Check which TVs you would like to change.';
$_lang['batcher.templates'] = 'Templates';
$_lang['batcher.templates_err_ns'] = 'Please select one or more templates to perform that action on first!';
$_lang['batcher.templates.intro_msg'] = 'Perform batch actions on your templates here. Start by selecting the templates you would like to edit.';
$_lang['batcher.tvs'] = 'Template variables';
$_lang['batcher.tvs_err_ns'] = 'No template variables specified!';
$_lang['batcher.toggle'] = 'Toggle';
$_lang['batcher.uncacheable'] = 'Uncacheable';
$_lang['batcher.undeleted'] = 'Not deleted';
$_lang['batcher.unhidemenu'] = 'Shown in menus';
$_lang['batcher.unpub_date'] = 'Unpublish date';
$_lang['batcher.unpublished'] = 'Unpublished';
$_lang['batcher.unrichtext'] = 'Richtext disabled';
$_lang['batcher.unsearchable'] = 'Unsearchable';
$_lang['batcher.user_err_nf'] = 'User not found.';
$_lang['batcher.permanentdelete'] = 'Permanent delete';
$_lang['batcher.permanentdelete.title'] = 'Permantently delete resources?';
$_lang['batcher.permanentdelete.message'] = 'Are you sure that you want to delete all selected resources permanently? This cannot be undone.';
$_lang['batcher.resources.all'] = 'All resources';
$_lang['batcher.resources.published'] = 'Published';
$_lang['batcher.resources.unpublished'] = 'Unpublished';
$_lang['batcher.resources.deleted'] = 'Deleted';

$_lang['batcher.elements'] = 'Elements';
$_lang['batcher.elements.intro_msg'] = 'Perform batch actions on your elements here. Start by selecting the elements you would like to edit.';
