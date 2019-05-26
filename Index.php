<?php

class MainController {
  public function actionIndex() {
    $cinemas = json_decode(file_get_contents(API . 'cinema'));
    include_once('./views/index.php');
    return true;
  }
  public function actionCinema($args) {
    $seancesToday = json_decode(file_get_contents(API . "seance/{$args[0]}/2017-02-01")); // date('Y-m-d')
    $seancesTomorrow = json_decode(file_get_contents(API . "seance/{$args[0]}/2017-02-02")); // date('Y-m-d', time() + 3600 * 24)
    include_once('./views/cinema.php');
    return true;
  }
  public function actionHall($args) {
    $seancesToday = json_decode(file_get_contents(API . "hall/{$args[0]}/2017-02-01")); // date('Y-m-d')
    $seancesTomorrow = json_decode(file_get_contents(API . "hall/{$args[0]}/2017-02-02")); // date('Y-m-d', time() + 3600 * 24)
    include_once('./views/cinema.php');