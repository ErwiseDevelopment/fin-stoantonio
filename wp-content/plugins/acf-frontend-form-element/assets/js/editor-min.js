function removePopup(e){var s=jQuery(".popup_"+e);$subfields_section=s.find(".elementor-control-"+e+"_fields"),$subfields_section.css("display","none"),$parent_section.after($subfields_section),s.remove()}jQuery("body").on("click",".sub-fields-close",(function(){jQuery(this).removeClass("sub-fields-close").addClass("sub-fields-open"),removePopup(type)})),jQuery("body").on("click",".sub-fields-open",(function(e){e.stopPropagation(),type=jQuery(this).data("type");var s=jQuery('<div class="sub-fields-container popup_'+type+'"><button class="add-sub-field" type="button"><i class="eicon-plus" aria-hidden="true"></i></button></div>');$parent_section=jQuery(this).parents(".elementor-control-fields_selection"),jQuery(this).after(s),$subfields_section=$parent_section.siblings(".elementor-control-"+type+"_fields"),$subfields_section.css("display","block"),s.prepend($subfields_section),jQuery(this).removeClass("sub-fields-open").addClass("sub-fields-close")})),jQuery("body").on("click",".add-sub-field",(function(){var e=$subfields_section.find(".elementor-repeater-fields-wrapper");e.find(".elementor-repeater-fields:last-child").find(".elementor-repeater-tool-duplicate").click();var s=e.find(".elementor-repeater-fields:last-child");s.find('input[data-setting="field_label_on"]').val("true").change();var i=s.find('select[data-setting="field_type"]');i.val("description").change(),s.find('input[data-setting="label"]').val(i.find('option[value="description"]').text()).change().trigger("input")}));