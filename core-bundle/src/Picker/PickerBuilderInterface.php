<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * Copyright (c) 2005-2018 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao\CoreBundle\Picker;

interface PickerBuilderInterface
{
    /**
     * Returns a picker or null if the context is not supported.
     *
     * @param PickerConfig $config
     *
     * @return PickerInterface|null
     */
    public function create(PickerConfig $config);

    /**
     * Returns a picker object from encoded URL data.
     *
     * @param string $data
     *
     * @return PickerInterface|null
     */
    public function createFromData($data);

    /**
     * Returns whether the given context is supported.
     *
     * @param string     $context
     * @param array|null $allowed
     *
     * @return bool
     */
    public function supportsContext($context, array $allowed = null);

    /**
     * Returns the picker URL for the given context and configuration.
     *
     * @param string $context
     * @param array  $extras
     * @param string $value
     *
     * @return string
     */
    public function getUrl($context, array $extras = [], $value = '');
}
