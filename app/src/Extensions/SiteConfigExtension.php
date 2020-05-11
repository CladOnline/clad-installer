<?php


namespace Gecco\Extensions;


use SilverStripe\ORM\DataExtension;

class SiteConfigExtension extends DataExtension
{


    public function populateDefaults()
    {
        parent::populateDefaults();
        $this->owner->Title = 'Gecco';
        $this->owner->Tagline = 'Flexible Membership Software';
    }

}
