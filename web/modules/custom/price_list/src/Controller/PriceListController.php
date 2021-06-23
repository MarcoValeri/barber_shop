<?php

namespace Drupal\price_list\Controller;

use Symfony\Component\HttpFoundation\Response;

class PriceListController {

    public function content() {
        return new Response('Price List page');
    }

}