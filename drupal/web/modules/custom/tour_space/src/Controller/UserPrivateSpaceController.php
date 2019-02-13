<?php

namespace Drupal\tour_space\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\views\Views;

/**
 * Class UserPrivateSpaceController.
 */
class UserPrivateSpaceController extends ControllerBase
{

    /**
     * Hello.
     *
     * @return string
     *   Return Hello string.
     */
    public function publicSpace()
    {
        $rendered = \Drupal::service('renderer')->render(views_embed_view('public_tour_space', 'page_1'));
        return [
            '#type' => 'markup',
            '#markup' => $rendered,
        ];
    }


    public function privateSpace($name)
    {
        $rendered = \Drupal::service('renderer')->render(views_embed_view('public_tour_space', 'page_2'));
        return [
            '#type' => 'markup',
            '#markup' => $rendered,
        ];
    }

    public function sharedSpace($name)
    {
        $rendered = \Drupal::service('renderer')->render(views_embed_view('public_tour_space', 'page_3'));
        return [
            '#type' => 'markup',
            '#markup' => $rendered,
        ];
    }


}
