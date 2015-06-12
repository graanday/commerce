<?php

/**
 * @file
 * Contains \Drupal\commerce_store\StoreContextInterface.
 */

namespace Drupal\commerce_store;

/**
 * Store context interface
 *
 * Holds a reference to the active store, resolved on demand.
 *
 * @see \Drupal\commerce_store\StoreContext
 */
interface StoreContextInterface {

  /**
   * Gets the active store for the current request.
   *
   * @return \Drupal\commerce_store\StoreInterface
   */
  public function getStore();

}
