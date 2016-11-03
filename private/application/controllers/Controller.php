<?php
class Controller {
    private $viewTemplate;

    public function __construct() {
        $this->viewTemplate = new TemplateView();
        if(isset($_GET['page'])) {
            $action = $_GET['page'];
        } else {
            $action = Constants::PAGE_HOME;
        }
        
        $this->doAction($action);
    }

    private function doAction($action){
        switch ($action) {
            case Constants::PAGE_HOME:
                $viewHomePage = new HomeView();
                $this->viewTemplate->setContentHtmlCode($viewHomePage->render());
            break;
            case Constants::PAGE_WATCH:
                $viewWatchPage = new WatchView();
                $this->viewTemplate->setContentHtmlCode($viewWatchPage->render());
            break;
            case Constants::PAGE_ABOUT_US:
                $viewPageAboutUs = new AboutUsView();
                $this->viewTemplate->setContentHtmlCode($viewPageAboutUs->render());
            break;
            case Constants::PAGE_CONTACT:
                $viewContactPage = new ContactView();
                $this->viewTemplate->setContentHtmlCode($viewContactPage->render());
            break;
            case Constants::PAGE_FUTURE:
                $viewFuturePage = new FutureView();
                $this->viewTemplate->setContentHtmlCode($viewFuturePage->render());
            break;
        
            case Constants::PAGE_QI_WATCH:
                $viewQiWatch = new QiWatchView();
                $this->viewTemplate->setContentHtmlCode($viewQiWatch->render());
            break;
            case Constants::PAGE_PI_WATCH:
                $viewPiWatch = new PiWatchView();
                $this->viewTemplate->setContentHtmlCode($viewPiWatch->render());
            break;
            case Constants::PAGE_QUANTUM_OS:
                $viewQuantumOS = new QuantumOSView();
                $this->viewTemplate->setContentHtmlCode($viewQuantumOS->render());
            break;
            case Constants::PAGE_EXTRA:
                $viewExtra = new ExtraView();
                $this->viewTemplate->setContentHtmlCode($viewExtra->render());
            break;
            case Constants::PAGE_DESIGN:
                $viewDesign = new DesignView();
                $this->viewTemplate->setContentHtmlCode($viewDesign->render());
            break;
            case Constants::PAGE_SPECS:
                $viewSpecs = new SpecsView();
                $this->viewTemplate->setContentHtmlCode($viewSpecs->render());
            break;
        
        }
        echo $this->viewTemplate->render();
    }
}