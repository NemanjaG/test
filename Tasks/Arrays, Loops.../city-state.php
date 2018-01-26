<?php

/**
  *
  * Data su dva niza city i state.
  *
  * $city = [
  *     'serbia' => [
  *         0 => 'Novi Sad',
  *         1 => 'Belgrade',
  *     ],
  *     'croatia' => [
  *         0 => 'Vukovar',
  *         1 => 'Zagreb',
  *     ],
  *     'slovenia' => [
  *         0 => 'Ljubljana',
  *         1 => 'Maribor',
  *     ],
  * ];
  *
  * $state = [
  *     0 => [
  *         'state' => 'serbia',
  *         'population' => '6 milion',
  *     ],
  *     1 => [
  *         'state' => 'croatia',
  *         'population' => '4 milion',
  *     ],
  *     2 => [
  *         'state' => 'slovenia',
  *         'population' => '200 people',
  *     ],
  * ];
  *
  * Napraviti novi niz list.
  * Zeljeni rezultat bi trebao biti u formatu:
  *
  * $list = [
  *   0 => [
  *     0 => 'Novi Sad',
  *     1 => 'Belgrade',
  *     'state' => 'serbia',
  *     'population' => '6 milion'
  *   ],
  *   1 => [
  *     0 => 'Vukovar',
  *     1 => 'Zagreb',
  *     'state' => 'croatia',
  *     'population' => '4 milion'
  *   ],
  *   2 => [
  *     0 => 'Ljubljana',
  *     1 => 'Maribor',
  *     'state' => 'slovenia',
  *     'population' => '200 people'
  *   ],
  * ]
  *
  */
