<?php

//include directly IF not using composer, along with 'src' directory

define('FPDM_DIRECT', true);

require_once("src/fpdm.php");

require_once("src/filters/FilterASCIIHex.php");
require_once("src/filters/FilterASCII85.php");
require_once("src/filters/FilterFlate.php");
require_once("src/filters/FilterLZW.php");
require_once("src/filters/FilterStandard.php");
