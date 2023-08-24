use Bitrix\Main\Page\Asset;
CJSCore::Init(array("jquery3"));
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/fancybox/jquery.fancybox.css');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/fancybox/jquery.fancybox.js');
