!function($){dgSearchList={options:{searchUrl:"",isRunnigSearch:!1},_create:function(){var self=this,el=self.element,offset=el.offset(),options=self.options;$("form[name=search]").after('<div id="searchresults" class="search-results"></div>'),el.hasClass("textbox")&&($("#searchresults").css({top:offset.top+30}),offset.left>422&&$("#searchresults").css({right:5})),el.attr("autocomplete","off"),el.bind("keyup change",function(e){return el.val().length>$("#dgSearchAlpha").val()&&options.isRunnigSearch===!1&&void setTimeout(function(){self.showSearch(el)},$("#dgSearchDelay").val())}),$(".dgclosePop").click(function(){self.closeSearch(el)});new RegExp(el.val(),"ig")},showSearch:function(el){this.setSearch(!0),$.ajax({type:"GET",url:el.parents("form[name=search]").attr("action"),data:{searchparam:el.val(),cl:"dgsearchpopup"}}).done(function(msg){var highLightRegExp=new RegExp(el.val(),"ig");$("#searchresults").html(msg),$("#searchresults").highlightRegex(highLightRegExp,{className:"dgsearchhighlight"}),$("#searchresults").show()}),this.setSearch(!1)},closeSearch:function(el){return $("#searchresults").html("").hide(),!1},setSearch:function(op){this.options.isRunnigSearch=op}},$.widget("ui.dgSearchList",dgSearchList)}(jQuery),function($){var normalize=function(node){if(node&&node.childNodes){var children=$.makeArray(node.childNodes),prevTextNode=null;$.each(children,function(i,child){3===child.nodeType?""===child.nodeValue?node.removeChild(child):null!==prevTextNode?(prevTextNode.nodeValue+=child.nodeValue,node.removeChild(child)):prevTextNode=child:(prevTextNode=null,child.childNodes&&normalize(child))})}};$.fn.highlightRegex=function(regex,options){return"object"!=typeof regex||"RegExp"==regex.constructor.name||regex instanceof RegExp||(options=regex,regex=void 0),"undefined"==typeof options&&(options={}),options.className=options.className||"highlight",options.tagType=options.tagType||"span",options.attrs=options.attrs||{},"undefined"==typeof regex||""===regex.source?$(this).find(options.tagType+"."+options.className).each(function(){$(this).replaceWith($(this).text()),normalize($(this).parent().get(0))}):$(this).each(function(){var elt=$(this).get(0);normalize(elt),$.each($.makeArray(elt.childNodes),function(i,searchnode){var spannode,middlebit,middleclone,pos,match,parent;if(normalize(searchnode),3==searchnode.nodeType){if($(searchnode).parent(options.tagType+"."+options.className).length)return;for(;searchnode.data&&(pos=searchnode.data.search(regex))>=0&&(match=searchnode.data.slice(pos).match(regex)[0],match.length>0);)spannode=document.createElement(options.tagType),spannode.className=options.className,$(spannode).attr(options.attrs),parent=searchnode.parentNode,middlebit=searchnode.splitText(pos),searchnode=middlebit.splitText(match.length),middleclone=middlebit.cloneNode(!0),spannode.appendChild(middleclone),parent.replaceChild(spannode,middlebit)}else $(searchnode).highlightRegex(regex,options)})}),$(this)}}(jQuery);