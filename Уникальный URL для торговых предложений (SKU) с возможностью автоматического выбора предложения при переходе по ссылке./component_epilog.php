if (!empty($_REQUEST['TARGET_OFFER'])) {
    $offerNum = array_search($_REQUEST['TARGET_OFFER'], $templateData['OFFER_IDS']);
    if (!empty($offerNum))
    {?>
        <script>
            BX.ready(function(){
                if (!!window.)
                {
                   window.<?=$templateData['JS_OBJ']?>.setOffer(<?=$offerNum?>);
                }

                const url = window.location.href.replace(/(.*\/.*\/.*\/.*)\?TARGET_OFFER=(.*)/, '$1$2/');
                const title = document.title;
                window.history.replaceState({path: url}, title, url);

            });
        </script>
             <?
    }
}
