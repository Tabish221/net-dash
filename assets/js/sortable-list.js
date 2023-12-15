(function($){$.fn.sortableLists=function(options){var jQBody=$("body").css("position","relative"),defaults={currElClass:"",placeholderClass:"",placeholderCss:{position:"relative",padding:0},hintClass:"",hintCss:{display:"none",position:"relative",padding:0},hintWrapperClass:"",hintWrapperCss:{},baseClass:"",baseCss:{position:"absolute",top:0-parseInt(jQBody.css("margin-top")),left:0-parseInt(jQBody.css("margin-left")),margin:0,padding:0,"z-index":2500},opener:{active:false,open:"",close:"",openerCss:{float:"left",display:"inline-block","background-position":"center center","background-repeat":"no-repeat"},openerClass:""},maxLevels:false,listSelector:"ul",listsClass:"",listsCss:{},insertZone:50,insertZonePlus:false,scroll:20,ignoreClass:"",isAllowed:function(cEl,hint,target){return true},onDragStart:function(e,cEl){return true},onChange:function(cEl){return true},complete:function(cEl){return true}},setting=$.extend(true,{},defaults,options),base=$("<"+setting.listSelector+" />").prependTo(jQBody).attr("id","s-l-base").css(setting.baseCss).addClass(setting.listsClass+" "+setting.baseClass),placeholder=$("<li />").attr("id","s-l-placeholder").css(setting.placeholderCss).addClass(setting.placeholderClass),hint=$("<li />").attr("id","s-l-hint").css(setting.hintCss).addClass(setting.hintClass),hintWrapper=$("<"+setting.listSelector+" />").attr("id","s-l-hint-wrapper").addClass(setting.listsClass+" "+setting.hintWrapperClass).css(setting.listsCss).css(setting.hintWrapperCss),opener=$("<span />").addClass("s-l-opener "+setting.opener.openerClass).css(setting.opener.openerCss).on("mousedown",function(e){var li=$(this).closest("li");if(li.hasClass("s-l-closed")){open(li)}else{close(li)}return false});if(setting.opener.as=="class"){opener.addClass(setting.opener.close)}else if(setting.opener.as=="html"){opener.html(setting.opener.close)}else{console.error("jQuerySortableLists opener as background image has been removed with release 2.0.0. Use html instead please.")}var state={isDragged:false,isRelEFP:null,oEl:null,rootEl:{el:$(this),offset:null,rootElClass:$(this).attr("class")},cEl:null,placeholderParentLi:null,upScroll:false,downScroll:false,pX:0,pY:0,cX:0,cY:0,isAllowed:true,e:{pageX:0,pageY:0,clientX:0,clientY:0},doc:$(document),win:$(window)};if(setting.opener.active){if(!setting.opener.open)throw"Opener.open value is not defined. It should be valid url, html or css class.";if(!setting.opener.close)throw"Opener.close value is not defined. It should be valid url, html or css class.";$(this).find("li").each(function(){var li=$(this);if(li.children(setting.listSelector).length){opener.clone(true).prependTo(li.children("div").first());if(!li.hasClass("s-l-open")){close(li)}else{open(li)}}})}if(setting.maxLevels!==false){if(isNaN(setting.maxLevels))throw"JQuery-sortable-lists maxLevels values is not a number";$(this).find("li").each(function(){var insideLevs=getInsideLevels($(this));var upperLevs=getUpperLevels($(this));setInsideLevels($(this),insideLevs);setUpperLevels($(this),upperLevs)})}return this.on("mousedown",function(e){var target=$(e.target);if(state.isDragged!==false||setting.ignoreClass&&target.closest("."+setting.ignoreClass).length)return;e.preventDefault();var el=target.closest("li"),rEl=$(this);if(el[0]){setting.onDragStart(e,el);startDrag(e,el,rEl)}});function startDrag(e,el,rEl){state.isDragged=true;var elMT=parseInt(el.css("margin-top")),elMB=parseInt(el.css("margin-bottom")),elML=parseInt(el.css("margin-left")),elMR=parseInt(el.css("margin-right")),elXY=el.offset(),elIH=el.innerHeight();state.rootEl={el:rEl,offset:rEl.offset(),rootElClass:rEl.attr("class")};state.cEl={el:el,mT:elMT,mL:elML,mB:elMB,mR:elMR,offset:elXY};state.cEl.xyOffsetDiff={X:e.pageX-state.cEl.offset.left,Y:e.pageY-state.cEl.offset.top};state.cEl.el.addClass("s-l-current "+setting.currElClass);el.before(placeholder);var placeholderNode=state.placeholderNode=$("#s-l-placeholder");el.css({width:el.width(),position:"absolute",top:elXY.top-elMT,left:elXY.left-elML}).prependTo(base);placeholderNode.css({display:"block",height:elIH});hint.css("height",elIH);state.doc.on("mousemove",dragging).on("mouseup",endDrag)}function dragging(e){if(state.isDragged){var cEl=state.cEl,doc=state.doc,win=state.win;if(!e.pageX){setEventPos(e)}if(doc.scrollTop()>state.rootEl.offset.top-10&&e.clientY<50){if(!state.upScroll){setScrollUp(e)}else{e.pageY=e.pageY-setting.scroll;$("html, body").each(function(i){$(this).scrollTop($(this).scrollTop()-setting.scroll)});setCursorPos(e)}}else if(doc.scrollTop()+win.height()<state.rootEl.offset.top+state.rootEl.el.outerHeight(false)+10&&win.height()-e.clientY<50){if(!state.downScroll){setScrollDown(e)}else{e.pageY=e.pageY+setting.scroll;$("html, body").each(function(i){$(this).scrollTop($(this).scrollTop()+setting.scroll)});setCursorPos(e)}}else{scrollStop(state)}state.oElOld=state.oEl;cEl.el[0].style.visibility="hidden";state.oEl=oEl=elFromPoint(e.pageX,e.pageY);cEl.el[0].style.visibility="visible";showHint(e,state);setCElPos(e,state)}}function endDrag(e){var cEl=state.cEl,hintNode=$("#s-l-hint",state.rootEl.el),hintStyle=hint[0].style,targetEl=null,isHintTarget=false,hintWrapperNode=$("#s-l-hint-wrapper");if(hintStyle.display=="block"&&hintNode.length&&state.isAllowed){targetEl=hintNode;isHintTarget=true}else{targetEl=state.placeholderNode;isHintTarget=false}offset=targetEl.offset();cEl.el.animate({left:offset.left-state.cEl.mL,top:offset.top-state.cEl.mT},250,function(){tidyCurrEl(cEl);targetEl.after(cEl.el[0]);targetEl[0].style.display="none";hintStyle.display="none";hintNode.remove();hintWrapperNode.removeAttr("id").removeClass(setting.hintWrapperClass);if(hintWrapperNode.length){hintWrapperNode.prev("div").append(opener.clone(true))}if(isHintTarget){state.placeholderNode.slideUp(150,function(){state.placeholderParentLi=!state.placeholderNode.parent().is(state.rootEl.el)?state.placeholderNode.parent().closest("li"):null;state.placeholderNode.remove();tidyEmptyLists();setting.onChange(cEl.el);setting.complete(cEl.el);state.isDragged=false;if(setting.maxLevels!==false){recountLevels(cEl.el);if(state.placeholderParentLi)recountLevels(state.placeholderParentLi)}})}else{state.placeholderNode.remove();tidyEmptyLists();setting.complete(cEl.el);state.isDragged=false}});scrollStop(state);state.doc.unbind("mousemove",dragging).unbind("mouseup",endDrag)}function setScrollUp(e){if(state.upScroll)return;state.upScroll=setInterval(function(){state.doc.trigger("mousemove")},50)}function setScrollDown(e){if(state.downScroll)return;state.downScroll=setInterval(function(){state.doc.trigger("mousemove")},50)}function setCursorPos(e){state.pY=e.pageY;state.pX=e.pageX;state.cY=e.clientY;state.cX=e.clientX}function setEventPos(e){e.pageY=state.pY;e.pageX=state.pX;e.clientY=state.cY;e.clientX=state.cX}function scrollStop(state){clearInterval(state.upScroll);clearInterval(state.downScroll);state.upScroll=state.downScroll=false}function setCElPos(e,state){var cEl=state.cEl;cEl.el.css({top:e.pageY-cEl.xyOffsetDiff.Y-cEl.mT,left:e.pageX-cEl.xyOffsetDiff.X-cEl.mL})}function elFromPoint(x,y){if(!document.elementFromPoint)return null;var isRelEFP=state.isRelEFP;if(isRelEFP===null){var s,res;if((s=state.doc.scrollTop())>0){isRelEFP=(res=document.elementFromPoint(0,s+$(window).height()-1))==null||res.tagName.toUpperCase()=="HTML"}if((s=state.doc.scrollLeft())>0){isRelEFP=(res=document.elementFromPoint(s+$(window).width()-1,0))==null||res.tagName.toUpperCase()=="HTML"}}if(isRelEFP){x-=state.doc.scrollLeft();y-=state.doc.scrollTop()}var el=$(document.elementFromPoint(x,y));if(!state.rootEl.el.find(el).length){return null}else if(el.is("#s-l-placeholder")||el.is("#s-l-hint")){return null}else if(!el.is("li")){el=el.closest("li");return el[0]?el:null}else if(el.is("li")){return el}}function showHint(e,state){var oEl=state.oEl;if(!oEl||!state.oElOld)return;var oElH=oEl.outerHeight(false),relY=e.pageY-oEl.offset().top;if(setting.insertZonePlus){if(14>relY){showOnTopPlus(e,oEl,7>relY)}else if(oElH-14<relY){showOnBottomPlus(e,oEl,oElH-7<relY)}}else{if(5>relY){showOnTop(e,oEl)}else if(oElH-5<relY){showOnBottom(e,oEl)}}}function showOnTop(e,oEl){if($("#s-l-hint-wrapper",state.rootEl.el).length){hint.unwrap()}if(e.pageX-oEl.offset().left<setting.insertZone){if(oEl.prev("#s-l-placeholder").length||setting.maxLevels!==false&&!checkMaxLevels(false)){hint.css("display","none");return}oEl.before(hint)}else{var children=oEl.children(),list=oEl.children(setting.listSelector).first();if(list.children().first().is("#s-l-placeholder")||setting.maxLevels!==false&&!checkMaxLevels(true)){hint.css("display","none");return}if(!list.length){children.first().after(hint);hint.wrap(hintWrapper)}else{list.prepend(hint)}if(state.oEl){open(oEl)}}hint.css("display","block");state.isAllowed=setting.isAllowed(state.cEl.el,hint,hint.parents("li").first())}function showOnTopPlus(e,oEl,outside){if($("#s-l-hint-wrapper",state.rootEl.el).length){hint.unwrap()}if(!outside&&e.pageX-oEl.offset().left>setting.insertZone){var children=oEl.children(),list=oEl.children(setting.listSelector).first();if(list.children().first().is("#s-l-placeholder")||setting.maxLevels!==false&&!checkMaxLevels(true)){hint.css("display","none");return}if(!list.length){children.first().after(hint);hint.wrap(hintWrapper)}else{list.prepend(hint)}if(state.oEl){open(oEl)}}else{if(oEl.prev("#s-l-placeholder").length||setting.maxLevels!==false&&!checkMaxLevels(false)){hint.css("display","none");return}oEl.before(hint)}hint.css("display","block");state.isAllowed=setting.isAllowed(state.cEl.el,hint,hint.parents("li").first())}function showOnBottom(e,oEl){if($("#s-l-hint-wrapper",state.rootEl.el).length){hint.unwrap()}if(e.pageX-oEl.offset().left<setting.insertZone){if(oEl.next("#s-l-placeholder").length||setting.maxLevels!==false&&!checkMaxLevels(false)){hint.css("display","none");return}oEl.after(hint)}else{var children=oEl.children(),list=oEl.children(setting.listSelector).last();if(list.children().last().is("#s-l-placeholder")||setting.maxLevels!==false&&!checkMaxLevels(true)){hint.css("display","none");return}if(list.length){children.last().append(hint)}else{oEl.append(hint);hint.wrap(hintWrapper)}if(state.oEl){open(oEl)}}hint.css("display","block");state.isAllowed=setting.isAllowed(state.cEl.el,hint,hint.parents("li").first())}function showOnBottomPlus(e,oEl,outside){if($("#s-l-hint-wrapper",state.rootEl.el).length){hint.unwrap()}if(!outside&&e.pageX-oEl.offset().left>setting.insertZone){var children=oEl.children(),list=oEl.children(setting.listSelector).last();if(list.children().last().is("#s-l-placeholder")||setting.maxLevels!==false&&!checkMaxLevels(true)){hint.css("display","none");return}if(list.length){children.last().append(hint)}else{oEl.append(hint);hint.wrap(hintWrapper)}if(state.oEl){open(oEl)}}else{if(oEl.next("#s-l-placeholder").length||setting.maxLevels!==false&&!checkMaxLevels(false)){hint.css("display","none");return}oEl.after(hint)}hint.css("display","block");state.isAllowed=setting.isAllowed(state.cEl.el,hint,hint.parents("li").first())}function open(li){li.removeClass("s-l-closed").addClass("s-l-open");li.children(setting.listSelector).css("display","block");var opener=li.children("div").children(".s-l-opener").first();if(setting.opener.as=="html"){opener.html(setting.opener.close)}else if(setting.opener.as=="class"){opener.addClass(setting.opener.close).removeClass(setting.opener.open)}}function close(li){li.removeClass("s-l-open").addClass("s-l-closed");li.children(setting.listSelector).css("display","none");var opener=li.children("div").children(".s-l-opener").first();if(setting.opener.as=="html"){opener.html(setting.opener.open)}else if(setting.opener.as=="class"){opener.addClass(setting.opener.open).removeClass(setting.opener.close)}}function getInsideLevels(li){var levs=0;var list=li.children(setting.listSelector);if(list.length){levs++;var maxNestedLevs=0;var currLiLevs=0;list.find("li").each(function(i){currLiLevs=getInsideLevels($(this));if(maxNestedLevs<currLiLevs)maxNestedLevs=currLiLevs});if(maxNestedLevs)levs=levs+maxNestedLevs}return levs}function setInsideLevels(li,levs){li.data("inside-levels",levs)}function getUpperLevels(li){var levs=0;var rootEl=state.rootEl.el;var parentList=li.closest(setting.listSelector);while(!parentList.is(rootEl)){levs++;parentList=parentList.parent().closest(setting.listSelector)}return levs}function setUpperLevels(li,levs){li.data("upper-levels",levs)}function checkMaxLevels(inside){var insideLevs=state.cEl.el.data("inside-levels");var upperLevs=state.oEl.data("upper-levels");return setting.maxLevels>upperLevs+insideLevs+(inside?1:0)}function recountLevels(li){var rootEl=state.rootEl.el;var parentList=li.parent(setting.listSelector);setInsideLevels(li,getInsideLevels(li));setUpperLevels(li,getUpperLevels(li));var i=0;li.find("li").each(function(){var li=$(this);setInsideLevels(li,getInsideLevels(li));setUpperLevels(li,getUpperLevels(li))});while(!parentList.is(rootEl)&&i<50){var li=parentList.parent("li");setInsideLevels(li,getInsideLevels(li));parentList=li.parent(setting.listSelector);i++}}function tidyCurrEl(cEl){var cElStyle=cEl.el[0].style;cEl.el.removeClass(setting.currElClass+" s-l-current");cElStyle.top="0";cElStyle.left="0";cElStyle.position="relative";cElStyle.width="auto"}function tidyEmptyLists(){$(setting.listSelector,state.rootEl.el).each(function(i){if(!$(this).children().length){$(this).prev("div").children(".s-l-opener").first().remove();$(this).remove()}})}};$.fn.sortableListsToArray=function(arr,parentId){arr=arr||[];var order=0;this.children("li").each(function(){var li=$(this),listItem={},id=li.attr("id");if(!id){console.log(li);throw"Previous item in console.log has no id. It is necessary to create the array."}listItem.id=id;listItem.parentId=parentId;listItem.value=li.data("value");listItem.order=order;arr.push(listItem);li.children("ul,ol").sortableListsToArray(arr,id);order++});return arr};$.fn.sortableListsToHierarchy=function(){var arr=[],order=0;$(this).children("li").each(function(){var li=$(this),listItem={},id=li.attr("id");if(!id){console.log(li);throw"Previous item in console.log has no id. It is necessary to create the array."}listItem.id=id;listItem.value=li.data("value");listItem.order=order;arr.push(listItem);listItem.children=li.children("ul,ol").sortableListsToHierarchy();order++});return arr};$.fn.sortableListsToString=function(arr,parentId){arr=arr||[];parentId=parentId||"no-parent";$(this).children("li").each(function(){var li=$(this),id=li.attr("id"),matches=id?id.match(/(.+)[-=_](.+)/):null;if(!matches){console.log(li);throw"Previous item in console.log has no id or id is not in required format xx_yy, xx-yy or xx=yy. It is necessary to create valid string."}arr.push(matches[1]+"["+matches[2]+"]="+parentId);$(this).children("ul,ol").sortableListsToString(arr,matches[2])});return arr.join("&")}})(jQuery);