!function(e){var t=e('<div class="dynamic-values"></div>');function a(t){$list=e("#acf-field-group-fields").find(".acf-field-list");var a=e("#acf-field-group-fields").find(".acf-field-object[data-step]"),l={id:"form_step"};if(0==a.length){var d=e("#acf-field-group-fields").find(".acf-field-object[data-type=submit_button]");e.each(d,(function(t,a){acf.getFieldObject(e(a)).delete()})),l.step_num=1,i(l,!1,!0),l.step_num=2,t=!0}else l.step_num=a.length+1;t&&i(l),n($list)}function i(t,a,i){if(i=i||!1,"form_step"==t.id)var n=e("#tmpl-acf-step").html();else n=e("#tmpl-acf-field").html();var l=e(n),d=l.data("id"),c=acf.uniqid("field_"),o=acf.duplicate({target:l,search:d,replace:c,append:function(e,t){i?$list.prepend(t):$list.append(t)}});o.find(".li-field-type").text(t.text);var f=acf.getFieldObject(o),s="text";t&&(s=t.id,f.prop("label",t.text),f.prop("name",t.id)),f.changeType(s),o.find(".field-type").val(s),f.prop("key",c),f.prop("ID",0),o.attr("data-key",c),o.attr("data-id",c),t.step_num&&(o.attr("data-step",t.step_num),t.step_num>1&&o.find(".li-field-order > span").addClass("acf-sortable-handle")),1==a&&f.open(),f.updateParent(),acf.doAction("add_field_object",f),acf.doAction("append_field_object",f)}function n(e){var t=acf.getFieldObjects({list:e});t.length?(e.removeClass("-empty"),t.map((function(e,t){e.prop("menu_order",t)}))):e.addClass("-empty")}e.each(acffdv,(function(a,i){var n=e('<div class="group-options"><span class="group-name">'+i.label+"</span></div>");e(n).appendTo(t);var l=e('<select class="dynamic-value-select"><option value="" selected><span class="field-name">-- Select One --</span></option></select>');e.each(i.options,(function(t,a){var i=e('<option class="field-option '+t+'-option" value="['+t+']"><span class="field-name">'+a+"</span></option>");e(i).appendTo(l)})),e(l).appendTo(n)})),e(document).ready((function(){e(document).on("click",".post-type-admin_form .page-title-action",(function(t){t.preventDefault(),e(".modal-button.render-form").trigger("click")})),e(".select2").select2({closeOnSelect:!1}),e(document).find(".acf-field[data-form-tab]:not([data-form-tab=fields])").addClass("frontend-admin-hidden");var a;e(document).on("click",(function(t){""!=t.target.id&&""!=e(t.target).parents(".acf-field").id&&e(".dynamic-values").remove()})),e(document).on("change",".dynamic-values select",(function(t){t.stopPropagation();var i=e(this),n=i.val(),l=i.parents(".acf-field").first().find(".wp-editor-area");l.length>0?(tinymce.editors[l.attr("id")].editorCommands.execCommand("mceInsertContent",!1,n),e(".dynamic-values").remove(),a=!1):function(e,t){var a=e;if(a){var i=a.scrollTop,n=0,l=a.selectionStart||"0"==a.selectionStart?"ff":!!document.selection&&"ie";if("ie"==l){a.focus();var d=document.selection.createRange();d.moveStart("character",-a.value.length),n=d.text.length}else"ff"==l&&(n=a.selectionStart);var c=a.value.substring(0,n),o=a.value.substring(n,a.value.length);if(a.value=c+t+o,n+=t.length,"ie"==l){a.focus();var f=document.selection.createRange();f.moveStart("character",-a.value.length),f.moveStart("character",n),f.moveEnd("character",0),f.select()}else"ff"==l&&(a.selectionStart=n,a.selectionEnd=n,a.focus());a.scrollTop=i}}(i.parents(".dynamic-values").siblings("input[type=text]").get(0),n);i.removeProp("selected").closest("select").val("")})),e(document).on("input click",".acf-field[data-dynamic_values] input",(function(a){a.stopPropagation();var i=e(this);e(".dynamic-values").remove(),t.find(".all_fields-option").addClass("acf-hidden"),i.after(t)})),e(document).on("click",".acf-field[data-dynamic_values] .dynamic-value-options",(function(i){i.stopPropagation();var n=e(this);e(".dynamic-values").remove(),1!=a?(a=!0,t.find(".all_fields-option").removeClass("acf-hidden"),n.after(t)):a=!1})),e(document).on("change",".field-type",(function(t){var a=e(this).parents(".acf-field-settings"),i=a.find("input.field-label");""==i.val()&&i.val(e(this).find('option[value="'+e(this).val()+'"]').text()).trigger("blur");var n=a.find("input.field-name");""==n.val()&&n.val(e(this).val())})),e(document).on("change",".acf-field-admin-form-tabs input[type=radio]",(function(t){e(document).find(".acf-field[data-form-tab]").addClass("frontend-admin-hidden"),e(document).find(".acf-field[data-form-tab="+e(this).val()+"]").removeClass("frontend-admin-hidden")}))})),e(document).on("mouseenter",".acf-field-list",(function(t){t.preventDefault(),t.stopPropagation(),$el=e(this),$el.hasClass("fea-sortable")||($el.addClass("fea-sortable"),$el.sortable({handle:".acf-sortable-handle",connectWith:".acf-field-list",items:".acf-field-object:not(.acf-field-object-form-step[data-step=1])",start:function(e,t){var a=acf.getFieldObject(t.item);t.placeholder.height(t.item.height()),acf.doAction("sortstart_field_object",a,$el)},update:function(e,t){var a=acf.getFieldObject(t.item);acf.doAction("sortstop_field_object",a,$el)}}))})),e(document).on("click",".add-fields",(function(t){$list=e("#acf-field-group-fields").find(".acf-field-list"),i(!1,!0),n($list)})),e(document).on("click",".add-step",(function(){var t=acf.getField(e(".acf-field-multi"));t.val()?a(!0):t.$("#form-multi").trigger("click")})),e(document).on("change","#form-multi",(function(){var t=acf.getFieldObject(e(this).closest(".acf-field"));if(0==t.val()){var i=e("#acf-field-group-fields").find(".acf-field-list"),n=acf.getFieldObjects({list:i});n.length&&e.each(n,(function(e,t){t.$el.attr("data-step")&&t.delete()}))}else a()})),e(document).on("click",".copy-shortcode",(function(t){var a="["+e(this).data("prefix")+'="'+e(this).data("form")+'"]';navigator.clipboard.writeText(a);var i=e(this).html();e(this).addClass("copied-text").html(i.replace(acf.__("Copy Code"),acf.__("Code Copied"))),setTimeout((function(){e("body").find(".copied-text").removeClass("copied-text").html(i.replace(acf.__("Code Copied"),acf.__("Copy Code")))}),1e3)})),acf.addAction("delete_field/type=form_step",(function(t){if(1==t.attr("data-step")){var a=e("#acf-field-group-fields").find(".acf-field-list"),i=e(".acf-field-object[data-step]");if(i.length>1){var n=e(i[1]);n.attr("data-step",1),n.find(".li-field-order > span").removeClass("acf-sortable-handle"),a.prepend(n)}else{var l=acf.getField(e(".acf-field-multi"));l.val()&&l.$("#form-multi").trigger("click")}}}))}(jQuery);