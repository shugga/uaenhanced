<?php
/*
 * Defense.php - TODO
 * Copyright (c) 2005  Marcus Lunzenauer
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as
 * published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 */

require_once('lib/objects/BattleUnit.php');

/**
 * TODO
 *
 * @package    lib
 * @subpackage objects
 *
 * @author Marcus Lunzenauer
 */
class Defense extends BattleUnit {
  protected function getType() {
    return UA_DEFENSESYSTEM;
  }
}
?>