<?php

namespace phpshift\phpshift;

use Composer\Plugin\PluginInterface;
use Composer\IO\IOInterface;
use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class Init implements PluginInterface, EventSubscriberInterface
{
    public function __construct()
    {
        die("\nCheck PHPShift's website for the installation guide:\nhttps://phpshift.com/?composer\n\n");
    }

    public function activate(Composer $composer, IOInterface $io)
    {
        $io->write('<info>Check PHPShift\'s website for the installation guide:</info> https://phpshift.com/?composer');
    }

    public function deactivate(Composer $composer, IOInterface $io)
    {
    }

    public function uninstall(Composer $composer, IOInterface $io)
    {
    }

    public static function getSubscribedEvents()
    {
        return [
            'post-install-cmd' => 'onPostInstall',
            'post-update-cmd' => 'onPostUpdate',
        ];
    }

    public function onPostInstall(Event $event)
    {
        $event->getIO()->write('<info>Check PHPShift\'s website for the installation guide:</info> https://phpshift.com/?composer');
    }

    public function onPostUpdate(Event $event)
    {
        $event->getIO()->write('<info>Check PHPShift\'s website for the installation guide:</info> https://phpshift.com/?composer');
    }
}
