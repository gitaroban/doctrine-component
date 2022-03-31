<?php
declare(strict_types=1);

namespace Gitaroban\DoctrineComponent;

use Closure;
use Doctrine\Common\Collections\Collection;

class CollectionPartitionne
{
    /**
     * @var Collection
     */
    private Collection $elementsInclus;
    /**
     * @var Collection
     */
    private Collection $elementsExclus;

    /**
     * @param Collection $collection
     * @param Closure    $closure
     */
    public function __construct(Collection $collection, Closure $closure)
    {
        list (
            $this->elementsInclus,
            $this->elementsExclus
            ) = $collection->partition($closure);
    }

    /**
     * @return Collection
     */
    public function getElementsInclus(): Collection
    {
        return $this->elementsInclus;
    }

    /**
     * @return Collection
     */
    public function getElementsExclus(): Collection
    {
        return $this->elementsExclus;
    }
}
