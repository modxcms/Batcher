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
$_lang['batcher.action_err_ns'] = 'Specificeer een actie a.u.b.';
$_lang['batcher.and_others'] = 'En [[+count]] anderen...';
$_lang['batcher.bulk_actions'] = 'Bulk acties';
$_lang['batcher.cacheable'] = 'Cachebaar';
$_lang['batcher.category'] = 'Categorie';
$_lang['batcher.category_err_ns'] = 'Categorie niet gespecificeerd.';
$_lang['batcher.category_err_nf'] = 'Categorie met ID [[+id]] niet gevonden.';
$_lang['batcher.change_authors'] = 'Verander auteurs';
$_lang['batcher.change_category'] = 'Verander categorie';
$_lang['batcher.change_dates'] = 'Verander data';
$_lang['batcher.change_default_tv_values'] = 'Verander standaard TV waarden';
$_lang['batcher.change_tv_values'] = 'Verander TV waarden';
$_lang['batcher.change_parent'] = 'Verander parent';
$_lang['batcher.change_template'] = 'Verander template';
$_lang['batcher.createdby'] = 'Gemaakt door';
$_lang['batcher.createdon'] = 'Gemaakt op';
$_lang['batcher.deleted'] = 'Verwijderd';
$_lang['batcher.editedby'] = 'Aangepast door';
$_lang['batcher.editedon'] = 'Aangepast op';
$_lang['batcher.filter_by_status'] = 'Filter op status';
$_lang['batcher.filter_by_template'] = 'Filter op template';
$_lang['batcher.filter_by_context'] = 'Filter op context';
$_lang['batcher.filter.field'] = 'Veld';
$_lang['batcher.filter.type'] = 'Operator';
$_lang['batcher.filter.value'] = 'Waarde';
$_lang['batcher.filter.clear'] = 'Verwijder filters';
$_lang['batcher.filter.advanced'] = 'Geavanceerde filter';
$_lang['batcher.filter.advanced.desc'] = 'De geavanceerde filter stelt je in staat om alle bronvelden te filteren met aangepaste operators.<br>
De waarden van de `IN` en `BETWEEN` operators dienen komma-gescheiden te zijn, voor de `LIKE` operator kun je gebruik maken van de `%` wildcard.<br><br>
<b>Voorbeelden:</b><br>
Veld: `id` - Operator: `BETWEEN` - Waarde: `1,5` geeft je bronnen met IDs 1 t/m 5.<br>
Veld: `id` - Operator: `IN` - Waarde: `1,3,6` geeft je bronnen met IDs 1, 3 en 5.<br>
Veld: `pagetitle` - Operator: `LIKE` - Waarde: `page%` geeft je alle bronnen wiens pagetitle beginnen met `page`.<br>';
$_lang['batcher.filter.element_type'] = 'Element type';
$_lang['batcher.hidemenu'] = 'Verborgen in menu\'s';
$_lang['batcher.intro_msg'] = 'Hier kun je batch acties uitvoeren op je bronnen.';
$_lang['batcher.menu_desc'] = 'Voer batch acties uit op je bronnen en elementen.';
$_lang['batcher.parent'] = 'Parent';
$_lang['batcher.parent_err_nf'] = 'Parent niet gevonden.';
$_lang['batcher.parent_err_ns'] = 'Parent niet gespecificeerd.';
$_lang['batcher.pub_date'] = 'Datum van publiceren';
$_lang['batcher.published'] = 'Gepubliceerd';
$_lang['batcher.publishedby'] = 'Gepubliceer door';
$_lang['batcher.resources'] = 'Bronnen';
$_lang['batcher.resources_affect'] = 'Dit heeft invloed op de volgende bronnen:';
$_lang['batcher.resources_err_ns'] = 'Selecteer a.u.b. bronnen om die actie op uit te voeren.';
$_lang['batcher.richtext'] = 'Richtext ingeschakeld';
$_lang['batcher.searchable'] = 'Zoekbaar';
$_lang['batcher.context'] = 'Context';
$_lang['batcher.template'] = 'Template';
$_lang['batcher.template_err_nf'] = 'Template niet gevonden.';
$_lang['batcher.template_err_ns'] = 'Template niet gespecificeerd.';
$_lang['batcher.template.tvdefaults.intro_msg'] = 'Stel de standaardwaarden in voor alle template variabelen van dit template. Vink aan welke TVs je graag wilt veranderen.';
$_lang['batcher.template.tvs.intro_msg'] = 'Stelt de waarde in voor alle bron template variabele waarden van dit template. Vink aan welke TVs je graag wilt veranderen.';
$_lang['batcher.templates'] = 'Templates';
$_lang['batcher.templates_err_ns'] = 'Selecteer a.u.b. templates om die actie op uit te voeren.';
$_lang['batcher.templates.intro_msg'] = 'Hier kun je batch acties  uitvoeren op je templates.';
$_lang['batcher.tvs'] = 'Template variabelen';
$_lang['batcher.tvs_err_ns'] = 'Geen template variabelen gespecificeerd!';
$_lang['batcher.toggle'] = 'Toggle';
$_lang['batcher.uncacheable'] = 'Niet cachebaar';
$_lang['batcher.undeleted'] = 'Niet verwijderd';
$_lang['batcher.unhidemenu'] = 'Getoond in menu\'s';
$_lang['batcher.unpub_date'] = 'Datum van onpubliceren';
$_lang['batcher.unpublished'] = 'Niet gepubliceerd';
$_lang['batcher.unrichtext'] = 'Richtext uitgeschakeld';
$_lang['batcher.unsearchable'] = 'Onzoekbaar';
$_lang['batcher.user_err_nf'] = 'Gebruiker niet gevonden.';
$_lang['batcher.permanentdelete'] = 'Permanent verwijderen';
$_lang['batcher.permanentdelete.title'] = 'Bronnen permanent verwijderen?';
$_lang['batcher.permanentdelete.message'] = 'Weet je zeker dat je alle geselecteerde bronnen permanent wilt verwijderen? Dit kan niet ongedaan worden gemaakt!';

$_lang['batcher.resources.all'] = 'Alle bronnen';
$_lang['batcher.resources.published'] = 'Gepubliceerd';
$_lang['batcher.resources.unpublished'] = 'Niet gepubliceerd';
$_lang['batcher.resources.deleted'] = 'Verwijderd';

$_lang['batcher.elements'] = 'Elementen';
$_lang['batcher.elements.intro_msg'] = 'Hier kun je batch acties uitvoeren op verschillende soorten elementen.';
