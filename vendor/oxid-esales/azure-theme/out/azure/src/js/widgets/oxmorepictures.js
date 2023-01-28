/**
 * This file is part of OXID eShop Azure Theme.
 *
 * OXID eShop Azure Theme is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eShop Azure Theme is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eShop Azure Theme.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2017
 * @version   OXID eShop Azure Theme
 */
( function( $ ) {

    oxMorePictures = {

        options: {
            iDefaultIndex  : -1
        },

        _create: function() {

            var self    = this,
                options = self.options,
                el      = self.element;

            $("li a", el).click(function() {

                $("li a", el).removeClass("selected");
                $(this).addClass("selected");

                return false;
            });
        },

        _init: function() {
            var self    = this,
                options = self.options,
                el      = self.element;

            // checking which item should be selected
            if (options.iDefaultIndex != -1 && $("li a.selected", el).parent().index() != options.iDefaultIndex) {
                $("li a:eq("+ options.iDefaultIndex +")", el).trigger("click");
            }
        }
    };

    $.widget( "ui.oxMorePictures", oxMorePictures );

} )( jQuery );
