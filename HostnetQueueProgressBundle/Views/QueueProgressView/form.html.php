<?php
// load base template
$view->extend('MauticCoreBundle:Default:content.html.php');
$view['slots']->set(
    'headerTitle',
    $view['translator']->trans('mautic.plugin.queueprogress.title')
);
?>

<div class="pr-md pl-md pb-md">
    <div class="panel shd-none">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td width="20%">
                        <span class="fw-b"><?=$view['translator']->trans('mautic.plugin.queueprogress.label')?></span>
                    </td>
                    <td><?=$emailQuantity?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
