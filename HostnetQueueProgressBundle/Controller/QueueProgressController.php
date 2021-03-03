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
use GlobIterator;

class QueueProgressController extends CommonController
{
    public function queueprogressAction(Request $request)
    {
        $spoolPath = $this->factory->getParameter('mailer_spool_path');

        $emailQuantity = file_exists($spoolPath)
            ? (new GlobIterator("$spoolPath/*.message"))->count()
            : 0;

        return $this->delegateView([
            'contentTemplate' => 'HostnetQueueProgressBundle:QueueProgressView:form.html.php',
            'viewParameters' => [
                'emailQuantity' => $emailQuantity
            ]
        ]);
    }
}
