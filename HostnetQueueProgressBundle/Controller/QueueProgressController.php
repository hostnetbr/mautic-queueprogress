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

class QueueProgressController extends CommonController
{
    public function queueprogressAction(Request $request)
    {
        return $this->delegateView([
            'contentTemplate' => 'HostnetQueueProgressBundle:QueueProgressView:form.html.php',
            'viewParameters' => [
                
            ]
        ]);
    }
}
