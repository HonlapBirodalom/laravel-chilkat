<?php

namespace HonlapBirodalom\Chilkat;

use HonlapBirodalom\Chilkat\Enums\LicenseUnlockStatusEnum;
use HonlapBirodalom\Chilkat\Exceptions\InvalidInitialization;
use HonlapBirodalom\Chilkat\Generated\CkGlobal;

class Chilkat
{
    private CkGlobal $chilkatGlobal;

    private ?string $chilkatExtension = 'chilkat_9_5_0';

    private ?string $license;

    public function __construct()
    {
        $this->license = config('chilkat.license');
    }

    /**
     * Initialize manage Chilkat license and extension.
     *
     * @throws InvalidInitialization
     */
    public function initialize(): static
    {
        $this->extensionLoaded()->unlockBundle();

        return $this;
    }

    /**
     * Tries to unlock Chilkat bundle in trial mode or licenced mode.
     *
     * @throws InvalidInitialization
     */
    private function unlockBundle(): void
    {
        $this->chilkatGlobal = new CkGlobal();

        if (! $this->chilkatGlobal->UnlockBundle($this->license)) {
            throw InvalidInitialization::couldNotUnlockLicense($this->licenseInfo());
        }
    }

    /**
     * Gets license unlock status message.
     */
    public function licenseInfo(): string
    {
        return match (LicenseUnlockStatusEnum::tryFrom($this->chilkatGlobal->get_UnlockStatus())) {
            LicenseUnlockStatusEnum::NotUnlocked => 'Not unlocked.',
            LicenseUnlockStatusEnum::UnlockedWithFullTrial => 'Unlocked in trial mode.',
            LicenseUnlockStatusEnum::UnlockedWithLicense => 'Unlocked using purchased unlock code.',
            default => 'License unlock status not available.'
        };
    }

    /**
     * Checks for Chilkat PHP extension is loaded.
     *
     * @return $this
     *
     * @throws InvalidInitialization
     */
    private function extensionLoaded(): static
    {
        if (! extension_loaded($this->chilkatExtension)) {
            throw InvalidInitialization::couldNotLoadExtension($this->chilkatExtension);
        }

        return $this;
    }

    /**
     * Provides a means for updating global settings
     * that affect all types of Chilkat objects across all instances.
     */
    public function globalReferences(): CkGlobal
    {
        return $this->chilkatGlobal;
    }
}
