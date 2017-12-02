<?php

namespace Jaeger\Sampler;

interface Sampler
{
    const SAMPLER_TYPE_TAG_KEY = 'sampler.type';

    const SAMPLER_PARAM_TAG_KEY = 'sampler.param';

    public function isSampled();

    public function getTags();
}
