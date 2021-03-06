<?php

namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

class Message extends Constraint {

    public $messageMaxEnabledReached = 'form.message.max_enabled_reached';
    public $messageMaxReached = 'form.message.max_reached';
    public $minmumContentRequired = 'form.message.minmum_content_required';

    public function getTargets() {
        return self::CLASS_CONSTRAINT;
    }

}
