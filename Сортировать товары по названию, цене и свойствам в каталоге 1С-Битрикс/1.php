<div class="update_ajax_sortline">
    <?
    if (count($_COOKIE['sortten']) > '0') {
        $sort = $_COOKIE['sortten'];
    } else {
        $sort = $arParams["ELEMENT_SORT_FIELD"];
    }
    $intSectionID = $APPLICATION->IncludeComponent(
        "bitrix:catalog.section",
        "section",
        array(
            //... сокращен catalog.section
            "ELEMENT_SORT_FIELD" => $sort,
            "ELEMENT_SORT_ORDER" => ($_COOKIE['sortten'] === 'show_counter') ? 'desc' : 'asc',
            //... сокращен catalog.section
        ),
        $component
    );
    ?>
    </div>
