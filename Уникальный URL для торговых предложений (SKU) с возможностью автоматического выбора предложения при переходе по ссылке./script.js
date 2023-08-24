selectOfferProp: function () {
    var i = 0,
        strTreeValue = '',
        arTreeItem = [],
        rowItems = null,
        target = BX.proxy_context,
        smallCardItem;

    if (target && target.hasAttribute('data-treevalue')) {
        if (BX.hasClass(target, 'selected'))
            return;

        if (typeof document.activeElement === 'object') {
            document.activeElement.blur();
        }
        
        // start CUSTOM
        var skuId = this.offers[this.offerNum]['ID'];
        // end CUSTOM
        
        strTreeValue = target.getAttribute('data-treevalue');
        arTreeItem = strTreeValue.split('_');
        this.searchOfferPropIndex(arTreeItem[0], arTreeItem[1]);

        rowItems = BX.findChildren(target.parentNode, {
            tagName: 'li'
        }, false);

        if (rowItems && rowItems.length) {
            for (i = 0; i < rowItems.length; i++) {
                BX.removeClass(rowItems[i], 'selected');
            }

            // start CUSTOM
            var currentUrl = window.location.href;
            var newUrl = currentUrl.replace(skuId + '/', '');
            window.history.replaceState(null, null, newUrl);
            // end CUSTOM

        }

        BX.addClass(target, 'selected');

        // start CUSTOM
        var skuId = this.offers[this.offerNum]['ID'];
        var newUrl = window.location.pathname + skuId + '/';
        window.history.pushState('', '', newUrl);
        // end CUSTOM

        if (this.smallCardNodes.panel) {
            smallCardItem = this.smallCardNodes.panel.querySelector('[data-treevalue="' + strTreeValue + '"]');
            if (smallCardItem) {
                rowItems = this.smallCardNodes.panel.querySelectorAll('[data-sku-line="' + smallCardItem.getAttribute('data-sku-line') + '"]');
                for (i = 0; i < rowItems.length; i++) {
                    rowItems[i].style.display = 'none';
                }

                smallCardItem.style.display = '';
            }
        }

        if (
            this.isFacebookConversionCustomizeProductEventEnabled &&
            BX.Type.isArrayFilled(this.offers) &&
            BX.Type.isObject(this.offers[this.offerNum])
        ) {
            BX.ajax.runAction(
                'sale.facebookconversion.customizeProduct', {
                    data: {
                        offerId: this.offers[this.offerNum]['ID']
                    }
                }
            );
        }
    }
},
