[{if $amountgroupprices}]
<tr>
    <td colspan="4">
        <table style="margin-left: -5px;margin-right: -5px;">
            <tr>
                <td colspan="4"><h3>[{oxmultilang ident="JXADVANCEDSELECTIONLIST_GROUP_PRICES"}]</h3></td>
            </tr>
            [{foreach from=$amountgroupprices item=amountprice}]
            [{if is_array($errorscaleprice) && in_array($amountprice->oxprice2article__oxid->value, $errorscaleprice)}]
            <tr>
                <td colspan="3">
                    <div class="errorbox">[{oxmultilang ident="ARTICLE_STOCK_ERRORSCALEPRICE"}]</div>
                </td>
            </tr>
            [{/if}]
            <tr>
                [{if $oddclass == 2}]
                [{assign var=oddclass value=""}]
                [{else}]
                [{assign var=oddclass value="2"}]
                [{/if}]
                <td class="listitem[{$oddclass}]" nowrap>
                    [{ oxmultilang ident="ARTICLE_STOCK_AMOUNTPRICE_AMOUNTFROM" }]
                    <input type="text" size="6"
                           name="updateval[[{$amountprice->oxprice2article__oxid->value}]][oxprice2article__oxamount]"
                           value="[{$amountprice->oxprice2article__oxamount->value}]"/>
                    [{ oxmultilang ident="ARTICLE_STOCK_AMOUNTPRICE_AMOUNTTO" }]
                    <input type="text" size="6"
                           name="updateval[[{$amountprice->oxprice2article__oxid->value}]][oxprice2article__oxamountto]"
                           value="[{$amountprice->oxprice2article__oxamountto->value}]"/>
                </td>
                <td class="listitem[{$oddclass}]" nowrap>
                    [{ oxmultilang ident="ARTICLE_STOCK_PRICE" }]
                    <select class="edittext"
                            name="updateval[[{$amountprice->oxprice2article__oxid->value}]][pricetype]">
                        <option value="oxprice2article__oxaddabs" [{if $amountprice->oxprice2article__oxaddabs->value}]
                                selected="selected" [{/if}]>[{ oxmultilang ident="ARTICLE_STOCK_AMOUNTPRICE_ABS" }]
                        <option value="oxprice2article__oxaddperc"
                                [{if $amountprice->oxprice2article__oxaddperc->value}] selected="selected" [{/if}]>[{
                            oxmultilang ident="ARTICLE_STOCK_AMOUNTPRICE_DISCOUNT" }]
                    </select>
                    [{if $amountprice->oxprice2article__oxaddabs->value}]
                <input class="edittext" size="6" type="text"
                       name="updateval[[{$amountprice->oxprice2article__oxid->value}]][price]"
                       value="[{$amountprice->oxprice2article__oxaddabs->value}]"/>
                    [{elseif $amountprice->oxprice2article__oxaddperc->value }]
                <input class="edittext" size="6" type="text"
                       name="updateval[[{$amountprice->oxprice2article__oxid->value}]][price]"
                       value="[{$amountprice->oxprice2article__oxaddperc->value}]"/>
                    [{/if}]
                </td>
                <td class="listitem[{$oddclass}]" nowrap>
                    [{oxmultilang ident="JXADVANCEDSELECTIONLIST_PRICE_GROUP"}]
                    <select class="edittext"
                            name="updateval[[{$amountprice->oxprice2article__oxid->value}]][jxpricegroup]">
                        <option value="">-</option>
                        <option value="1"
                                [{if $amountprice->oxprice2article__jxpricegroup->value eq 1}]selected="selected"
                                [{/if}]>A
                        </option>
                        <option value="2"
                                [{if $amountprice->oxprice2article__jxpricegroup->value eq 2}]selected="selected"
                                [{/if}]>B
                        </option>
                        <option value="3"
                                [{if $amountprice->oxprice2article__jxpricegroup->value eq 3}]selected="selected"
                                [{/if}]>C
                        </option>
                    </select>
                </td>
                <td class=listitem[{$oddclass}]>
                    <a href="[{$oViewConf->getSelfLink()}]&cl=article_stock&priceid=[{$amountprice->oxprice2article__oxid->value}]&fnc=deleteprice&oxid=[{$oxid}]"
                       onClick='return confirm("[{oxmultilang ident="GENERAL_YOUWANTTODELETE"}]")' class="delete"></a>
                </td>
            </tr>
            [{/foreach}]
        </table>
    </td>
</tr>
<tr>
    <td colspan=3><br>
        <input type="submit" class="edittext" name="saveAll" value="[{ oxmultilang ident="ARTICLE_STOCK_SAVE" }]" onClick="Javascript:document.myedit.fnc.value='updateprices'"><br><br>
    </td>
</tr>
[{/if}]
<tr>
    <td colspan="2"><br/><h3>[{oxmultilang ident="JXADVANCEDSELECTIONLIST_ADD_NEW_PRICE"}]</h3></td>
</tr>
<tr>
    <td class="edittext">
        [{oxmultilang ident="ARTICLE_STOCK_AMOUNTPRICE_AMOUNTFROM"}]
    </td>
    <td class="edittext">
        <input class="edittext" type="text" name="editval[oxprice2article__oxamount]">
    </td>
    <td class="edittext">
        [{ oxmultilang ident="ARTICLE_STOCK_AMOUNTPRICE_AMOUNTTO" }]
    </td>
    <td class="edittext">
        <input class="edittext" type="text" name="editval[oxprice2article__oxamountto]">
        [{oxinputhelp ident="HELP_ARTICLE_STOCK_AMOUNTPRICE_AMOUNTFROM"}]
    </td>
</tr>
<tr>
    <td class="edittext">
        [{oxmultilang ident="ARTICLE_STOCK_AMOUNTPRICE_PRICE"}] ([{$oActCur->sign}])
    </td>
    <td class="edittext" nowrap colspan=3>
        <select class="edittext" name="editval[pricetype]">
            <option value="oxprice2article__oxaddabs">[{oxmultilang ident="ARTICLE_STOCK_AMOUNTPRICE_ABS"}]
            <option value="oxprice2article__oxaddperc">[{oxmultilang ident="ARTICLE_STOCK_AMOUNTPRICE_DISCOUNT"}]
        </select>
        <input class="edittext" type="text" name="editval[price]">
        [{oxinputhelp ident="HELP_ARTICLE_STOCK_AMOUNTPRICE_PRICE"}]
    </td>
    <td>
    </td>
</tr>
<tr>
    <td class="edittext">
        [{oxmultilang ident="JXADVANCEDSELECTIONLIST_PRICE_GROUP"}]
    </td>
    <td class="edittext" nowrap colspan=3>
        <select class="edittext" name="editval[jxpricegroup]">
            <option value="">-</option>
            <option value="1">A</option>
            <option value="2">B</option>
            <option value="3">C</option>
        </select>
    </td>
    <td>
    </td>
</tr>
