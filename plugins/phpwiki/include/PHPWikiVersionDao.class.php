<?php
/**
 * Copyright (c) Enalean, 2015. All Rights Reserved.
 *
 * This file is a part of Tuleap.
 *
 * Tuleap is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Tuleap is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Tuleap. If not, see <http://www.gnu.org/licenses/>.
 */

class PHPWikiVersionDao extends DataAccessObject {

    public function getAllVersionForGivenPage($page_id) {
        $page_id = $this->da->escapeInt($page_id);

        $sql = "SELECT id, version, content
                FROM plugin_phpwiki_version
                WHERE id = $page_id";

        return $this->retrieve($sql);
    }

    public function getSpecificVersionForGivenPage($page_id, $version_id) {
        $page_id    = $this->da->escapeInt($page_id);
        $version_id = $this->da->escapeInt($version_id);

        $sql = "SELECT id, version, content
                FROM plugin_phpwiki_version
                WHERE id = $page_id
                AND version = $version_id";

        return $this->retrieve($sql);
    }

}