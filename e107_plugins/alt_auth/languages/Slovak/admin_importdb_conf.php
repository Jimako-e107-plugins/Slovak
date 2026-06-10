<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2012 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Slovak language file
 *
 * @package    e107_plugins
 * @subpackage alt_auth
 */

return [
    'IMPORTDB_LAN_9'  => "Metóda hesla:",
    'IMPORTDB_LAN_10' => "Nastavte typ hesla importovanej databázy",
    'IMPORTDB_LAN_11' => "Táto možnosť sa používa, keď importujete do e107 iný systém založený na užívateľoch. Umožňuje prijať heslá zakódované vo vybranom neštandardnom formáte. Každé heslo sa konvertuje do formátu pre e107, keď sa užívateľ prihlási.",
    'LAN_AUTHENTICATE_HELP' => "Táto metóda overenia sa používa <i>len</i> keď importujete užívateľa do e107 a heslo má iný formát. Pôvodné heslo sa prečíta z lokálnej databázy a overí voči uloženému formátu originálneho systému. Ak overenie prejde, konvertuje sa na formát kompatibilný s e107 a uloží do databázy. Po čase obvykle môžete alt-auth plugin vypnúť, pretože aktívni užívatelia budú mať svoje heslá uložené v kompatibilnom formáte.",
];
