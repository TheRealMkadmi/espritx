<?php

namespace ELAO_ENUM_DT_DBAL\App\Enum {

    if (!\class_exists(UserStatusType::class)) {
        class UserStatusType extends \Elao\Enum\Bridge\Doctrine\DBAL\Types\AbstractEnumType
        {
            public const NAME = 'userstatus';

            protected function getEnumClass(): string
            {
                return \App\Enum\UserStatus::class;
            }

            public function getName(): string
            {
                return static::NAME;
            }
        }
    }

}
