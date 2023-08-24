this.node.imageContainer.appendChild(
    BX.create('DIV', {
        attrs: {
            'data-entity': 'image',
            'data-id': images[i].ID
        },
        props: {
            className: 'product-item-detail-slider-image' + (i == 0 ? ' active' : '')
        },
        children: [img]
    })
);
