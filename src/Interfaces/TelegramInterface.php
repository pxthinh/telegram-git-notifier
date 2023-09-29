<?php

namespace LbilTech\TelegramGitNotifier\Interfaces;

use LbilTech\TelegramGitNotifier\Exceptions\InvalidViewTemplateException;
use LbilTech\TelegramGitNotifier\Exceptions\MessageIsEmptyException;

interface TelegramInterface
{
    /**
     * Set the menu button for a telegram
     *
     * @param array $menuCommand
     * @param string $menuTemplate
     *
     * @return void
     * @throws MessageIsEmptyException
     * @throws InvalidViewTemplateException
     */
    public function setMyCommands(
        array $menuCommand,
        string $menuTemplate
    ): void;

    /**
     * Check callback from a telegram
     *
     * @return bool
     */
    public function isCallback(): bool;
}
