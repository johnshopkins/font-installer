<?php

namespace FontInstaller\Composer;

use \Composer\Composer;
use \Composer\IO\IOInterface;
use \Composer\Plugin\PluginInterface;

class FontInstallerPlugin implements \Composer\Plugin\PluginInterface
{
  public function activate(Composer $composer, IOInterface $io)
  {
    $installer = new FontInstallerInstaller($io, $composer);
    $composer->getInstallationManager()->addInstaller($installer);
  }
}
