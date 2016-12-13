<?php

namespace Drupal\greeting\Controller;

class GreetingController {
    
    public function greeting() {
      return array(
        '#title' => "Greeting",
        '#markup' => 'This is some content.'
      );
    }
}
