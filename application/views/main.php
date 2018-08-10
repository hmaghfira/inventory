<div class="container-fluid p-0">
  <section class="resume-section p-3 p-lg-5 d-flex d-column" id="home">
    <div class="my-auto">
      <h1 class="mb-0">NCC
        <span class="text-primary">INVENTORY</span>
      </h1>
      <hr>
      <h2 class="mb-0">RULES</h2>

      <p class="mb-0" style="font-size: 18px;">
        1. There are two types of loans : <a href="#pcreservation"><strong>PC RESERVATION</strong></a> and <a href="#inventory"><strong>LOAN INVENTORY</strong></a><br>
        2. <strong>PC RESERVATION</strong> steps :<br>
        &nbsp;&nbsp;&nbsp;&nbsp;- Each student only allowed to create one reservation.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;- Fill the reservation form completely.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;- Click "Submit" button, so you will get the softcopy form.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;- Print out the form and bring to your Supervisor Lecturer to be signed.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;- Upload the scanned form to this web.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;- Wait until NCC Administrator accept your request (will be confirm by email).<br>
        3. <strong>LOAN INVENTORY</strong> steps :<br>
        &nbsp;&nbsp;&nbsp;&nbsp;- Fill the loan form completely.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;- Click "Upload" button, so you will get the PDF form.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;- Print out the form and bring to your Supervisor Lecturer to be signed.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;- Upload the scanned form to this web.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;- Wait until NCC Administrator accept your request (will be confirm by email).<br>
      </p>
    </div>
  </section>

  <!-- SECTION PC RESERVATION  -->
  <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="pcreservation">
    <div class="my-auto">
      <h2 class="mb-3">PC RESERVATION</h2>
      <!-- BODY -->
      <div class="resume-item mb-5">
        <div class="resume-content mr-auto" style="width: 100%">
          <!-- TAB BUTTON -->
          <div class="tab" style="text-align: center;">
            <button class="tablinks" onclick="openCity(event, 'New')" id="defaultOpen" style="width: 50%"><b>New Reservation</b></button>
            <button class="tablinks" onclick="openCity(event, 'Upload')" style="width: 50%"><b>Upload Form</b></button>
          </div>
          <!-- EO TAB BUTTON -->

          <!-- NEW RESERVE -->
          <div id="New" class="tabcontent1">
            <br>
            <h3 style="text-align: center; font-size: 33px">RESERVATION FORM</h3>
            <hr>
            <div class="my-auto">
              <!-- RESERVATION FORM -->
              <form method="POST" action="" style="padding-left: 40px; width: 70%; margin-left: 13%">
                <div class="form-group">
                  <label for="name"><b>Name</b></label>
                  <input type="text" class="form-control" name="name"  id="name" aria-describedby="emailHelp" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <label for="nrp"><b>NRP</b></label>
                  <input type="number" class="form-control" name="nrp" id="nrp" placeholder="Ex: 05111540000000">
                </div>
                <div class="form-group">
                  <label for="email"><b>Email</b></label>
                  <input type="email" class="form-control"  name="email" id="email" placeholder="Your Email">
                </div>
                <div class="form-group">
                  <label for="phone"><b>Phone</b></label>
                  <input type="number" class="form-control"  name="phone" id="phone" placeholder="Your Phone">
                </div>
                <div class="form-group">
                  <label for="dosbing"><b>Supervisor Lecturer</b></label>
                  <input type="text" class="form-control"  name="dosbing" id="dosbing" placeholder="Dosen Pembimbing">
                </div>
                <div class="form-group">
                  <label for="nip"><b>NIP Supervisor Lecturer</b></label>
                  <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP Dosen Pembimbing">
                </div>

                <div class="form-group">
                  <?php $today=date("YYYY-MM-DD") ?>
                  <label for="date"><b>Start - End Date</b></label>
                  <input type="text" class="form-control" id="date" name="daterange" value="" min="<?php echo $today ?>">
                </div>

                <div class="form-group">
                  <label for="specification"><b>Specification</b></label>
                  <textarea class="form-control" name="specification" id="specification" placeholder="Specification Needed" rows="3"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" style="margin-left: 88%">Submit</button>
              </form>
              <!-- EO RESERVATION FORM -->
              <br>
            </div>
          </div>
          <!-- EO NEW RESERVE -->

          <!-- UPLOAD FORM -->
          <div id="Upload" class="tabcontent1">
            <br>
            <h3 style="text-align: center; font-size: 33px">UPLOAD FORM</h3>
            <hr>
            <div class="my-auto">
              <!-- UPLOAD FORM -->
              <form method="POST" action="" style="padding-left: 40px; width: 70%; margin-left: 13%">
                <!-- <div class="form-group">
                  <label for="name_u"><b>Name</b></label>
                  <input type="text" class="form-control" required="" id="name_u" placeholder="Your Name">
                </div> -->
                <div class="form-group">
                  <label for="nrp_u"><b>NRP</b></label> 
                  <input type="number" class="form-control" id="nrp_u" name="nrp_u" placeholder="Type your NRP">
                </div>

                <div class="form-group">
                  <label for="form_u"><b>File input</b></label>
                  <input type="file" class="form-control-file" id="form_u" name="form_u" aria-describedby="fileHelp">
                </div>
                <br>
                <button type="submit" class="btn btn-primary" style="margin-left: 88%">Submit</button>
              </form>
              <!-- EO RESERVATION FORM -->
              <br>
            </div> 
          </div>
          <!-- EO UPLOAD FORM -->
        </div>
      </div>
      <!-- EO BODY -->
    </div>
  </section>
  <!-- EO SECTION PC RESERVATION -->

  <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="inventory">
    <div class="my-auto">
      <h2 class="mb-3">INVENTORY</h2>
      <!-- BODY -->
      <div class="resume-item mb-5">
        <div class="resume-content mr-auto" style="width: 100%">
          <!-- TAB BUTTON -->
          <div class="tab" style="text-align: center;">
            <button class="tablinks2" onclick="openInven(event, 'List')" id="defaultOpenInven" style="width: 50%"><b>List Inventory</b></button>
            <button class="tablinks2" onclick="openInven(event, 'Req')" style="width: 50%"><b>Loan Inventory Form</b></button>
          </div>
          <!-- EO TAB BUTTON -->

          <!-- LIST -->
          <div id="List" class="tabcontent2">
            <br>
            <h3 style="text-align: center; font-size: 33px">LIST INVENTORY</h3>
            <hr>
            <div class="my-auto">
              <!-- LIST STUFFS -->
              <form method="POST" action="" style="padding-left: 40px; width: 70%; margin-left: 13%">
                <div class="form-group">
                  <label for="name"><b>Name</b></label>
                  <input type="text" class="form-control" name="name"  id="name" aria-describedby="emailHelp" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <label for="nrp"><b>NRP</b></label>
                  <input type="number" class="form-control" name="nrp" id="nrp" placeholder="Ex: 05111540000000">
                </div>
                <div class="form-group">
                  <label for="email"><b>Email</b></label>
                  <input type="email" class="form-control"  name="email" id="email" placeholder="Your Email">
                </div>
                <div class="form-group">
                  <label for="phone"><b>Phone</b></label>
                  <input type="number" class="form-control"  name="phone" id="phone" placeholder="Your Phone">
                </div>
                <div class="form-group">
                  <label for="dosbing"><b>Supervisor Lecturer</b></label>
                  <input type="text" class="form-control"  name="dosbing" id="dosbing" placeholder="Dosen Pembimbing">
                </div>
                <div class="form-group">
                  <label for="nip"><b>NIP Supervisor Lecturer</b></label>
                  <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP Dosen Pembimbing">
                </div>

                <div class="form-group">
                  <label for="date"><b>Start - End Date</b></label>
                  <input type="text" class="form-control" id="date" name="daterange" value="">
                </div>

                <div class="form-group">
                  <label for="specification"><b>Specification</b></label>
                  <textarea class="form-control" name="specification" id="specification" placeholder="Specification Needed" rows="3"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" style="margin-left: 88%">Submit</button>
              </form>
              <!-- EO LIST STUFFS -->
              <br>
            </div>
          </div>
          <!-- EO LIST -->

          <!-- LOAN INVENTORY FORM -->
          <div id="Req" class="tabcontent2">
            <br>
            <h3 style="text-align: center; font-size: 33px">LOAN INVENTORY FORM</h3>
            <hr>
            <div class="my-auto">
              <!-- UPLOAD FORM -->
              <form method="POST" action="" style="padding-left: 40px; width: 70%; margin-left: 13%">
                <div class="form-group">
                  <label for="name"><b>Name</b></label>
                  <input type="text" class="form-control" name="name"  id="name" aria-describedby="emailHelp" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <label for="nrp"><b>NRP</b></label>
                  <input type="number" class="form-control" name="nrp" id="nrp" placeholder="Ex: 05111540000000">
                </div>
                <div class="form-group">
                  <label for="email"><b>Email</b></label>
                  <input type="email" class="form-control"  name="email" id="email" placeholder="Your Email">
                </div>
                <div class="form-group">
                  <label for="phone"><b>Phone</b></label>
                  <input type="number" class="form-control"  name="phone" id="phone" placeholder="Your Phone">
                </div>

                <div class="row">
                  <div class="col" style="width: 50%">
                    <?php $today=date('Y-m-d') ?>
                    <label for="tglAwal1"><b>Start Date</b></label>
                    <input type="text" class="form-control"  name="tglAwal1" id="tglAwal1" min="<?php echo $today ?>">
                  </div>

                  <div class="col" style="width: 50%">
                    <label for="tglAkhirLoan"><b>End Date</b></label>
                    <input type="text" class="form-control" name="tglAkhirLoan" id="tglAkhirLoan" min="tglAwalLoan">
                  </div>
                </div>
<!-- 
                <div class="container">
                  <div class='col-md-5'>
                      <div class="form-group">
                          <div class='input-group date' id='datetimepicker6'>
                              <input type='text' class="form-control" />
                              <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                          </div>
                      </div>
                  </div>
                  <div class='col-md-5'>
                      <div class="form-group">
                          <div class='input-group date' id='datetimepicker7'>
                              <input type='text' class="form-control" />
                              <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                          </div>
                      </div>
                  </div>
              </div>
 -->
                <br>

                <div class="form-group">
                  <label for="date"><b>Start - End Date</b></label>
                  <input type="text" class="form-control" id="date" name="daterange" value="">
                </div>

                <div class="form-group">
                  <label for="specification"><b>Specification</b></label>
                  <textarea class="form-control" name="specification" id="specification" placeholder="Specification Needed" rows="3"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" style="margin-left: 88%">Submit</button>
              </form>
              <!-- EO RESERVATION FORM -->
              <br>
            </div> 
          </div>
          <!-- EO LOAN INVENTORY FORM -->
        </div>
      </div>
      <!-- EO BODY -->
    </div>
  </section>

  <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="contact">
    <div class="my-auto">
      <h2 class="mb-5">CONTACT ADMIN</h2>
      <div class="subheading mb-0">Email : </div>
      <br>
      <div class="subheading mb-0">Phone : </div>
      <br>
      <div class="subheading mb-0">
        NCC Laboratory, Informatics Department 3rd Floor<br>
        Institut Teknologi Sepuluh Nopember<br>
        Surabaya, Indonesia<br>
      </div>
    </div>
  </section>
</div>

<script type="text/javascript">
  // TAB PC RESERVATION
  function openCity(evt, content) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent1");
      for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(content).style.display = "block";
      evt.currentTarget.className += " active";
  }
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();

  // TAB INVENTORY
  function openInven(list, req) {
      var i2, tabcontent2, tablinks2;
      tabcontent2 = document.getElementsByClassName("tabcontent2");
      for (i2 = 0; i2 < tabcontent2.length; i2++) {
          tabcontent2[i2].style.display = "none";
      }
      tablinks2 = document.getElementsByClassName("tablinks2");
      for (i2 = 0; i2 < tablinks2.length; i2++) {
          tablinks2[i2].className = tablinks2[i2].className.replace(" active", "");
      }
      document.getElementById(req).style.display = "block";
      list.currentTarget.className += " active";
  }
  document.getElementById("defaultOpenInven").click();

  // $( function() {
  //   var dateFormat = "mm/dd/yy",
  //     from = $( "#tglAwal1" )
  //       .datepicker({
  //         defaultDate: "+1w",
  //         changeMonth: true,
  //         numberOfMonths: 3
  //       })
  //       .on( "change", function() {
  //         to.datepicker( "option", "minDate", getDate( this ) );
  //       }),
  //     to = $( "#tglAkhirLoan" ).datepicker({
  //       defaultDate: "+1w",
  //       changeMonth: true,
  //       numberOfMonths: 3
  //     })
  //     .on( "change", function() {
  //       from.datepicker( "option", "maxDate", getDate( this ) );
  //     });
 
  //   function getDate( element ) {
  //     var date;
  //     try {
  //       date = $.datepicker.parseDate( dateFormat, element.value );
  //     } catch( error ) {
  //       date = null;
  //     }
 
  //     return date;
  //   }
  // } );
</script>