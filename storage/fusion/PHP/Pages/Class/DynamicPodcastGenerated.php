<?php

/**
 * This file was automatically generated by Fusion.
 * You should not edit it.
 */
namespace Fusion\Generated\Pages\Class;

class DynamicPodcastGenerated extends \Fusion\FusionPage
{
    public \App\Models\Podcast $podcast;
    public function mount(\App\Models\Podcast $podcast)
    {
        $this->podcast = $podcast;
    }
}