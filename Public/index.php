<?php

use Dotenv\Dotenv;
use App\Models\User;
use SmallMvcSystem\Http\Route;
use SmallMvcSystem\Support\Arr;
use SmallMvcSystem\Support\Str;
use SmallMvcSystem\validation\validator;
use SmallMvcSystem\validation\Rules\RequiredRule;
use SmallMvcSystem\DataBase\Grammars\MySQLGrammar;
use SmallMvcSystem\Http\Request;
use SmallMvcSystem\Http\Response;
use SmallMvcSystem\validation\Rules\AlphaNumericalRule;

require_once __DIR__ . '/../src/Support/helpers.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'Routes/wep.php';




$dotenv = Dotenv::createImmutable(base_path());
$dotenv->load();

app()->run();








