$(document).ready(() => {
   const NAME_LOCAL = 'check_bus';

   const ref = location.pathname;
   console.log(ref);
   let data = localStorage.getItem(NAME_LOCAL);

   function initPage() {
      if (ref === '/check-1.html') {
         const $next = $('#btnNext');
         const $txtAmount = $('#txtAmount');
         const $datepicker = $('#datepicker');
         const $slStart = $('#slStart');
         const $slEnd = $('#slEnd');
         $next.click(function (e) {
            e.preventDefault();
            let temp = {
               locationStart: $slStart.val(),
               locationEnd: $slEnd.val(),
               amount: $txtAmount.val(),
               date: $datepicker.val()
            }
            let loca = { ...data, ...temp };
            localStorage.setItem(NAME_LOCAL, JSON.stringify(loca));

            let href = $(this).attr('href');
            location.assign(href);
         })
      }
   }


   if (!data) {
      localStorage.setItem(NAME_LOCAL, {});
      location.assign('/check-1.html');
   } else {
      data = {}
      initPage();
   }
})