<?php

namespace FontInstaller\Composer;

use \Composer\Package\PackageInterface;
use \Composer\Installer\LibraryInstaller;

class FontInstallerInstaller extends LibraryInstaller
{
  public function getInstallPath(PackageInterface $package)
  {
    $name = str_replace("johnshopkins/", "", $package->getPrettyName());
    return 'src/assets/fonts/lib/' . $name;
  }

  public function supports($packageType)
  {
    return "font-lib" === $packageType;
  }
}
