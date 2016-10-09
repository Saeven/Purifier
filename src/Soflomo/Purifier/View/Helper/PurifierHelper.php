<?php

namespace Soflomo\Purifier\View\Helper;

use HTMLPurifier;
use Zend\View\Helper\AbstractHelper;

class PurifierHelper extends AbstractHelper
{
    protected $purifier;

    public function __construct(HTMLPurifier $purifier)
    {
        $this->purifier = $purifier;
    }

    protected function getPurifier()
    {
        return $this->purifier;
    }

    public function __invoke($html = null)
    {
        if (null === $html) {
            return $this;
        }

        return $this->purify($html);
    }

    public function purify($html)
    {
        return $this->getPurifier()->purify($html);
    }
}