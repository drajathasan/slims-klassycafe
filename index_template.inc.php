<?php
use SLiMS\Filesystems\Storage;
require __DIR__ . '/vendor/autoload.php';
include_once __DIR__ . '/lib/init.php';
include_once __DIR__ . '/lib/View.php';

View::setBasePath(__DIR__);

View::registerGlobalVariables([
  'available_languages' => $available_languages,
  'sysconf' => $sysconf,
  'metadata' => $metdata??'',
  'notes' => $notes??'',
  'page_title' => $page_title??'',
  'maincontent' => $main_content??'',
  'subject' => $subject??'',
  'image_src' => $image_src??'',
  'engine' => $engine??'',
  'opac' => $opac??$this??'',
  'imagesDisk' => Storage::images(),
  'dbs' => $dbs
]);

echo View::render('sections.dashboard', [
  'title' => 'Template'
]);
