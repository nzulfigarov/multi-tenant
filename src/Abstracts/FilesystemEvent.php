<?php

/*
 * This file is part of the hyn/multi-tenant package.
 *
 * (c) Daniël Klabbers <daniel@klabbers.email>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://tenancy.dev
 * @see https://github.com/hyn/multi-tenant
 */

namespace Hyn\Tenancy\Abstracts;

use Hyn\Tenancy\Contracts\Website;
use Illuminate\Contracts\Filesystem\Filesystem;

abstract class FilesystemEvent extends AbstractEvent
{
    /**
     * @var Filesystem
     */
    public $filesystem;
    /**
     * @var Website
     */
    public $website;

    public function __construct(Website $website, Filesystem $filesystem)
    {
        $this->website = $website;
        $this->filesystem = $filesystem;
    }
}
