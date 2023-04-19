<?php

/**
 *  Конфигурация базы данных
 */
defined("DBDRIVER") or define("DBDRIVER", "sqlite");
defined("DBHOST") or define("DBHOST", "localhost");
defined("DBNAME") or define("DBNAME", "pet-project");
defined("DBUSER") or define("DBUSER", "root");
defined("DBPASS") or define("DBPASS", "123");
defined("DBPATH") or define("DBPATH", "../database/database.sqlite");   // for sqlite database

/**
 *  Значение "1" включает подробную информацию об ошибках/исключениях
 *
 *  Значение "0" выключает демонстрацию ошибок, оставляя только "500 Server ERROR",
 *  при этом все ошибки записываются в log файл
 */
const ERROR_HANDLER = 0;

/**
 *  Путь для хранение изображений
 *
 */
const IMAGES_PATH = '../storage/images/';
