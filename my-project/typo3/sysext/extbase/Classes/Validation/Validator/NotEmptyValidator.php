<?php

declare(strict_types=1);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace TYPO3\CMS\Extbase\Validation\Validator;

/**
 * Validator for not empty values.
 */
final class NotEmptyValidator extends AbstractValidator
{
    /**
     * This validator always needs to be executed even if the given value is empty.
     * See AbstractValidator::validate()
     *
     * @var bool
     */
    protected $acceptsEmptyValues = false;

    protected string $nullMessage = 'LLL:EXT:extbase/Resources/Private/Language/locallang.xlf:validator.notempty.null';
    protected string $emptyMessage = 'LLL:EXT:extbase/Resources/Private/Language/locallang.xlf:validator.notempty.empty';

    protected array $translationOptions = ['nullMessage', 'emptyMessage'];

    protected $supportedOptions = [
        'nullMessage' => [null, 'Translation key or message for null value', 'string'],
        'emptyMessage' => [null, 'Translation key or message for empty value', 'string'],
    ];

    /**
     * Checks if the given value ($propertyValue) is not empty (NULL, empty string, empty array or empty object).
     */
    public function isValid(mixed $value): void
    {
        if ($value === null) {
            $this->addError($this->translateErrorMessage($this->nullMessage), 1221560910);
        }
        if ($value === '') {
            $this->addError($this->translateErrorMessage($this->emptyMessage), 1221560718);
        }
        if (is_array($value) && empty($value)) {
            $this->addError($this->translateErrorMessage($this->emptyMessage), 1347992400);
        }
        if ($value instanceof \Countable && $value->count() === 0) {
            $this->addError($this->translateErrorMessage($this->emptyMessage), 1347992453);
        }
    }
}
