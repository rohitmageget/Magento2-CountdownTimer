<?php

namespace Mageget\Countdown\Block\Salesrule;

class Rule extends \Magento\Framework\View\Element\Template
{

  protected $ruleCollectionFactory;  


  public function __construct(

        \Magento\SalesRule\Model\ResourceModel\Rule\CollectionFactory $ruleCollectionFactory

    ) {


        $this->ruleCollectionFactory = $ruleCollectionFactory;
        // $data = $this->rule->create()->load('1');
        // var_dump($data);
        // die("rohit");

    }
    public function getAllActiveCartRule()
    {
        $cartActiveRule = $this->ruleCollectionFactory->create()->addFieldToFilter('is_active', 1);

        return $cartActiveRule;
    }
 }