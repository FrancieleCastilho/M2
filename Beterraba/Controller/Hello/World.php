<?php

    namespace Academia\Beterraba\Controller\Hello;

    use Magento\Framework\View\Result\PageFactory;
    use Magento\Framework\App\Action\Context;

    class World extends \Magento\Framework\App\Action\Action
    {
        protected $pageFactory;
        public function __construct(Context $context, PageFactory $pageFactory)
        {
            $this->pageFactory = $pageFactory;
            return parent::__construct($context);
        }
        public function execute()
        {
            $resultPage = $this->pageFactory->create();
            return $resultPage;
        }
    }