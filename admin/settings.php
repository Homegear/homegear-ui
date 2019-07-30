<?php
/* Copyright 2013-2019 Homegear GmbH
 *
 * Smart Home Interface (Shif, homegear-ui) is free software: you can
 * redistribute it and/or modify it under the terms of the GNU Lesser
 * General Public License as published by the Free Software Foundation,
 * either version 3 of the License, or (at your option) any later version.
 * 
 * Shif is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.

 * You should have received a copy of the GNU Lesser General Public
 * License along with Shif.  If not, see
 * <http://www.gnu.org/licenses/>.
*/

///////////////////////////////////////////////////////////////////////////////////////////
// Einstellungen und globale Variablen
///////////////////////////////////////////////////////////////////////////////////////////

// Pfad zum Rootverzeichnis des Interfaces
$rootPath         = getcwd();

// Pfad zu den Admin Daten
$adminPath        = $rootPath."/admin";

// Pfad zum Master der Erweiterungen
$masterPath       = $adminPath."/master/";

//{{{ Load settings
$databaseJsonPath = $rootPath."/interfacedata.php";
if(file_exists($databaseJsonPath))
{
    include_once($databaseJsonPath);
    if(!is_array($interfaceData)) die("Invalid JSON file!");
}
else die("JSON file missing!");
//}}}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
// Fehlermeldungen im DemoModus unterdrücken, damit die Statusrückgabe angezeigt werden kann
error_reporting($interfaceData["settings"]["errorReporting"]);

////////////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////////////
// Pfad zum Interfaceverzeichnis ab URL Root
$interfacePath = $interfaceData["settings"]["interfacePath"];
