function CloseModal(){$(".modal-bg").attr("class","").addClass("modal-bg"),$("body").removeClass("modal-opened")}function OpenModal(o){$("body").addClass("modal-opened")}!function(){for(var o,e=function(){},n=["assert","clear","count","debug","dir","dirxml","error","exception","group","groupCollapsed","groupEnd","info","log","markTimeline","profile","profileEnd","table","time","timeEnd","timeline","timelineEnd","timeStamp","trace","warn"],a=n.length,d=window.console=window.console||{};a--;)o=n[a],d[o]||(d[o]=e)}(),"undefined"==typeof jQuery?console.warn("jQuery hasn't loaded"):console.log("jQuery has loaded"),$(document).ready(function(){$("nav .current-menu-item").each(function(o,e){$(this).prev().addClass("previous-menu-item")}),$(".modal-close").on("click",function(o){CloseModal()}),$(".modal-bg").on("click",function(o){CloseModal()}),$(".modal-container").on("click",function(o){o.stopPropagation()}),$(".header-btn__add").on("click",function(o){o.stopPropagation(),OpenModal(),$(".modal-bg").addClass("modal-bg--opened").addClass("modal-recall")})});
//# sourceMappingURL=maps/scripts.js.map
