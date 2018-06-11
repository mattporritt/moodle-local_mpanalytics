<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


defined('MOODLE_INTERNAL') || die();

function xmldb_local_mpanalytics_install() {
    global $DB;

    \core\session\manager::set_user(get_admin());

    $usedtargets = $DB->get_fieldset_select('analytics_models', 'DISTINCT target', '');

    $indicator = \core_analytics\manager::get_indicator('\local_mpanalytics\analytics\indicator\set_setting');
    $indicators = array($indicator->get_id() => $indicator);

    // Custom definition.

//     if (!in_array('\local_mpanalytics\analytics\target\linear_example', $usedtargets)) {
//         $target = \core_analytics\manager::get_target('\local_mpanalytics\analytics\target\linear_example');
//         $model = \core_analytics\model::create($target, $indicators, '\core\analytics\time_splitting\single_range');
//         $model->enable();
//     }
}
