<?php declare(strict_types=1);

namespace OpenEngine\Di\Exceptions;

use Psr\Container\ContainerExceptionInterface;

class ClassNotFoundException extends \Exception implements ContainerExceptionInterface, DiExceptionInterface
{
}
