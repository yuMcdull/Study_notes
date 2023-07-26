<?php
namespace People;
use People\Teacher;
use People\Coder;
require_once "coder.php";
require_once "teacher.php";
Coder\worker::Say();
Teacher\worker::Say();
