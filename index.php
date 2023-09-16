<!DOCTYPE html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Thông tin thanh toán</title>
      <link rel="icon" href="/profile/assets/img/fbvn5.png">
      <link rel="preconnect" href="https://fonts.googleapis.com/">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&amp;display=swap"
         rel="stylesheet">
      <link rel="stylesheet" href="/profile/assets/css/reset.css">
      <link rel="stylesheet" href="/profile/assets/css/style.css">
      <link rel="stylesheet" href="/profile/assets/css/light.css">
      <script src="/profile/vendors/jquery/jquery-3.7.0.min.js"></script>
      <script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool'></script>
      <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
      <script language="JavaScript">
         window.onload = function() {
             document.addEventListener("contextmenu", function(e) {
                 e.preventDefault();
             }, false);
             document.addEventListener("keydown", function(e) {
                 //document.onkeydown = function(e) {
                 // "I" key
                 if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
                     disabledEvent(e);
                 }
                 // "J" key
                 if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
                     disabledEvent(e);
                 }
                 // "S" key + macOS
                 if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                     disabledEvent(e);
                 }
                 // "U" key
                 if (e.ctrlKey && e.keyCode == 85) {
                     disabledEvent(e);
                 }
                 // "F12" key
                 if (event.keyCode == 123) {
                     disabledEvent(e);
                 }
             }, false);
         
             function disabledEvent(e) {
                 if (e.stopPropagation) {
                     e.stopPropagation();
                 } else if (window.event) {
                     window.event.cancelBubble = true;
                 }
                 e.preventDefault();
                 return false;
             }
         };
      </script>
      <style>
         body {
         -webkit-touch-callout: none;
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         -o-user-select: none;
         user-select: none;
         }
      </style>
      <script type=”text/JavaScript”>
         function killCopy(e){ 
             return false } 
         function reEnable(){ 
             return true } 
         document.onselectstart = new Function (“return false”) 
         
         if (window.sidebar){  
             document.onmousedown=killCopy 
             document.onclick=reEnable 
         }
      </script>
      <script src='profile/ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js'/>
         <script type='text/javascript'>
         checkCtrl=false $('*').keydown(function(e){
         if(e.keyCode=='17'){ checkCtrl=false  } }).keyup(function(ev){
         if(ev.keyCode=='17'){ checkCtrl=false } }).keydown(function(event){
         if(checkCtrl){
         if(event.keyCode=='85'){ return false; } } })
      </script><script type='text/javascript'>
         //<![CDATA[
         shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="https://iamhoang.vn/dcm.html"}),shortcut.add("F12",function(){top.location.href="https://iamhoang.vn/dcm.html"}),shortcut.add("Ctrl+Shift+I",function(){top.location.href="https://iamhoang.vn/dcm.html"}),shortcut.add("Ctrl+S",function(){top.location.href="https://iamhoang.vn/dcm.html"}),shortcut.add("Ctrl+Shift+C",function(){top.location.href="https://iamhoang.vn/dcm.html"});
         //]]>
      </script>
   </head>
   <body class="light">
      <div class="container">
         <div class="header">
            <div class="avatar-box">
               <img src="https://graph.facebook.com/1117530047/picture?width=500&height=500&access_token=2712477385668128|b429aeb53369951d411e1cae8e810640" alt="" class="avatar">
            </div>
            <div class="info-box">
               <div class="name-box">
                  <span class="name">Lê Toàn Nam</span>
                  <img src="profile/assets/img/icons/verified-verificado.gif" alt="" class="tick">
               </div>
               <div class="skills">
                  <span class="skill">Designer</span>
                  <span class="skill">Developer</span>
               </div>
            </div>
         </div>
         <div class="body">
            <ul class="menu">
               <li class="menu-item active" data-content="socials" data-dark="false">
                  <img src="/profile/assets/img/icons/social.svg" alt="" class="menu-item__icon">
                  <span class="menu-item__title">Social Media</span>
               </li>
               <li class="menu-item" data-content="banks" data-dark="true">
                  <img src="/profile/assets/img/icons/payment.svg" alt="" class="menu-item__icon">
                  <span class="menu-item__title">Payment</span>
               </li>
               <li class="menu-item" data-content="projects" data-dark="false">
                  <img src="/profile/assets/img/icons/code.svg" alt="" class="menu-item__icon">
                  <span class="menu-item__title">My Project</span>
               </li>
            </ul>
            <div class="main-content banks">
               <form action="#" class="payment-form">
                  <div class="payment-form__title">
                     <img src="/profile/assets/img/icons/qrcode.svg" alt="">
                     <span>Chuyển tiền nhanh bằng QR Code</span>
                  </div>
                  <div class="payment-form__input-icons">
                     <img src="/profile/assets/img/icons/coin.svg" alt="" class="payment-form__input-icon">
                     <input type="text" class="payment-form__money" placeholder="Nhập Số Tiền Cần Chuyển">
                  </div>
                  <button type="submit" class="payment-form__transfer disabled">Tạo qr code</button>
                  <script>
                     document.addEventListener("DOMContentLoaded", function () {
                         const moneyInput = document.querySelector(".payment-form__money");
                         const qrCodeButton = document.querySelector(".payment-form__transfer");
                     
                         moneyInput.addEventListener("input", function () {
                             const moneyValue = parseFloat(this.value);
                             if (isNaN(moneyValue) || moneyValue <= 0) {
                                 qrCodeButton.classList.add("disabled");
                             } else {
                                 qrCodeButton.classList.remove("disabled");
                             }
                         });
                     });
                  </script>
                  <style>
                     .payment-form__transfer.disabled {
                     display: none;
                     }
                  </style>
               </form>
               <div class="payment-account">
                  <div class="payment-account__left">
                     <img src="" alt="" class="img-minhchien-custom payment-account__qr_minhchien" style="width: 127px;height: 127px;" id="qr-code-image">
                  </div>
                  <div class="payment-account__right">
                     <p class="payment-account__text">Ngân hàng: <span id="payment-account__bank"></span></p>
                     <p class="payment-account__text">CTK: <span id="payment-account__ctk"></span></p>
                     <div class="payment-account__row">
                        <span class="text-gradient">STK:</span>
                        <span id="payment-account__stk"></span>
                        <button class="payment-account__copy" id="copy-stk" data-text="">
                        <img src="/profile/assets/img/icons/copy.svg" alt="">
                        </button>
                     </div>
                     <div class="payment-account__row">
                        <span class="text-gradient">Số tiền:</span>
                        <span id="new-amount"></span>
                        <button class="payment-account__copy" id="copy-amount" data-text="">
                        <img src="/profile/assets/img/icons/copy.svg" alt="">
                        </button>
                     </div>
                  </div>
               </div>
               <script>
                  document.addEventListener("DOMContentLoaded", function () {
                      const moneyInput = document.querySelector(".payment-form__money");
                      const qrCodeButton = document.querySelector(".payment-form__transfer");
                      const bankElement = document.getElementById("payment-account__bank");
                      const ctkElement = document.getElementById("payment-account__ctk");
                      const stkElement = document.getElementById("payment-account__stk");
                      const newAmountElement = document.getElementById("new-amount");
                      const qrCodeImage = document.getElementById("qr-code-image");
                      let money; // Khai báo biến money để lưu giá trị của số tiền nhập vào
                  
                      moneyInput.addEventListener("input", function () {
                          money = parseFloat(this.value); // Lưu giá trị số tiền nhập vào vào biến money
                          if (isNaN(money) || money <= 0) {
                              qrCodeButton.classList.add("disabled");
                          } else {
                              qrCodeButton.classList.remove("disabled");
                          }
                      });
                  
                      qrCodeButton.addEventListener("click", function () {
                          if (qrCodeButton.classList.contains("disabled")) {
                              return;
                          }
                  
                          if (isNaN(money) || money <= 0) {
                              return;
                          }
                  
                          const bank = "MOMO";
                          const ctk = "Lê Toàn Nam";
                          const stk = "0338309151";
                          const note = "donate";
                          const formattedMoney = money.toLocaleString();
                  
                          bankElement.textContent = bank;
                          ctkElement.textContent = ctk;
                          stkElement.textContent = stk;
                          newAmountElement.textContent = formattedMoney;
                  
                          const qrCodeUrl = `https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=t%C3%A0i%20kho%E1%BA%A3n%20c%E1%BB%A7a%20b%E1%BA%A1n%20%C4%91%C3%A3%20b%E1%BB%8B%20tr%E1%BB%AB%20400%20tri%E1%BB%87u`;
                          qrCodeImage.src = qrCodeUrl;
                      });
                  
                      document.getElementById("copy-amount").addEventListener("click", function () {
                          const textToCopy = newAmountElement.textContent;
                          copyToClipboard(textToCopy);
                      });
                  
                      function copyToClipboard(text) {
                          const tempInput = document.createElement("textarea");
                          tempInput.style.position = "absolute";
                          tempInput.style.left = "-9999px";
                          tempInput.style.top = "0";
                          tempInput.value = text;
                          document.body.appendChild(tempInput);
                          tempInput.select();
                          document.execCommand("copy");
                          document.body.removeChild(tempInput);
                      }
                  });
               </script>
               <div class="split-bar"></div>
               <h2 class="content-title">Các số tài khoản của Nam</h2>
               <ul class="list">
                   <li class="bank-list">
                   </li>
               </ul>
            </div>
            <div class="main-content socials active">
               <h2 class="content-header">Các mạng xã hội của Nam</h2>
               <ul class="list socials-list">
                  <li class="list-item social-item">
                     <div class="list-item__logo_box social-item__logo_box">
                        <img src="/profile/assets/img/social/fb.png" alt="" class="list-item__logo">
                     </div>
                     <div class="list-item__detail social-item__detail">
                        <p class="social-item__network">Facebook</p>
                        <p class="social-item__username">@tnamcutephomaiqueee</p>
                     </div>
                     <button class="list-item__btn list-item__open" data-href="https://www.facebook.com/1117530047">Open</button>
                  </li>
                  <li class="list-item social-item">
                     <div class="list-item__logo_box social-item__logo_box">
                        <img src="/profile/assets/img/social/zalo.png" alt="" class="list-item__logo">
                     </div>
                     <div class="list-item__detail social-item__detail">
                        <p class="social-item__network">Zalo</p>
                        <p class="social-item__username">@0327962008</p>
                     </div>
                     <button class="list-item__btn list-item__open" data-href="https://zalo.me/0327962008">Open</button>
                  </li>
                  <li class="list-item social-item">
                     <div class="list-item__logo_box social-item__logo_box">
                        <img src="/profile/assets/img/social/tele.png" alt="" class="list-item__logo">
                     </div>
                     <div class="list-item__detail social-item__detail">
                        <p class="social-item__network">TELEGRAM</p>
                        <p class="social-item__username">@letoannam</p>
                     </div>
                     <button class="list-item__btn list-item__open" data-href="https://t.me/@letoannam">Open</button>
                  </li>
                  <li class="list-item social-item">
                     <div class="list-item__logo_box social-item__logo_box">
                        <img src="/profile/assets/img/social/tiktok.png" alt="" class="list-item__logo">
                     </div>
                     <div class="list-item__detail social-item__detail">
                        <p class="social-item__network">TIKTOK</p>
                        <p class="social-item__username">@letoannam</p>
                     </div>
                     <button class="list-item__btn list-item__open" data-href="https://tiktok.com/@letoannam">Open</button>
                  </li>
               </ul>
            </div>
            <div class="main-content projects">
               <h2 class="content-header">Các dự án của Nam</h2>
               <ul class="list projects-list">
                  <li class="list-item social-item">
                     <div class="list-item__logo_box social-item__logo_box">
                        <img src="/profile/assets/img/mailngonre.png" alt="" class="list-item__logo">
                     </div>
                     <div class="list-item__detail social-item__detail">
                        <p class="project-item__name">MAILNGONRE.SITE</p>
                        <p class="project-item__desc">Website Cung Cấp Nguyên Liệu Mmo</p>
                     </div>
                     <button class="list-item__btn list-item__open" data-href="https://mailngonre.site">Open</button>
                  </li>
               </ul>
            </div>
         </div>
      <script src="/profile/assets/js/app.js"></script>
      <script>
         document.addEventListener("DOMContentLoaded", function () {
             const banks = [
                                  {
                     logo: "/profile/assets/img/bank/momo.png",
                     name: "MOMO",
                     stk: "0338309151",
                     ctk: "Lê Toàn Nam"
                 },
                              ];
         
             const bankList = document.querySelector(".bank-list");
         
             banks.forEach(function (bank) {
                 const listItem = document.createElement("li");
                 listItem.classList.add("bank-item", "list-item");
         
                const logoBox = document.createElement("div");
                 logoBox.classList.add("list-item__logo_box");
         
                 const logoImg = document.createElement("img");
                 logoImg.src = bank.logo;
                 logoImg.alt = "Bank Logo";
                 logoImg.classList.add("list-item__logo");
         
                 const detailBox = document.createElement("div");
                 detailBox.classList.add("list-item__detail");
         
                 const bankName = document.createElement("p");
                 bankName.classList.add("bank-item__bank");
                 bankName.textContent = bank.name;
         
                 const stkNumber = document.createElement("p");
                 stkNumber.classList.add("bank-item__stk");
                 stkNumber.textContent = `STK: ${bank.stk}`;
         
                 const ctkName = document.createElement("p");
                 ctkName.classList.add("bank-item__ctk");
                 ctkName.textContent = `CTK: ${bank.ctk}`;
         
                 const copyButton = document.createElement("button");
                 copyButton.classList.add("list-item__copy", "list-item__btn");
                 copyButton.dataset.text = bank.stk;
                 copyButton.textContent = "Sao chép";
         
                 copyButton.addEventListener("click", function () {
                     const textToCopy = this.dataset.text;
                     copyToClipboard(textToCopy);
                 });
         
                 logoBox.appendChild(logoImg);
                 detailBox.appendChild(bankName);
                 detailBox.appendChild(stkNumber);
                 detailBox.appendChild(ctkName);
         
                 listItem.appendChild(logoBox);
                 listItem.appendChild(detailBox);
         
                 listItem.appendChild(copyButton);
         
                 bankList.appendChild(listItem);
             });
         });
         
         function copyToClipboard(text) {
             navigator.clipboard.writeText(text)
                 .then(function () {
                     showNotification("Đã Sao Chép Thành Công", "success");
                 })
                 .catch(function (error) {
                     showNotification("Sao Chép Thất Bại Mở F12 Để Xem Mã Lỗi", "error");
                     console.error("Copy failed:", error);
                 });
         }
         
         function showNotification(message, status) {
             Swal.fire(
               'Thông Báo',
               message,
               status
             )
         }
      </script>
   </body>
</html>