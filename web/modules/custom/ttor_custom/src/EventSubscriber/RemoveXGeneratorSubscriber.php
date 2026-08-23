<?php

namespace Drupal\ttor_custom\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Removes the X-Generator header from responses.
 *
 * Replaces the remove_x_generator feature of the removed Mix module.
 */
class RemoveXGeneratorSubscriber implements EventSubscriberInterface {

  /**
   * Removes the X-Generator header on kernel response.
   *
   * @param \Symfony\Component\HttpKernel\Event\ResponseEvent $event
   *   The response event.
   */
  public function onKernelResponse(ResponseEvent $event): void {
    $event->getResponse()->headers->remove('X-Generator');
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents(): array {
    $events[KernelEvents::RESPONSE][] = ['onKernelResponse', -10];
    return $events;
  }

}
