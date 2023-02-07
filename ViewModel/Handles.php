<?php

declare(strict_types=1);

namespace MarkShust\LayoutHandleLogger\ViewModel;

use Magento\Framework\App\State;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\View\LayoutInterface;

class Handles implements ArgumentInterface
{
    public function __construct(
        private readonly LayoutInterface $layout,
        private readonly State $state,
    ) {}

    public function getHandles(): array
    {
        return $this->layout->getUpdate()->getHandles();
    }

    public function isDeveloperMode(): bool
    {
        return $this->state->getMode() == State::MODE_DEVELOPER;
    }
}
