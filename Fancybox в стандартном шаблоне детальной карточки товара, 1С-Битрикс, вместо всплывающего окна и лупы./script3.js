this.node.imageContainer.appendChild(
    BX.create('A', {
        attrs: {
            'data-entity': 'image',
            'data-fancybox':'images',
            'href': images[i].SRC,
            'data-id': images[i].ID
        },
        props: {
            className: 'product-item-detail-slider-image' + (i == 0 ? ' active' : '')
        },
        children: [img]
    })
);
