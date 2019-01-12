<?php declare(strict_types=1);

namespace OpenEngine\Di\Exceptions;

use Psr\Container\NotFoundExceptionInterface;

/**
 * Class NotFoundException
 * @package OpenEngine\Di\Exceptions
 */
class ServiceNotFoundException extends \Exception implements NotFoundExceptionInterface, DiExceptionInterface
{
}
