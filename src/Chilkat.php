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

    /**
     * @throws InvalidInitialization
     */
    public function __construct()
    {
        $this->license = config('chilkat.license');

        $this->extensionLoaded()->unlockBundle();
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
            throw InvalidInitialization::couldNotUnlockLicense($this->licenseUnlockStatusMessage());
        }
    }

    /**
     * Gets license unlock status message.
     */
    public function licenseUnlockStatusMessage(): string
    {
        return match ($this->licenseUnlockStatus()) {
            LicenseUnlockStatusEnum::NotUnlocked => 'Not unlocked.',
            LicenseUnlockStatusEnum::UnlockedWithFullTrial => 'Unlocked in trial mode.',
            LicenseUnlockStatusEnum::UnlockedWithLicense => 'Unlocked using purchased unlock code.',
            default => 'License unlock status not available.'
        };
    }

    /**
     * Gets license unlock status.
     */
    private function licenseUnlockStatus(): ?LicenseUnlockStatusEnum
    {
        return LicenseUnlockStatusEnum::tryFrom($this->chilkatGlobal->get_UnlockStatus());
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
     * Gets the latest error text provided by Chilkat libs.
     */
    public function lastErrorText(): string
    {
        return $this->chilkatGlobal->lastErrorText();
    }
}
