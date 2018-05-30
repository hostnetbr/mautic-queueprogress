<?php

/*
 * @author      Henrique Rodrigues <henrique@hostnet.com.br>
 *
 * @link        https://www.hostnet.com.br
 *
 */

namespace MauticPlugin\HostnetQueueProgressBundle\Controller;

use Mautic\CoreBundle\Controller\CommonController;
use Symfony\Component\HttpFoundation\Request;
use FilesystemIterator;

class QueueProgressController extends CommonController
{
    public function queueprogressAction(Request $request)
    {
        # Gets the quantity of messages in the spool folder
        $emailQuantity = iterator_count(new FilesystemIterator(
            $this->factory->getParameter('mailer_spool_path') . '/default'
        ));

        return $this->delegateView([
            'contentTemplate' => 'HostnetQueueProgressBundle:QueueProgressView:form.html.php',
            'viewParameters' => [
                'emailQuantity' => $emailQuantity
            ]
        ]);
    }
}
