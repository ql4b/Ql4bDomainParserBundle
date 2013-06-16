<?php
namespace Ql4b\Bundle\DomainParserBundle\Service;

use Pdp\PublicSuffixListManager as PdpPublicSuffixListManager;
use Pdp\Parser as PdpParser;

class Parser extends PdpParser
{
    
    public function __construct()
    {
        $pslManager = new PdpPublicSuffixListManager();
        parent::__construct($pslManager->getList());
        
    }
}