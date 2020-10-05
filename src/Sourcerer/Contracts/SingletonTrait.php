<?php

    /**
    * Sourcerer Contracts
    * SingletonTrait
    *
    * @author        Sidney Tougeiro
    * @copyright     Copyright(c) 2020, sidneytougeiro.com
    * @license       MIT
    */

    namespace Sourcerer\Contracts;


    trait SingletonTrait
    {
        private function __construct() {
        }
        private function __clone() {
        }
        private function __wakeup() {
        }

        private static $instance;

        public static function getInstance() {
            if ( ! self::$instance instanceof self) {
                self::$instance = new self();
            }

            return self::$instance;
        }
    }
