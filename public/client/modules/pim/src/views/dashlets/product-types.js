/*
 * This file is part of AtroPIM.
 *
 * AtroPIM - Open Source PIM application.
 * Copyright (C) 2020 AtroCore UG (haftungsbeschränkt).
 * Website: https://atropim.com
 *
 * AtroPIM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * AtroPIM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with AtroPIM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "AtroPIM" word.
 *
 * This software is not allowed to be used in Russia and Belarus.
 */

Espo.define('pim:views/dashlets/product-types', 'views/dashlets/abstract/base',
    Dep => Dep.extend({

        _template: '<div class="list-container">{{{list}}}</div>',

        collectionUrl: 'Dashlet/ProductTypes',

        actionRefresh: function () {
            this.collection.fetch();
        },

        afterRender: function () {
            this.getCollectionFactory().create('ProductTypesDashlet', function (collection) {
                this.collection = collection;

                collection.url = this.collectionUrl;
                collection.maxSize = this.getOption('displayRecords');
                collection.model = collection.model.extend({
                    defs: {
                        fields: {
                            name: {
                                labelMap: this.translate('type', 'options', 'Product')
                            }
                        }
                    }
                });

                this.listenToOnce(collection, 'sync', function () {
                    this.createView('list', 'views/record/list', {
                        el: this.getSelector() + ' > .list-container',
                        collection: collection,
                        rowActionsDisabled: true,
                        checkboxes: false,
                        listLayout: [
                            {
                                name: 'name',
                                view: 'pim:views/dashlets/fields/varchar-with-url',
                                notSortable: true,
                                width: '40'
                            },
                            {
                                name: 'total',
                                notSortable: true,
                                width: '20'
                            },
                            {
                                name: 'active',
                                notSortable: true,
                                width: '20'
                            },
                            {
                                name: 'notActive',
                                notSortable: true,
                                width: '20'
                            }
                        ]
                    }, view => {
                        view.listenTo(view, 'after:render', () => {
                            let total = 0;
                            let active = 0;
                            let notActive = 0;
                            collection.each(model => {
                                total += model.get('total');
                                active += model.get('active');
                                notActive += model.get('notActive');
                            });
                            view.$el.find('table.table tbody').append(
                                `<tr data-id="total" class="list-row">
                                    <td class="cell" data-name="name" width="40%"><b>${this.translate('Total', 'labels', 'Global')}</b></td>
                                    <td class="cell" data-name="total" width="20%"><b>${total}</b></td>
                                    <td class="cell" data-name="active" width="20%"><b>${active}</b></td>
                                    <td class="cell" data-name="notActive" width="20%"><b>${notActive}</b></td>
                                </tr>'`
                            );
                        });

                        view.render();
                    });
                }.bind(this));
                collection.fetch();

            }, this);
        },

    })
);

