(function(factory)
{'use strict';if(typeof define==='function'&&define.amd)
{define(['jquery'],factory);}
else
{factory(window.jQuery||window.Zepto);}}(function($)
{'use strict';var pathStack=[],methods={},regexHasProtocol=/^([a-z]:)?\/\//i,regexSuffix=/\.\w+$/,devicePixelRatio;methods.init=function(options)
{options=$.extend({ping:null,dimensions:'preserve',glue:'_',skipExtensions:['svg']},options);this.each(function()
{var $this=$(this);if(!$this.is('img')||$this.hasClass('dense-image'))
{return;}
$this.addClass('dense-image dense-loading');var image=methods.getImageAttribute.call(this),originalImage=$this.attr('src'),ping=false,updateImage;if(!image)
{if(!originalImage||devicePixelRatio===1||$.inArray(originalImage.split('.').pop().split(/[\?\#]/).shift(),options.skipExtensions)!==-1)
{$this.removeClass('dense-image dense-loading');return;}
image=originalImage.replace(regexSuffix,function(extension)
{return options.glue+ devicePixelRatio+'x'+ extension;});ping=options.ping!==false&&$.inArray(image,pathStack)===-1&&(options.ping===true||!regexHasProtocol.test(image)||image.indexOf('index.html'+document.domain)===0||image.indexOf(document.location.protocol+'index.html'+document.domain)===0);}
updateImage=function()
{var readyImage=function()
{$this.removeClass('dense-loading').addClass('dense-ready').trigger('denseRetinaReady.dense');};$this.attr('src',image);if(options.dimensions==='update')
{$this.dense('updateDimensions').one('denseDimensionChanged',readyImage);}
else
{if(options.dimensions==='remove')
{$this.removeAttr('width height');}
readyImage();}};if(ping)
{$.ajax({url:image,type:'HEAD'}).done(function(data,textStatus,jqXHR)
{var type=jqXHR.getResponseHeader('Content-type');if(!type||type.indexOf('image/index.html')===0)
{pathStack.push(image);updateImage();}});}
else
{updateImage();}});return this;};methods.updateDimensions=function()
{return this.each(function()
{var img,$this=$(this),src=$this.attr('src');if(src)
{img=new Image();img.src=src;$(img).on('load.dense',function()
{$this.attr({width:img.width,height:img.height}).trigger('denseDimensionChanged.dense');});}});};methods.devicePixelRatio=function()
{var pixelRatio=1;if($.type(window.devicePixelRatio)!=='undefined')
{pixelRatio=window.devicePixelRatio;}
else if($.type(window.matchMedia)!=='undefined')
{$.each([1.3,2,3,4,5,6],function(key,ratio)
{var mediaQuery=['(-webkit-min-device-pixel-ratio: '+ratio+')','(min-resolution: '+Math.floor(ratio*96)+'dpi)','(min-resolution: '+ratio+'dppx)'].join(',');if(!window.matchMedia(mediaQuery).matches)
{return false;}
pixelRatio=ratio;});}
return Math.ceil(pixelRatio);};methods.getImageAttribute=function()
{var $this=$(this).eq(0),image=false,url;for(var i=1;i<=devicePixelRatio;i++)
{url=$this.attr('data-'+ i+'x');if(url)
{image=url;}}
return image;};devicePixelRatio=methods.devicePixelRatio();$.fn.dense=function(method,options)
{if($.type(method)!=='string'||$.type(methods[method])!=='function')
{options=method;method='init';}
return methods[method].call(this,options);};$(function()
{$('body.dense-retina img').dense();});}));