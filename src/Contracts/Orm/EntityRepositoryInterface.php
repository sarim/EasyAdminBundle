<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Contracts\Orm;

use Doctrine\ORM\QueryBuilder;
use EasyCorp\Bundle\EasyAdminBundle\Config\Fields;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\FiltersDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto;

interface EntityRepositoryInterface
{
    public function createQueryBuilder(SearchDto $searchDto, EntityDto $entityDto, Fields $fields, FiltersDto $filtersDto): QueryBuilder;
}
