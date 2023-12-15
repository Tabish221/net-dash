<?php include("includes-ui/page-start.php"); ?>

<head>
   <?php include("includes-ui/compatibility.php"); ?>
   <?php include("includes-ui/style.php"); ?>
   <meta name="description" content="">
   <title>DINO Deshboard | ...</title>
</head>

<body>
   <div class="container-fluid pe-0 ps-0">
      <div class="mainPage">
         <?php include("includes-ui/aside.php"); ?>
         <div class="mainBody">
            <?php include("includes-ui/header.php"); ?>

            <div class="bodyPanel">
               <div class="bodyPanel__head ps-0 d-flex align-items-center justify-content-between">
                  <h6 class="fs-6">
                     <span class="material-symbols-outlined fs-5">box</span>
                     Deshboard
                     <span class="material-symbols-outlined ps-2 fs-8">arrow_forward_ios</span>
                     <b class="fs-6">Bill Collection</b>
                  </h6>
               </div>

               <div class="dealMain">
                  <div class="dealSummary__head d-flex justify-content-end mb-3">
                     <div class="dealSummary__headBtn">
                        <a href="#" onclick="printDiv()" class="fs-7 grey300 px-3 py-2">
                           Print <span class="material-symbols-outlined">print</span>
                        </a>
                     </div>
                  </div>

                  <div class="row mb-3">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-body">
                           <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                              <h6 class="fs-5 fw-bold grey600 pb-4">User Infomation</h6>
                           </div>

                           <div class="row justify-content-between">
                              <div class="col-lg-3  col-md-4">
                                 <div class="theamform-feild">
                                    <label for="">Select Date <span>*</span></label>
                                    <input type="date" placeholder="Enter user ID fill data auto">
                                 </div>
                              </div>
                              <div class="col-lg-3 col-md-4">
                                 <div class="theamform-feild">
                                    <label for="">User ID <span>*</span></label>
                                    <input type="text" placeholder="Enter user ID Data Auto Filled">
                                 </div>
                              </div>
                           </div>

                           <div class="row">
                              <div class="col-lg-4 col-md-6">
                                 <div class="theamform-feild">
                                    <label for="">Full Name <span>*</span></label>
                                    <input type="text" placeholder="User Full Name">
                                 </div>
                              </div>
   
                              <div class="col-lg-4 col-md-6">
                                 <div class="theamform-feild">
                                    <label for="">Phone Number <span>*</span></label>
                                    <input type="text" placeholder="Phone Number">
                                 </div>
                              </div>
                              
                              <div class="col-lg-4 col-md-6">
                                 <div class="theamform-feild">
                                    <label for="">WhatsApp Number <span>*</span></label>
                                    <input type="text" placeholder="WhatsApp Number">
                                 </div>
                              </div>
   
                              <div class="col-lg-4 col-md-6">
                                 <div class="theamform-feild">
                                    <label for="">Email Address <span>*</span></label>
                                    <input type="text" placeholder="Email Address">
                                 </div>
                              </div>

                              <div class="col-lg-8 col-md-12">
                                 <div class="theamform-feild">
                                    <label for="">Address <span>*</span></label>
                                    <input type="text" placeholder="Address">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

                  <div class="row">
                     <div class="col-md-12" id="contentToPrint">
                        <div class="card invoiceCard">
                           <div class="card-body py-4">
                              <div class="invoiceCard-header">
                                 <h1>Bill of December 2023</h1>

                                 <div class="d-flex justify-content-between">
                                    <address>
                                       <h6>User ID: UI-001</h6>
                                       <p>Jonathan Neal</p>
                                       <p>101 E. Chapman Ave Orange, CA 92866</p>
                                       <p>(800) 555-1234</p>
                                    </address>

                                    <table class="meta">
                                       <tr>
                                          <th><span>Invoice #</span></th>
                                          <td><span>101138</span></td>
                                       </tr>
                                       <tr>
                                          <th><span>Date</span></th>
                                          <td><span>January 1, 2012</span></td>
                                       </tr>
                                       <tr>
                                          <th><span>Amount Due</span></th>
                                          <td><input type="number" value="600.00" class="balanceDueMeta" disabled><span id="prefix">PKR</span>
                                          </td>
                                       </tr>
                                    </table>
                                 </div>
                              </div>


                              <div class="invoiceCard-body">
                                 <table class="inventory">
                                    <thead>
                                       <tr>
                                          <th><span>Item / Package</span></th>
                                          <th><span>Description</span></th>
                                          <th style="display: none;"><span>Rate</span></th>
                                          <th><span>Price</span></th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td><a class="cut">-</a><span>Orange Package</span></td>
                                          <td><span>Previous Month Due Amount</span></td>
                                          <td><input type="number" value="300.00" class="itmesPrice" disabled><span data-prefix></span>
                                          </td>
                                       </tr>

                                       <tr>
                                          <td><a class="cut">-</a><span contenteditable>Front End Consultation</span>
                                          </td>
                                          <td><span contenteditable>Experience Review</span></td>
                                          <td><input type="number" value="600.00" class="itmesPrice" disabled><span data-prefix></span>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                                 <div class="text-end">
                                    <a class="add">+</a>
                                 </div>
                              </div>

                              <div class="invoiceCard-footer">
                                 <div class="text-end">
                                    <table class="balance m-auto me-0">
                                       <tr>
                                          <th><span>Total</span></th>
                                          <td><input type="number" value="600.00" class="totalPrice" disabled><span data-prefix></span>
                                          </td>
                                       </tr>
                                       <tr>
                                          <th><span>Amount Paid</span></th>
                                          <td><input type="number" value="0.00" class="paidAmount"><span data-prefix></span></td>
                                       </tr>
                                       <tr>
                                          <th><span>Discount</span></th>
                                          <td><input type="number" value="0.00" class="discountAmount"><span data-prefix></span></td>
                                       </tr>
                                       <tr>
                                          <th><span>Balance Due</span></th>
                                          <td><input type="number" value="600.00" class="balanceDue" disabled><span data-prefix></span>
                                          </td>
                                       </tr>
                                    </table>
                                    <button class='btn btn-success px-5 mt-3'>Paid</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


   <?php include("includes-ui/scripts.php"); ?>

   <script>
      function printDiv() {
         var content = document.getElementById("contentToPrint").innerHTML;
         var printWindow = window.open('', '_blank');
         printWindow.document.write('<html><head><title>Print</title>');
         printWindow.document.write(`
            <style>
               @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
               /* Reset Css */
               html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, caption, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video { margin: 0; padding: 0; border: 0; font-size: 100%; font: inherit; vertical-align: baseline; } 
               /* HTML5 display-role reset for older browsers */ 
               article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { display: block; } 
               body { line-height: 1; } 
               ol, ul { list-style: none; } 
               blockquote, q { quotes: none; } 
               blockquote:before, blockquote:after, q:before, q:after { content: ''; content: none; } 
               body{
                  font-family: 'Poppins', sans-serif;
                  margin: 0;
                  padding: 0;
               }
               .d-flex{
                  display: flex;
               }
               .justify-content-between{
                  justify-content: space-between;
               }
               .text-end{
                  text-align: right;
               }
               .invoiceCard input[type=number] {
                  border: none;
                  background: none;
                  display: inline-block;
                  width: 70px;
                  font-size: 10px;
                  text-align: right;
               }
               .invoiceCard .invoiceCard-header {
                  padding: 5px 5px 10px 5px;
               }
               .invoiceCard .invoiceCard-header h1 {
                  background: #3a3a3a;
                  border-radius: 5px;
                  color: #FFF;
                  padding: 5px 0;
                  margin-bottom: 5px;
                  font-size: 12px;
                  line-height: 1.2;
                  letter-spacing: 1px;
                  text-align: center;
                  text-transform: uppercase;
               }
               .invoiceCard input[type=number] {
                  text-align: right;
                  width: 100px;
                  border: none;
                  background: none;
               }
               span[data-prefix] {
                  font-size: 7px;
               }
               .invoiceCard table {
                  font-size: 16px;
                  table-layout: fixed;
                  width: 100%;
               }
               .invoiceCard table th,
               .invoiceCard table td {
                  border-width: 0.8px;
                  padding: 5px;
                  position: relative;
                  text-align: left;
                  border-color: #DDD;
                  border-style: solid;
               }
               .invoiceCard .invoiceCard-header address {
                  display: inline-flex;
                  flex-direction: column;
                  gap: 5px;
                  width: 100px;
               }
               .invoiceCard .invoiceCard-header address h6 {
                  color: #333;
                  font-size: 10px;
                  line-height: 1.2;
                  font-weight: 600;
               }
               .invoiceCard .invoiceCard-header address p {
                  font-size: 9px;
                  line-height: 1.2;
                  color: #999;
               }

               .invoiceCard table {
                  font-size: 10px;
                  table-layout: fixed;
                  width: 100%;
                  border-collapse: collapse;
               }
               .invoiceCard table.meta, .invoiceCard table.balance {
                  width: 45%;
                  margin: auto;
                  margin-right: 0;
               }
               .invoiceCard table.meta th, .invoiceCard table.balance th {
                  width: 40%;
                  font-size: 10px;
                  color: #333;
                  line-height: 1.2;
                  font-weight: 600;
               }
               .invoiceCard table.meta td,
               .invoiceCard table.balance td {
                  width: 60%;
                  font-size: 10px;
                  color: #666;
                  line-height: 1.2;
                  font-weight: 400;
                  text-align: right;
               }
               .invoiceCard .invoiceCard-body {
                  padding: 5px;
               }
               .invoiceCard .invoiceCard-body .inventory {
                  width: 100%;
               }
               .invoiceCard .invoiceCard-body .inventory th {
                  font-size: 11px;
                  color: #333;
                  line-height: 1.2;
                  font-weight: 600;
               }
               .invoiceCard .invoiceCard-body .inventory td {
                  font-size: 10px;
                  line-height: 1.2;
                  font-weight: 400;
                  color: #666;
               }
               .invoiceCard .invoiceCard-body .inventory td:nth-child(1) {
                  width: 30%;
               }
               .invoiceCard .invoiceCard-body .inventory td:nth-child(2) {
                  width: 60%;
               }
               .invoiceCard .invoiceCard-body .inventory td:nth-child(3) {
                  text-align: right;
                  width: 10%;
               }
               .invoiceCard .invoiceCard-body .add,
               .invoiceCard .invoiceCard-body .cut {
                  display: none;
               }
               .invoiceCard .invoiceCard-footer {
                  display: flex;
                  justify-content: flex-end;
                  padding: 5px;
               }
               .invoiceCard .invoiceCard-footer button{
                  display:none
               }
               @media print {
                  * {
                     -webkit-print-color-adjust: exact;
                  }
                  html {
                     background: none;
                     padding: 0;
                  }
                  body {
                     box-shadow: none;
                     margin: 0;
                  }
                  span:empty {
                     display: none;
                  }
                  .add,
                  .cut {
                     display: none;
                  }
               }
               @page {
                  margin: 0;
               }
            </style>
         `);
         printWindow.document.write('</head><body>' + content + '</body></html>');
         printWindow.document.close();
         // Set custom print settings
         // if (printWindow.matchMedia) {
         //   var mediaQueryList = printWindow.matchMedia('print');
         //   mediaQueryList.addListener(function (mql) {
         //     if (mql.matches) {
         //       printWindow.document.body.style.width = '6in';
         //       printWindow.document.body.style.height = '20in';
         //     }
         //   });
         // }
         printWindow.print();
      }
   </script>

   <script>
      /* Shivving (IE8 is not supported, but at least it won't look as awful)
      /* ========================================================================== */

      (function (document) {
         var
            head = document.head = document.getElementsByTagName('head')[0] || document.documentElement,
            elements = 'article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output picture progress section summary time video x'.split(' '),
            elementsLength = elements.length,
            elementsIndex = 0,
            element;

         while (elementsIndex < elementsLength) {
            element = document.createElement(elements[++elementsIndex]);
         }

         element.innerHTML = 'x<style>' +
            'article,aside,details,figcaption,figure,footer,header,hgroup,nav,section{display:block}' +
            'audio[controls],canvas,video{display:inline-block}' +
            '[hidden],audio{display:none}' +
            'mark{background:#FF0;color:#000}' +
            '</style>';

         return head.insertBefore(element.lastChild, head.firstChild);
      })(document);

      /* Prototyping
      /* ========================================================================== */
      (function (window, ElementPrototype, ArrayPrototype, polyfill) {
         function NodeList() { [polyfill] }
         NodeList.prototype.length = ArrayPrototype.length;
         ElementPrototype.matchesSelector = ElementPrototype.matchesSelector ||
            ElementPrototype.mozMatchesSelector ||
            ElementPrototype.msMatchesSelector ||
            ElementPrototype.oMatchesSelector ||
            ElementPrototype.webkitMatchesSelector ||
            function matchesSelector(selector) {
               return ArrayPrototype.indexOf.call(this.parentNode.querySelectorAll(selector), this) > -1;
            };
         ElementPrototype.ancestorQuerySelectorAll = ElementPrototype.ancestorQuerySelectorAll ||
            ElementPrototype.mozAncestorQuerySelectorAll ||
            ElementPrototype.msAncestorQuerySelectorAll ||
            ElementPrototype.oAncestorQuerySelectorAll ||
            ElementPrototype.webkitAncestorQuerySelectorAll ||
            function ancestorQuerySelectorAll(selector) {
               for (var cite = this, newNodeList = new NodeList; cite = cite.parentElement;) {
                  if (cite.matchesSelector(selector)) ArrayPrototype.push.call(newNodeList, cite);
               }

               return newNodeList;
            };
         ElementPrototype.ancestorQuerySelector = ElementPrototype.ancestorQuerySelector ||
            ElementPrototype.mozAncestorQuerySelector ||
            ElementPrototype.msAncestorQuerySelector ||
            ElementPrototype.oAncestorQuerySelector ||
            ElementPrototype.webkitAncestorQuerySelector ||
            function ancestorQuerySelector(selector) {
               return this.ancestorQuerySelectorAll(selector)[0] || null;
            };
      })(this, Element.prototype, Array.prototype);

      /* Helper Functions
      /* ========================================================================== */

      function generateTableRow() {
         var emptyColumn = document.createElement('tr');
         var cells, a, i;
         for (var a = document.querySelectorAll('table.inventory tbody tr'), i = 0; a[i]; ++i) {
            cells = a[i];
         }
         emptyColumn.innerHTML = `
            <td><a class="cut">-</a><Input type="text" id='package${i}' name='package${i}' placeholder="Enter Package" /></td>
            <td><Input type="text" id="description${i}" name="description${i}" placeholder="Enter Description" /></td>
            <td><input type="number" id="price${i}" name="price${i}" class="itmesPrice" placeholder="0.00" value="0.00" /><span data-prefix>$</span></td>`;
         return emptyColumn;
      }

      function parseFloatValue(element) {
         return parseFloat(element.value.replace(/[^\d\.\-]+/g, '')) || 0;
         // return parseFloat(element.value)
      }

      function parsePrice(number) {
         console.log("first", number)
         return number.toFixed(2).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '1');
      }

      /* Update Invoice
      /* ========================================================================== */
      function updateInvoice() {
         var total = 0;
         var cells, price, total, a, i;
         for (var a = document.querySelectorAll('table.inventory tbody tr'), i = 0; a[i]; ++i) {
            cells = a[i].querySelectorAll('input.itmesPrice');
            price = parseFloatValue(cells[0]);
            total += price;
         }
         document.querySelector('.totalPrice').value = parsePrice(total);
         document.querySelector('.balanceDue').value = document.querySelector('.balanceDueMeta').value = parsePrice(total - parseFloatValue(document.querySelector('.paidAmount')) - parseFloatValue(document.querySelector('.discountAmount')));
         var prefix = document.querySelector('#prefix').innerHTML;
         for (a = document.querySelectorAll('[data-prefix]'), i = 0; a[i]; ++i) a[i].innerHTML = prefix;
         for (a = document.querySelectorAll('input[type="number"]'), i = 0; a[i]; ++i) if (document.activeElement != a[i]) a[i].value = parsePrice(parseFloatValue(a[i]));
      }

      /* On Content Load
      /* ========================================================================== */
      function onContentLoad() {
         updateInvoice();
         function onClick(e) {
            var element = e.target.querySelector('input'), row;
            element && e.target != document.documentElement && e.target != document.body && element.focus();
            if (e.target.matchesSelector('.add')) {
               document.querySelector('table.inventory tbody').appendChild(generateTableRow());
            }
            else if (e.target.className == 'cut') {
               row = e.target.ancestorQuerySelector('tr');
               row.parentNode.removeChild(row);
            }
            updateInvoice();
         }
         if (window.addEventListener) {
            document.addEventListener('click', onClick);
            document.addEventListener('keydown', updateInvoice);
            document.addEventListener('keyup', updateInvoice);
         }
      }
      window.addEventListener && document.addEventListener('DOMContentLoaded', onContentLoad);
   </script>
</body>
<?php include("includes-ui/page-end.php"); ?>