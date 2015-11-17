<?php

namespace FontInstaller\Composer;

use \Composer\Package\PackageInterface;
use \Composer\Installer\LibraryInstaller;

class FontInstallerInstaller extends LibraryInstaller
{
  public function getPackageBasePath(PackageInterface $package)
  {
    $name = str_replace("johnshopkins/", "", $package->getPrettyName());
    return 'src/assets/font/lib/' . $name;
  }

  public function supports($packageType)
  {
    return "font-lib" === $packageType;
  }
}