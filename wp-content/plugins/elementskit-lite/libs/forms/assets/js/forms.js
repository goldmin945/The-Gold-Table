jQuery((function(t){"use strict";var a=t(".ekit-form-btn"),n=a.attr("href"),e=a.attr("data-activation_url"),i=a.data("plugin_status"),l=a.data("installing_text"),c=a.data("activating_text"),s=a.data("activated_text");function u(n,e,i){t.ajax({type:"GET",url:n,beforeSend:function(){a.html(e)},success:function(){a.removeClass("ekit-plugin-install-activate"),a.addClass("activated"),a.html(i),location.reload()}})}a.on("click",(function(o){var d,r;o.preventDefault(),"not_installed"==i?(d=n,r=l,t.ajax({type:"GET",url:d,beforeSend:function(){a.addClass("ekit-plugin-install-activate"),a.html(r)},success:function(){u(e,c,s)}})):"installed"==i&&u(e,c,s)}))}));