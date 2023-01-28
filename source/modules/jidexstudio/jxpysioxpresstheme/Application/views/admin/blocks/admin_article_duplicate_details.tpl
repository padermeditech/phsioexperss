[{$smarty.block.parent}]
<tr>
<td class="edittext">
Duplicate [{oxmultilang ident="ARTICLE_MAIN_TITLE"}] #1 &nbsp;
</td>
<td class="edittext">
<input type="text" class="editinput" size="32" maxlength="[{$edit->oxarticles__duplicatetitle1->fldmax_length}]" id="oLockTarget" name="editval[oxarticles__duplicatetitle1]" value="[{$edit->oxarticles__duplicatetitle1->value}]">
[{oxinputhelp ident="HELP_ARTICLE_MAIN_TITLE"}]
</td>
</tr>
<tr>
<td class="edittext">
Duplicate [{oxmultilang ident="ARTICLE_MAIN_TITLE"}] #2 &nbsp;
</td>
<td class="edittext">
<input type="text" class="editinput" size="32" maxlength="[{$edit->oxarticles__duplicatetitle2->fldmax_length}]" id="oLockTarget" name="editval[oxarticles__duplicatetitle2]" value="[{$edit->oxarticles__duplicatetitle2->value}]">
[{oxinputhelp ident="HELP_ARTICLE_MAIN_TITLE"}]
</td>
</tr>