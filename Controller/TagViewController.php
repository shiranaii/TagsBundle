<?php

namespace Netgen\TagsBundle\Controller;

use Netgen\TagsBundle\View\TagView;
use eZ\Bundle\EzPublishCoreBundle\Controller;

class TagViewController extends Controller
{
    /**
     * Action for rendering a tag view.
     *
     * @param \Netgen\TagsBundle\View\TagView $view
     *
     * @return \Netgen\TagsBundle\View\TagView
     */
    public function viewAction(TagView $view)
    {
        return $view;
    }
}
