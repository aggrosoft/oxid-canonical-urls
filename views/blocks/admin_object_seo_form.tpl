[{$smarty.block.parent}]
[{if $blAllowCustomCanonicalUrl}]
<tr>
    <td class="edittext">
        [{oxmultilang ident="CUSTOM_CANONICAL_URL"}]
    </td>
    <td class="edittext">
        <input type="text" class="editinput" style="width: 100%;" name="agcanonicalurl" value="[{$oView->getCustomCanonicalUrl()}]" [{$readonly}]>
        [{oxinputhelp ident="HELP_CUSTOM_CANONICAL_URL"}]
    </td>
</tr>
[{/if}]