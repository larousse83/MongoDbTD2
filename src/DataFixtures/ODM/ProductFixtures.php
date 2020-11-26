<?php


namespace App\DataFixtures\ODM;


use App\Document\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\MongoDBException;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture implements OrderedFixtureInterface
{
    private $dm;
    public function __construct(DocumentManager $dm)
    {
        $this->dm = $dm;
    }

    /**
    * @inheritDoc
    * @throws MongoDBException
    */
    public function load(ObjectManager $manager)
    {
        for($i=1; $i<=20; $i++){
            $price = 12 + $i%3;
            $p =new Product();
            $p->setName("Produit ".$i);
            $p->setPrice($price." €");
            $this->dm->persist($p);
        }
        $this->dm->flush();
    }

    /**
     * @inheritDoc
     */
    public function getOrder()
    {
        return 1;
    }
}