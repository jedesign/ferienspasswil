<?php

namespace App\Enums;

abstract class CourseState extends BaseEnum
{
    public const DRAFT = 'draft';
    public const ACTIVE = 'active';
    public const TENTATIVE = 'tentative';
    public const CANCELED = 'canceled';
}
