!function(e){var t={};function n(i){if(t[i])return t[i].exports;var a=t[i]={i:i,l:!1,exports:{}};return e[i].call(a.exports,a,a.exports,n),a.l=!0,a.exports}n.m=e,n.c=t,n.d=function(e,t,i){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:i})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var i=Object.create(null);if(n.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var a in e)n.d(i,a,function(t){return e[t]}.bind(null,a));return i},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=890)}({890:function(e,t,n){e.exports=n(891)},891:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});const i=n(892),a=n(893),r=n(894);document.addEventListener("DOMContentLoaded",()=>{i.default.bind(),r.default.bind(),a.default.bind()})},892:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});class i{constructor(e){e.addEventListener("click",e=>(e.preventDefault(),this.open(),!1)),this.ele=document.getElementById("mux-shortcode-wizard"),this.ele.querySelector("button.mux-add-video").addEventListener("click",e=>(e.preventDefault(),this.selectMedia(),!1)),this.videoContainer=this.ele.querySelector("div.video-container"),this.ele.querySelector("button.insert-button").addEventListener("click",e=>(e.preventDefault(),this.insertMedia(),!1)),this.ele.querySelector("button.close-button").addEventListener("click",e=>(e.preventDefault(),this.close(),!1))}open(){this.ele.classList.remove("wizard-hidden")}close(){this.ele.classList.add("wizard-hidden")}selectMedia(){var e=wp.media({title:"Select the files to process",button:{text:"Select Video"},library:{type:["video"]}});e.on("select",()=>{let t=e.state().get("selection"),n=[];t.forEach(e=>{n.push(e)}),console.log(n),n.length>0&&this.selectedMedia(n[0])}),e.open()}selectedMedia(e){let t=e.get("id"),n=e.get("url"),i=e.get("mux");if(null===i)return void alert("This is not a Mux video.");let a="<video src='"+n+"' controls='true'></video>";const r=(new DOMParser).parseFromString(a,"text/html").documentElement.querySelector("body").firstChild;this.videoContainer.innerHTML="",this.videoContainer.classList.remove("empty"),this.videoContainer.append(r),this.media={id:t,url:n,mux:i}}insertMedia(){let e=[];null==this.media&&alert("Please select a video first."),e.push("id='"+this.media.id+"'"),this.ele.querySelectorAll("input[type=checkbox]").forEach(t=>{e.push(t.name+"='"+(t.checked?"true":"false")+"'")}),this.ele.querySelectorAll("select").forEach(t=>{e.push(t.name+"='"+t.value+"'")}),window.send_to_editor("[mux_video "+e.join(" ")+"]"),this.close()}static bind(){document.querySelectorAll("a.mux-shortcode-wizard").forEach(e=>{new i(e)})}}t.default=i},893:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});class i{constructor(e){this.nonce=e.dataset.nonce,this.assetId=e.dataset.assetId,this.fileInput=document.getElementById("mux-captions-upload"),this.closedCaptions=document.getElementById("mux-captions-cc"),this.languageSelect=document.getElementById("mux-captions-language"),this.submitButton=document.querySelector("button.upload-captions"),this.submitButton.addEventListener("click",e=>{if(e.preventDefault(),0==this.fileInput.files.length)return alert("Please select a valid .srt or .vtt file to upload."),!1;let t=new FormData;return t.append("action","mux-upload-caption"),t.append("nonce",this.nonce),t.append("aid",this.assetId),t.append("cc",this.closedCaptions.checked?"1":"0"),t.append("language",this.languageSelect.value),t.append("file",this.fileInput.files[0]),this.submitButton.setAttribute("disabled","disabled"),jQuery.ajax({url:ajaxurl,type:"POST",enctype:"multipart/form-data",data:t,contentType:!1,processData:!1,success:e=>{document.location.reload()},error:()=>{alert("There was an error uploading the captions, please try again."),this.submitButton.removeAttribute("disabled")}}),!1})}static bind(){let e=document.getElementById("mux-captions-uploader");e&&new i(e)}}t.default=i},894:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});class i{constructor(e){e.querySelectorAll("li").forEach(t=>{let n=t.querySelector("a");n.addEventListener("click",i=>{i.preventDefault();let a=new FormData;return a.append("action","mux-delete-caption"),a.append("nonce",e.dataset.nonce),a.append("aid",e.dataset.assetId),a.append("trackId",t.dataset.trackId),n.setAttribute("disabled","disabled"),jQuery.ajax({url:ajaxurl,type:"POST",data:a,contentType:!1,processData:!1,success:e=>{t.remove()},error:()=>{alert("There was an error deleting the captions, please try again."),n.removeAttribute("disabled")}}),!1})})}static bind(){document.querySelectorAll("ul.mux-asset-captions").forEach(e=>{new i(e)})}}t.default=i}});