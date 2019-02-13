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
     * publicSpace.
     *
     * @return view
     *   Return public view.
     */
    public function publicSpace()
    {
        $rendered = \Drupal::service('renderer')->render(views_embed_view('public_tour_space', 'page_1'));
        return [
            '#type' => 'markup',
            '#markup' => $rendered,
        ];
    }

    /**
     * privateSpace.
     *
     * @return view
     *   Return private view.
     */
    public function privateSpace($name)
    {
        $rendered = \Drupal::service('renderer')->render(views_embed_view('public_tour_space', 'page_2'));
        return [
            '#type' => 'markup',
            '#markup' => $rendered,
        ];
    }

    /**
     * sharedSpace.
     *
     * @return view
     *   Return shared view.
     */
    public function sharedSpace($name)
    {
        $rendered = \Drupal::service('renderer')->render(views_embed_view('public_tour_space', 'page_3'));
        return [
            '#type' => 'markup',
            '#markup' => $rendered,
        ];
    }


}
