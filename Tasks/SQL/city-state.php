<?php
/**
  * Napraviti tabelu City sa poljima: id (auto increment primary key), state_id (Int), name (varchar).
  * Napraviti tabelu State sa poljima: id (auto increment primary key), name (varchar), population (Int).
  *
  * Upisati u tabelu City vrednosti:
  *   state_id = 1 | name = Novi Sad,
  *   state_id = 1 | name = Beograd,
  *   state_id = 2 | name = Vukovar,
  *   state_id = 2 | name = Zagreb,
  *   state_id = 3 | name = Ljubljana,
  *   state_id = 3 | name = Maribor,
  *
  * Upisati u tabelu State vrednosti:
  *   name = Serbia | population = 6000000,
  *   name = Croatia | population = 4000000,
  *   name = Slovenia | population = 200,
  *
  * Napraviti query na bazu, zeljeni rezultat bi trebao biti u formatu:
  *
  * id |  city_name  | state_name
  * 1     Novi sad      Serbia
  * 2     Beograd       Serbia
  * 3     Vukovar       Croatia
  * 4     Zagreb        Croatia
  * 5     Ljubljana     Slovenia
  * 6     Maribor       Slovenia
  *
  */
