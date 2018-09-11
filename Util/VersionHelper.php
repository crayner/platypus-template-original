<?php
/**
 * Created by PhpStorm.
 *
 * This file is part of the Busybee Project.
 *
 * (c) Craig Rayner <craig@craigrayner.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * User: craig
 * Date: 3/08/2018
 * Time: 16:58
 */
namespace PlatypusTemplate\Original\Util;

use App\Manager\Interfaces\ThemeVersionHelper;

/**
 * Class VersionHelper
 * @package PlatypusTemplate\Original\Util
 */
class VersionHelper implements ThemeVersionHelper
{
    /**
     * getVersion
     *
     * @return string
     */
    public function getVersion(): string
    {
        return '0.0.10';
    }

    private $name = 'Original';
    /**
     * getName
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * getName
     *
     * @return string
     */
    public function getTemplateName(): string
    {
        return 'PlatypusTemplateOriginal';
    }

    /**
     * getDescription
     *
     * @return string
     */
    public function getDescription(): string
    {
        return 'The default theme for the Platypus release.';
    }

    /**
     * getAuthor
     *
     * @return string
     */
    public function getAuthor(): string
    {
        return 'Craig Rayner';
    }

    /**
     * getURL
     *
     * @return string
     */
    public function getURL(): string
    {
        return 'http://www.craigrayner.com';
    }

    /**
     * getBackgroundImage
     *
     * @return null|string
     */
    public function getBackgroundImage(): ?string
    {
        return 'bundles/platypustemplateoriginal/img/backgroundPage.jpg';
    }
}