<?php
namespace AppBundle\Entity;

use Sylius\Component\Core\Model\Taxon as SyliusTaxon;

class Taxon extends SyliusTaxon
{
    /**
     * {@inheritdoc}
     */
    public static function getTranslationClass()
    {
        return 'AppBundle\Entity\TaxonTranslation';
    }
}