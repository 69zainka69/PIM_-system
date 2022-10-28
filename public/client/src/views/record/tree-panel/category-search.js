/*
 * This file is part of EspoCRM and/or AtroCore.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2019 Yuri Kuznetsov, Taras Machyshyn, Oleksiy Avramenko
 * Website: http://www.espocrm.com
 *
 * AtroCore is EspoCRM-based Open Source application.
 * Copyright (C) 2020 AtroCore UG (haftungsbeschränkt).
 *
 * AtroCore as well as EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * AtroCore as well as EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word
 * and "AtroCore" word.
 *
 * This software is not allowed to be used in Russia and Belarus.
 */

Espo.define('views/record/tree-panel/category-search', 'view',
    Dep => Dep.extend({

        template: 'record/tree-panel/category-search',

        events: {
            'click .reset-search-in-tree-button': function (e) {
                e.preventDefault();
                this.resetSearchInTree();
            },
            'click .search-in-tree-button': function (e) {
                e.preventDefault();
                this.searchInTree();
            }
        },

        data() {
            return {
                scope: this.scope
            }
        },

        setup() {
            this.scope = this.options.scope || this.scope;

            this.listenTo(this, 'find-in-tree-panel', value => {
                const $reset = this.$el.find('.reset-search-in-tree-button');
                if (value && value !== '') {
                    $reset.show();
                } else {
                    $reset.hide();
                }
            });

            this.listenTo(this.options.treePanel, 'tree-reset', () => {
                this.resetSearchInTree();
            });
        },

        searchInTree() {
            this.trigger('find-in-tree-panel', this.$el.find('input').val());
        },

        resetSearchInTree() {
            this.$el.find('input').val('');
            this.trigger('find-in-tree-panel', '');
        },

        afterRender() {
            if (this.el) {
                this.$el.find('input').on('keyup', e => {
                    if (e.which === 13) {
                        this.searchInTree();
                    }
                    if (e.which === 27) {
                        this.resetSearchInTree();
                    }
                });
            }
        },

    })
);