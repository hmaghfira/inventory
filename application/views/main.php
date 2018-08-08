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

  <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="pcreservation">
    <div class="my-auto">
      <h2 class="mb-3">PC RESERVATION</h2>

      <div class="resume-item mb-5">
        <div class="resume-content mr-auto" style="width: 100%">
          <div class="tab" style="text-align: center;">
            <button class="tablinks" onclick="openCity(event, 'New')" id="defaultOpen" style="width: 50%"><b>New Reservation</b></button>
            <button class="tablinks" onclick="openCity(event, 'Upload')" style="width: 50%"><b>Upload Form</b></button>
          </div>

          <!-- NEW RESERVE -->
          <div id="New" class="tabcontent">
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
          <!-- EO NEW RESERVE -->

          <!-- UPLOAD FORM -->
          <div id="Upload" class="tabcontent">
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

          <script>
          function openCity(evt, content) {
              var i, tabcontent, tablinks;
              tabcontent = document.getElementsByClassName("tabcontent");
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
          </script>
        </div>
      </div>
    </div>
  </section>

  <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="inventory">
    <div class="my-auto">
      <h2 class="mb-5">Education</h2>

      <div class="resume-item d-flex flex-column flex-md-row mb-5">
        <div class="resume-content mr-auto">
          <h3 class="mb-0">University of Colorado Boulder</h3>
          <div class="subheading mb-3">Bachelor of Science</div>
          <div>Computer Science - Web Development Track</div>
          <p>GPA: 3.23</p>
        </div>
        <div class="resume-date text-md-right">
          <span class="text-primary">August 2006 - May 2010</span>
        </div>
      </div>

      <div class="resume-item d-flex flex-column flex-md-row">
        <div class="resume-content mr-auto">
          <h3 class="mb-0">James Buchanan High School</h3>
          <div class="subheading mb-3">Technology Magnet Program</div>
          <p>GPA: 3.56</p>
        </div>
        <div class="resume-date text-md-right">
          <span class="text-primary">August 2002 - May 2006</span>
        </div>
      </div>

    </div>
  </section>

  <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="contact">
    <div class="my-auto">
      <h2 class="mb-5">Skills</h2>

      <div class="subheading mb-3">Programming Languages &amp; Tools</div>
      <ul class="list-inline list-icons">
        <li class="list-inline-item">
          <i class="devicons devicons-html5"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicons-css3"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicons-javascript"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicons-jquery"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicons-sass"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicons-less"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicons-bootstrap"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicons-wordpress"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicons-grunt"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicons-gulp"></i>
        </li>
        <li class="list-inline-item">
          <i class="devicons devicons-npm"></i>
        </li>
      </ul>

      <div class="subheading mb-3">Workflow</div>
      <ul class="fa-ul mb-0">
        <li>
          <i class="fa-li fa fa-check"></i>
          Mobile-First, Responsive Design</li>
        <li>
          <i class="fa-li fa fa-check"></i>
          Cross Browser Testing &amp; Debugging</li>
        <li>
          <i class="fa-li fa fa-check"></i>
          Cross Functional Teams</li>
        <li>
          <i class="fa-li fa fa-check"></i>
          Agile Development &amp; Scrum</li>
      </ul>
    </div>
  </section>
</div>

<script type="text/javascript">
  // DATERANGEPICKER
  $(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
    }, function(start, end, label) {
      console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
  });
</script>